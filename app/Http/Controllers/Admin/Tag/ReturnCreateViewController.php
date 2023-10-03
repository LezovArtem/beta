<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

final class ReturnCreateViewController extends Controller
{
    public function __invoke(): View
    {
        /**
         * 1. add return type +
         * 2. rename class +
         * 3. declare(strict_types=1) +
         * 4. add final +
        */
        return view('admin.tags.create');
    }
}
