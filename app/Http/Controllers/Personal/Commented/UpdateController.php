<?php

declare(strict_types=1);

namespace App\Http\Controllers\Personal\Commented;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comments\UpdateRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Comment $comment): RedirectResponse
    {
        $data = $request->validated();
        $comment->update($data);

        return redirect()->route('personal.commented');
    }
}
