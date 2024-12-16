<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->sentence(2, true),
            'description'=>fake()->sentence(25, true),
            'datetime'=>fake()->dateTime(),
            'capacity'=>fake()->numberBetween(15, 255),
            'localization'=>fake()->word()
        ];
    }
}
