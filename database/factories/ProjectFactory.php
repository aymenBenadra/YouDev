<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'user_id' => $this->faker->numberBetween(1, 3),
            // Data
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            // Links
            'image_link' => $this->faker->imageUrl,
            'github_link' => $this->faker->url,
            'design_link' => $this->faker->url,
        ];
    }
}
