<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Data
            'name' => $this->faker->unique()->company,
            'password' => password_hash($this->faker->password, PASSWORD_DEFAULT),
            // Links
            'website_link' => $this->faker->url,
            'logo_link' => $this->faker->imageUrl,
        ];
    }
}
