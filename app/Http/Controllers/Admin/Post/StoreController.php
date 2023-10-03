<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Repository\PostRepository;
use Illuminate\Http\RedirectResponse;

final class StoreController extends Controller
{
    public function __construct(
        private PostRepository $postRepository,
    ) {
    }

    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->postRepository->create($data);

        return redirect()->route('admin.posts.index');
    }
}
