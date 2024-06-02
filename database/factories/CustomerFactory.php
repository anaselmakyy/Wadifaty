<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name,
            'age'=>fake()->numberBetween(19,40),
            'country'=>fake()->country,
            'type'=>fake()->country,
            'phone' =>fake()->phoneNumber,
            'email'=>fake()->email,
            'password'=>fake()->password
        ];
    }
}
