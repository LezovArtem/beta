<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\View\View;

final class ReturnCreateViewController extends Controller
{
    public function __invoke(): View
    {
        /**
         * 1. add return type +
         * 2. rename class +
         * 3. declare(strict_types=1) +
         * 4. add final +
        */

        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.create', compact('categories', 'tags'));
    }
}
