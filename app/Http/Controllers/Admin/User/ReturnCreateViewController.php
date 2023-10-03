<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

final class ReturnCreateViewController extends Controller
{
    public function __invoke(): View
    {
        /**
         * 1. add return type +
         * 2. rename class +
         * 3. declare(strict_types=1) +
         * 4. add final +
        */
        $roles = User::getRoles();

        return view('admin.users.create', compact('roles'));
    }
}
