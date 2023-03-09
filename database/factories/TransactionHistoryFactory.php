<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "transfer_id"=>$this->faker->numberBetween(1,100),
            "receive_id"=>$this->faker->numberBetween(1,100),
            "amount"=>$this->faker->randomNumber(),
            "status"=>$this->faker->boolean(),
        ];
    }
}
