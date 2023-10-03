<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

final class CategoryRepository
{
    public function create(array $data): void
    {
        Category::firstOrCreate($data);
    }
    public function updateCategory(array $data): void
    {
        DB::table('categories')->update($data);
    }
}
