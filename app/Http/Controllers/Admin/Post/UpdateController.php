<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use App\Repository\PostRepository;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends Controller
{
    public function __construct(
        private PostRepository $postRepository
    )
    {
    }

    public function __invoke(UpdateRequest $request, Post $post): RedirectResponse
    {
        $data = $request->validated();

        $this->postRepository->updatePost($data, $post);

        return redirect()->route('admin.posts.index');
    }
}
