<?php

namespace App\Http\Controllers\Secretary;

use App\Enums\RoleUserEnum;
use App\Models\User;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Secretary\UserRequest;

class SecretaryUserController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('secretary.user.index', [
            'users' => $searchBar->userRequester(),
        ]);
    }

    public function create(): View
    {
        return view('secretary.user.new', [
            'user' => new User(),
        ]);
    }

    public function store(UserRequest $request): RedirectResponse
    {
        User::create([
            ...$request->validated(),
            'password' => Hash::make($request->validated('password')),
            'role' => RoleUserEnum::ROLE_REQUESTER->value
        ]);

        return redirect()->route('&user.index')
            ->with('success', 'utilisateur ajouté');
    }

    public function show(User $user): View
    {
        return view('secretary.user.show', [
            'user' => $user,
        ]);
    }

    public function edit(User $user): View
    {
        return view('secretary.user.edit', [
            'user' => $user,
        ]);
    }

    public function update(
        UserRequest $request,
        User $user
    ): RedirectResponse {
        $user->update($request->validated());

        return redirect()->route('&user.index')
            ->with('success', 'utilisateur edité');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('&user.index')
            ->with('success', 'utilisateur supprimé');
    }
}
