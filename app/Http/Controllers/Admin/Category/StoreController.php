<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Repository\CategoryRepository;
use Illuminate\Http\RedirectResponse;

final class StoreController extends Controller
{
    public function __construct(
        private CategoryRepository $categoryRepository,
    ) {
    }

    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $this->categoryRepository->create($data);

        return redirect()->route('admin.categories.index');
    }
}
