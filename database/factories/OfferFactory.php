<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Foreign keys
            'company_id' => $this->faker->numberBetween(1, 3),
            // Data
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            // Links
            'application_link' => $this->faker->url,
            // Tags
            'tags' => implode('|' ,$this->faker->words(3)),
        ];
    }
}
