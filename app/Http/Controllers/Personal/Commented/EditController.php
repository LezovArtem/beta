<?php

declare(strict_types=1);

namespace App\Http\Controllers\Personal\Commented;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\View\View;

final class EditController extends Controller
{
    public function __invoke(Comment $comment): View
    {
        return view('personal.commented.edit', compact('comment'));
    }
}
