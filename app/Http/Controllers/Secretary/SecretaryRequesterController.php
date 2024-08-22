<?php

namespace App\Http\Controllers\Secretary;

use App\Models\Requester;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Secretary\RequesterRequest;

class SecretaryRequesterController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('secretary.requester.index', [
            'requesters' => $searchBar->requester()
        ]);
    }

    public function create(): View
    {
        return view('secretary.requester.new', [
            'requester' => (new Requester())
        ]);
    }

    public function store(RequesterRequest $request): RedirectResponse
    {
        Requester::create($request->validated());

        return redirect()
            ->route('&requester.index')
            ->with('success', 'demandeur ajouté');
    }

    public function show(Requester $requester): View
    {
        return view('secretary.requester.show', [
            'requester' => $requester
        ]);
    }

    public function edit(Requester $requester): View
    {
        return view('secretary.requester.edit', [
            'requester' => $requester
        ]);
    }

    public function update(RequesterRequest $request, Requester $requester): RedirectResponse
    {
        $requester->update($request->validated());

        return redirect()
            ->route('&requester.index')
            ->with('success', 'demandeur edité');
    }

    public function destroy(Requester $requester): RedirectResponse
    {
        $requester->delete();

        return redirect()
            ->route('&requester.index')
            ->with('success', 'demandeur supprimé');
    }
}
