<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Repository\CategoryRepository;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends Controller
{
    public function __construct(
        private CategoryRepository $categoryRepository
    )
    {
    }

    public function __invoke(UpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $this->categoryRepository->updateCategory([
            'title' => $data['title']
        ]);

        return redirect()->route('admin.categories.index');
    }
}
