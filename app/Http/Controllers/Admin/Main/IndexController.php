<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        $data = [];
        $data['userCount'] = User::count();
        $data['postCount'] = Post::count();
        $data['categoryCount'] = Category::count();
        $data['tagCount'] = Tag::count();

        return view('admin.main.index', compact('data'));
    }
}
