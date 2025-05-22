<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TaskOneTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCanStoreCategoryFile(): void
    {
        Storage::fake('local');
        $fileName = 'file-test.pdf';
        $book = Book::factory()->create();

        $file = UploadedFile::fake()->create($fileName, 3000);

        $response = $this->putJson(route('books.update', $book), ['file' => $file]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('books', ['id' => $book->id, 'isbn' => $book->isbn, 'filename' => $fileName]);
    }
}
