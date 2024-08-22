<?php

namespace App\Http\Controllers\Secretary;

use App\Models\Hourly;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\HourlyRequest;

class SecretaryHourlyController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('secretary.hourly.index', [
            'hourlies' => $searchBar->hourly(),
        ]);
    }

    public function show(Hourly $hourly): View
    {
        return view('secretary.hourly.show', [
            'hourly' => $hourly,
        ]);
    }
}
