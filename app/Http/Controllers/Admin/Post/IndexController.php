<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        $posts = Post::withTrashed()->get();

        return view('admin.posts.index', compact('posts'));
    }
}
