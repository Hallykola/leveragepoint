<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LicenceAmmendentRequestFactory extends Factory
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
            'user_id'=>$this->faker->randomNumber(),
            'applicantname'=>$this->faker->name(),
            'licencenumber'=>$this->faker->randomNumber(),
            'extra'=>$this->faker->randomNumber(),
            'applicantphonenumber'=>$this->faker->phoneNumber(),
            'applicantemailaddress'=>$this->faker->unique()->safeEmail(),
            'applicantfax'=>$this->faker->phoneNumber(),
            'form'=>$this->faker->randomNumber(),

        ];
    }
}
