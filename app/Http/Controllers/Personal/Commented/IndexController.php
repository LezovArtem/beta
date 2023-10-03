<?php

declare(strict_types=1);

namespace App\Http\Controllers\Personal\Commented;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        $comments = auth()->user()->comments;
        //$posts = Post::with($comments)->get();
        return view('personal.commented.index', compact('comments'));
    }
}
