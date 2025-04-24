<?php

namespace Database\Factories;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition():array{
         
        $studentIds = Student::pluck('id')->toArray();
        static $index = 0; 
        $studentId = $studentIds[$index++];
        
        return [
            'student_id' => $studentId,
            'grade' => Student::find($studentId)->grade,
            'term' => 1,
            'japanese' => $this->faker->numberBetween(60, 100),
            'math' => $this->faker->numberBetween(60, 100),
            'science' => $this->faker->numberBetween(60, 100),
            'social_studies' => $this->faker->numberBetween(60, 100),
            'music' => $this->faker->numberBetween(60, 100),
            'home_economics' => $this->faker->numberBetween(60, 100),
            'english' => $this->faker->numberBetween(60, 100),
            'art' => $this->faker->numberBetween(60, 100),
            'physical_education' => $this->faker->numberBetween(60, 100),
        ];
    }
}
