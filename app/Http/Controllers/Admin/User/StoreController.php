<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Repository\UserRepository;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

final class StoreController extends Controller
{
    public function __construct(
        private UserRepository $userRepository,
    ) {
    }

    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $password = Str::random(10);
        $data['password'] = Hash::make($password);

        $user = $this->userRepository->create($data);

        Mail::to($data['email'])->send(new PasswordMail($password));
        event(new Registered($user));


        return redirect()->route('admin.users.index');
    }
}
