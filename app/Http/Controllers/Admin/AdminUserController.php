<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\UserRequest;

class AdminUserController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('admin.user.index', [
            'users' => $searchBar->user(),
        ]);
    }

    public function create(): View
    {
        return view('admin.user.index', [
            'user' => new User(),
        ]);
    }

    public function store(UserRequest $request): RedirectResponse
    {
        User::create([
            ...$request->validated(),
            'password' => Hash::make($request->validated('password')),
        ]);

        return redirect()->route('~user.index')
            ->with('success', 'utilisateur ajouté');
    }

    public function show(User $user): View
    {
        return view('admin.user.show', [
            'user' => $user,
        ]);
    }

    public function edit(User $user): View
    {
        return view('admin.user.edit', [
            'user' => $user,
        ]);
    }


    public function update(
        UserRequest $request,
        User $user
    ): RedirectResponse {
        $user->update($request->validated());

        return redirect()->route('~user.index')
            ->with('success', 'utilisateur edité');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('~user.index')
            ->with('success', 'utilisateur supprimé');
    }
}
