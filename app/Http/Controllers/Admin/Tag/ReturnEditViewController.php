<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;

final class ReturnEditViewController extends Controller
{
    public function __invoke(Tag $tag): View
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
