<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

final class IndexController extends Controller
{
    public function __invoke(): View
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }
}
