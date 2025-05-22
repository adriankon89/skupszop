<?php

namespace Tests\Feature;

use App\Models\Author;
use Tests\TestCase;

class TaskFourTest extends TestCase
{
    public function testCanSeeAuthorEditPage(): void
    {
        $author = Author::factory()->create();
        $response = $this->get(route('authors.edit', $author));
        $response->assertStatus(200);
    }
}
