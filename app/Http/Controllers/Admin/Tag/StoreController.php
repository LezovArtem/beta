<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Repository\TagRepository;
use Illuminate\Http\RedirectResponse;

final class StoreController extends Controller
{
    public function __construct(
        private TagRepository $tagRepository,
    ) {
    }

    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->tagRepository->create($data);

        return redirect()->route('admin.tags.index');
    }
}
