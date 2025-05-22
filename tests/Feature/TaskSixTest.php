<?php

namespace Tests\Feature;

use App\Models\Attribute;
use Tests\TestCase;

class TaskSixTest extends TestCase
{
    public function testCanSeeAttributesList(): void
    {
        Attribute::factory()->create();
        $response = $this->get(route('attributes.index'));
        $response->assertStatus(200);
    }
}
