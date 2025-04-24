<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'grade'=>$this->faker->numberBetween(1,3),
            'address'=>$this->faker->address(),
            'comment'=>$this->faker->realText(100),
        ];
    }
}
