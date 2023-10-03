<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

final class RestoreController extends Controller
{
    public function __invoke($id): RedirectResponse
    {
        Category::withTrashed()->find($id)->restore();

        return redirect()->route('admin.categories.index');
    }
}
