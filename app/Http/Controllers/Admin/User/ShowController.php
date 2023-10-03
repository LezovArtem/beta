<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

final class ShowController extends Controller
{
    public function __invoke(User $user): View
    {
        return view('admin.users.show', compact('user') );
    }
}
