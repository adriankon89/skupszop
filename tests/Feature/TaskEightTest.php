<?php

namespace Tests\Feature;

use App\Models\Author;
use Database\Seeders\AuthorSeeder;
use Tests\TestCase;

class TaskEightTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->seed(AuthorSeeder::class);
    }

    public function testAuthorsModelWillUseSlugAsRouteModelBinding(): void
    {
        $author = Author::first();
        $original = route('authors.show', $author);
        $expected = url('/') . '/authors/' . $author->slug;
        $this->assertEquals($expected, $original);
        $response = $this->get($original);
        $response->assertStatus(200);
    }
}
