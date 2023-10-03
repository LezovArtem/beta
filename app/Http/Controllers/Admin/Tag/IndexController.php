<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        $tags = Tag::withTrashed()->get();

        return view('admin.tags.index', compact('tags'));
    }
}
