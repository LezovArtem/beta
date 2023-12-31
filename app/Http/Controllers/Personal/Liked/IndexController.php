<?php

declare(strict_types=1);

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        $posts = auth()->user()->likedPosts;
        return view('personal.liked.index', compact('posts'));
    }
}
