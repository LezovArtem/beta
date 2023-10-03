<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Repository\TagRepository;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends Controller
{
    public function __construct(
        private TagRepository $tagRepository
    )
    {
    }

    public function __invoke(UpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->tagRepository->updateTag([
            'title' => $data['title']
        ]);

        return redirect()->route('admin.tags.index');
    }
}
