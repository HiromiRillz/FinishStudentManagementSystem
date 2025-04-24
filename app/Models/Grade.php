<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_id',
        'grade',
        'term',
        'japanese',
        'math',
        'science',
        'social_studies',
        'music',
        'home_economics',
        'english',
        'art',
        'physical_education'
    ];

    public function students(){
        return $this->belongsTo('App\Models\Student');
    }


    public function getStudentGrades($studentId){
        $studentWithGrades = Student::leftJoin('grades', 'students.id', '=', 'grades.student_id')
        ->select('students.id', 'students.name', 'grades.grade')
        ->where('students.id', $studentId)
        ->first();
        return response()->json($studentWithGrades);
    }

}
