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
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(),
            'content' => $this->faker->paragraphs(5, true),
            'image' => 'img/project/' . $this->faker->numberBetween(1, 3) . '.jpg',
            'start_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['active', 'completed', 'upcoming']),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
        ];
    }
}
