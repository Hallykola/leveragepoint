<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name(),
            'user_id'=>$this->faker->randomNumber(),
            'email'=>$this->faker->unique()->safeEmail(),
            'telephone'=>$this->faker->phoneNumber(),
            'position'=>$this->faker->title(),
            'employmentnumber'=>$this->faker->phoneNumber()
        ];
    }
}
