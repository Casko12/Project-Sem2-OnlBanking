<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "type_name"=>$this->faker->name,
            "interest"=>$this->faker->numberBetween(1,5),
            "status"=>$this->faker->boolean(true),
        ];
    }
}
