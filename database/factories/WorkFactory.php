<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nameGiver'=>fake()->name,
            'nameWorker'=>fake()->name,
            'phoneGiver'=>fake()->phoneNumber(),
            'emailGiver'=>fake()->email(),
            'phoneWorker'=>fake()->phoneNumber(),
            'emailWorker'=>fake()->email(),
            'message'=>fake()->realText,
            'idGiver'=>fake()->numberBetween(1,2),
            'idWorker'=>fake()->numberBetween(3,4)
        ];
    }
}
