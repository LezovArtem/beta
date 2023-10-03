<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        $categories = Category::withTrashed()->get();

        return view('admin.categories.index', compact('categories'));
    }
}
