<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;

final class RestoreController extends Controller
{
    public function __invoke($id): RedirectResponse
    {
        Tag::withTrashed()->find($id)->restore();

        return redirect()->route('admin.tags.index');
    }
}
