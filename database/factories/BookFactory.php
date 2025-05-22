<?php

namespace Database\Factories;

use App\Enums\BookBindingEnum;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => fake()->isbn13(),
            'title'=> fake()->sentence(),
            'author_id'=> Author::factory()->create(),
            'binding' => fake()->randomElement(BookBindingEnum::values()),
            'released_at'=> fake()->dateTimeBetween('-10 years', '-1 year'),
        ];
    }
}
