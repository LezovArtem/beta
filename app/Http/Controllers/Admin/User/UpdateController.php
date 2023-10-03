<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Http\RedirectResponse;

final class UpdateController extends Controller
{
    public function __construct(
        private UserRepository $userRepository,
    )
    {
    }

    public function __invoke(UpdateRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        $this->userRepository->updateUser($data, $user);

        return redirect()->route('admin.users.index');
    }
}
