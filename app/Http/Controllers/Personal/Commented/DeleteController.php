<?php

declare(strict_types=1);

namespace App\Http\Controllers\Personal\Commented;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;

final class DeleteController extends Controller
{
    public function __invoke(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return redirect()->route('personal.commented');
    }
}
