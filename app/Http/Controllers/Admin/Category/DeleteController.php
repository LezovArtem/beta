<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

final class DeleteController extends Controller
{
    public function __invoke(Category $category): RedirectResponse
    {
        $category->delete();

        return redirect()->route('admin.categories.index');
    }
}
