<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory {

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        // Retrieve a random person from the database
        $person = \App\Models\Person::inRandomOrder()->first();

        return [
            'name' => fake()->unique()->word,
            'description' => fake()->sentence,
            'value' => fake()->randomNumber(4),
            'purchased' => Carbon::now()->subDays(fake()->numberBetween(1, 365)),
            'person_id' => $person->id, // Set the person_id attribute to the selected person's id
        ];
    }

}
