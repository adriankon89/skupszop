<?php

namespace Tests\Feature;

use App\Models\Category;
use Database\Seeders\CategorySeeder;
use Tests\TestCase;

class TaskSevenTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->seed(CategorySeeder::class);
    }

    public function testCanGetCategoriesWithGlobalScope(): void
    {
        $popularityCategoriesCount = Category::count();
        $popularityCategoriesCountExpected = Category::withoutGlobalScope('category')
            ->where('popularity', '>', 2.0)
            ->count();

        $this->assertEquals($popularityCategoriesCount, $popularityCategoriesCountExpected);
    }
}
