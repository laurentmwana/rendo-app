<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hourly;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\HourlyRequest;

class AdminHourlyController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('admin.hourly.index', [
            'hourlies' => $searchBar->hourly(),
        ]);
    }

    public function show(Hourly $hourly): View
    {
        return view('admin.hourly.show', [
            'hourly' => $hourly,
        ]);
    }

    public function edit(Hourly $hourly): View
    {
        return view('admin.hourly.edit', [
            'hourly' => $hourly,
        ]);
    }

    public function update(
        HourlyRequest $request,
        Hourly $hourly
    ): RedirectResponse {
        $hourly->update($request->validated());

        return redirect()->route('~hourly.index')
            ->with('success', 'horaire de visite editée');
    }
}
