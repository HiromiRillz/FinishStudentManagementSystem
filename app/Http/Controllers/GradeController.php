<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Models\Student;
use App\Models\Grade;

class GradeController extends Controller
{
    
    public function showStudentGrade($studentId){
        $user = auth()->user();
        $student = Student::findOrFail($studentId);
        $grades = Grade::where('student_id', $studentId)->get();
    
        return view('StudentGradeRegister', compact('student', 'grades', 'user'));
    }
    
    public function registerStudentGrade(Request $request, $id){
        $request->validate([
            'term' => 'required|integer|min:1|max:4',
            'grades' => 'required|array',
            'grades.*' => 'nullable|integer|min:0|max:100',
        ]);
    
        $subjects = [
            'japanese', 'math', 'science', 'social_studies',
            'music', 'home_economics', 'english', 'art',
            'physical_education'
        ];
        $grade = Grade::where('student_id', $id)->first();
    
        if ($grade) {
            $grade->term = $request->term;
            foreach ($subjects as $subject) {
                $grade->$subject = $request->grades[$subject] ?? $grade->$subject;
            }
            $grade->save();
        } else {
            $data = ['student_id' => $id, 'term' => $request->term];
            foreach ($subjects as $subject) {
                $data[$subject] = $request->grades[$subject] ?? null;
            }
            Grade::create($data);
        }
    
        return redirect()->route('student.show', $id)->with('success', '成績が登録されました。');

    }

    public function editStudentGrade($id){
        $user = auth()->user();
        $student = Student::findOrFail($id);
        $grades = Grade::where('student_id', $id)->get();
    
        return view('StudentGradeEdit', compact('student', 'grades', 'user'));
    }

    public function updateStudentGrade(Request $request){
        $validatedData = $request->validate([
            'grades.*.japanese' => 'nullable|integer|min:0|max:100',
            'grades.*.math' => 'nullable|integer|min:0|max:100',
            'grades.*.science' => 'nullable|integer|min:0|max:100',
            'grades.*.social_studies' => 'nullable|integer|min:0|max:100',
            'grades.*.music' => 'nullable|integer|min:0|max:100',
            'grades.*.home_economics' => 'nullable|integer|min:0|max:100',
            'grades.*.english' => 'nullable|integer|min:0|max:100',
            'grades.*.art' => 'nullable|integer|min:0|max:100',
            'grades.*.physical_education' => 'nullable|integer|min:0|max:100',
        ]);
        foreach ($validatedData['grades'] as $gradeId => $subjectGrades) {
            $grade = Grade::findOrFail($gradeId);
            $grade->update($subjectGrades);
        }
        return redirect()->back();
    }
}
