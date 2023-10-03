<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\User;

final class UserRepository
{
    public function create(array $data): void
    {

        User::firstOrCreate(['email' => $data['email']], $data);

    }
    public function updateUser(array $data, User $user): void
    {
        $user->update($data);
    }
}
