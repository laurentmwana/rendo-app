<?php

namespace App\Http\Controllers\Admin;

use App\Models\Secretary;
use App\Search\SearchBar;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\SecretaryRequest;

class AdminSecretaryController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('admin.secretary.index', [
            'secretaries' => $searchBar->secretary()
        ]);
    }

    public function create(): View
    {
        return view('admin.secretary.new', [
            'secretary' => (new Secretary())
        ]);
    }

    public function store(SecretaryRequest $request): RedirectResponse
    {
        Secretary::create($request->validated());

        return redirect()
            ->route('~secretary.index')
            ->with('success', 'secretaire ajouté');
    }

    public function show(Secretary $secretary): View
    {
        return view('admin.secretary.show', [
            'secretary' => $secretary
        ]);
    }


    public function edit(Secretary $secretary): View
    {
        return view('admin.secretary.edit', [
            'secretary' => $secretary
        ]);
    }

    public function update(SecretaryRequest $request, Secretary $secretary): RedirectResponse
    {
        $secretary->update($request->validated());

        return redirect()
            ->route('~secretary.index')
            ->with('success', 'secretaire edité');
    }

    public function destroy(Secretary $secretary): RedirectResponse
    {
        $secretary->delete();

        return redirect()
            ->route('~secretary.index')
            ->with('success', 'secretaire supprimé');
    }
}
