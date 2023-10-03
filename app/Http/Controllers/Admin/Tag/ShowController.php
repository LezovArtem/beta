<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;

final class ShowController extends Controller
{
    public function __invoke(Tag $tag): View
    {
        return view('admin.tags.show', compact('tag') );
    }
}
