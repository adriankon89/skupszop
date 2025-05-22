<?php

namespace Tests\Feature;

use App\Models\Attribute;
use Tests\TestCase;

class TaskFiveTest extends TestCase
{
    public function testCanSeeBookEditPage(): void
    {
        $attribute = Attribute::factory()->create();
        $response = $this->get(route('attributes.edit', $attribute));
        $response->assertStatus(200);
        $response->assertSee('Edycja');
    }
}
