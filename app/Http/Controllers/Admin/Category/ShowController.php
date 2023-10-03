<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;

final class ShowController extends Controller
{
    public function __invoke(Category $category): View
    {
        return view('admin.categories.show', compact('category') );
    }
}
