<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;

final class DeleteController extends Controller
{
    public function __invoke(Tag $tag): RedirectResponse
    {
        $tag->delete();

        return redirect()->route('admin.tags.index');
    }
}
