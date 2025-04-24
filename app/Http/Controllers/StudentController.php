<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Student;
use App\Models\Grade;

class StudentController extends Controller
{

    public function createStudent(){
        return view('StudentRegister');
    }

    public function registerStudent(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'img_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imgPath = null;
        if ($request->hasFile('img_path')) {
            $imgPath = $request->file('img_path')->store('img_path', 'public');
        } else {
            $imgPath = 'default.jpg';
        }
    
        $student = Student::create([
            'name' => $validated['name'],
            'address' => $validated['address'],
            'img_path' => $imgPath,
        ]);
    
        $student->grades()->create([
            'grade' => null,
            'term' => null,
        ]);
        return redirect()->route('show.MainPage')->with('success', '学生の登録が成功しました。');
    }
    
    

    public function editStudentInfo(Student $student){
        $user = auth()->user();
        return view('StudentInfoEdit', compact('student', 'user'));
    }

    public function updateStudentInfo(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'grade' => 'required|integer|min:1|max:3',
            'student-id' => 'required|integer|exists:students,id',
            'address' => 'required|string|max:255',       
            'comment' => 'nullable|string|max:255',
            'img_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $student = Student::findOrFail($request->input('student-id'));

        $student->update([
            'name' => $validated['name'],
            'grade' => $validated['grade'],
            'address' => $validated['address'],
            'comment' => $validated['comment'],
        ]);


        if ($request->hasFile('img_path')) {
            $img_Path = $request->file('img_path')->store('img_path', 'public');

            if ($student->img_path) {
                Storage::disk('public')->delete($student->img_path);
            }
        
            $student->update(['img_path' => $img_Path]);
        }

        $gradeRecord = Grade::where('student_id', $student->id)->first(); 
        if ($gradeRecord) {
            $gradeRecord->update([
                'grade' => $validated['grade'],
            ]);
        }
        return redirect()->route('student.edit', $student->id)->with('success', '学生情報が更新されました！');
    }


    public function showStudentDetails($id){
        $user = auth()->user();
        $student = Student::findOrFail($id);
    
        $grades = Grade::where('student_id', $id)->get();
        return view('StudentDetail', compact('student', 'grades','user'));

    }


    public function studentSearch(Request $request){
        $user = auth()->user();
        $query = Student::query();

        if ($request->input('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->input('grade-level')) {
            $query->where('grade', $request->input('grade-level'));
        }

        $students = $query->paginate(5);

        return view('StudentSearch', [
            'user' => $user,
            'students' => $students,
            'searchName' => $request->input('name'),
            'searchGrade' => $request->input('grade-level'),
        ]);
    }

    public function updateGrades(){
        $students = Student::all();

        foreach ($students as $student) {
            if ($student->grade <= 3) {
                $newGrade = $student->grade + 1;
                $student->update(['grade' => $newGrade]);
                $student->grades()->update(['grade' => $newGrade]);
            }
        }
        $studentsToDelete = Student::where('grade', '>', 3)->get();
        foreach ($studentsToDelete as $student) {
            $student->delete();
        }

        return redirect()->route('show.MainPage')->with('success', '情報更新成功しました！');
    }
}