<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;

final class TagRepository
{
    public function create(array $data): void
    {
        Tag::firstOrCreate($data);
    }
    public function updateTag(array $data): void
    {
        DB::table('tags')->update($data);
    }
}
