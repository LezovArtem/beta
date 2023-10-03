<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

final class RestoreController extends Controller
{
    public function __invoke($id): RedirectResponse
    {
        Post::withTrashed()->find($id)->restore();

        return redirect()->route('admin.posts.index');
    }
}
