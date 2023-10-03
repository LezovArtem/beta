<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

final class RestoreController extends Controller
{
    public function __invoke($id): RedirectResponse
    {
        User::withTrashed()->find($id)->restore();

        return redirect()->route('admin.users.index');
    }
}
