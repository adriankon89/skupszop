<?php

namespace Tests\Feature;

use App\Models\Attribute;
use Database\Seeders\AttributeSeeder;
use Tests\TestCase;

class TaskTenTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->seed(AttributeSeeder::class);
    }

    public function testAttributesAreCreatedProperly(): void
    {
        $attributesCount = Attribute::count();
        $this->assertNotEquals(0, $attributesCount);
    }
}
