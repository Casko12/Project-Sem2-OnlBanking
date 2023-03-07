<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'birthday' => $this->faker->date,
            'address' => $this->faker->address,
            'national_id' => $this->faker->numberBetween(100000,999999),
            'image_face' => $this->faker->image,
            'image_id1' => $this->faker->image,
            'image_id2' => $this->faker->image,
            'status' => $this->faker->numberBetween(0,2),
            'pin' => $this->faker->numberBetween(1000,9999),
            'telephone' => $this->faker->phoneNumber,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
