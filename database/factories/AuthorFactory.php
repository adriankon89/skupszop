<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'birth_date' => fake()->dateTimeBetween('-100 years', '-90 years'),
            'dead_date' => fake()->dateTimeBetween('-10 years', '-5 years'),
        ];
    }
}
