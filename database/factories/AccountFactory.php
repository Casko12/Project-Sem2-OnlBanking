<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "account_number"=>$this->faker->randomNumber(8),
            "bank_id"=>$this->faker->numberBetween(1,9),
            "user_id"=>$this->faker->numberBetween(1,100),
            "account_type_id"=>$this->faker->numberBetween(1,5),
            "date_created"=>$this->faker->date,
            "balance"=>$this->faker->randomNumber(),
            "status"=>$this->faker->numberBetween(0,2),
        ];
    }
}
