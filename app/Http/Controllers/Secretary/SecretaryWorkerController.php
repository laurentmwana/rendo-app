<?php

namespace App\Http\Controllers\Secretary;

use App\Models\Hourly;
use App\Models\Worker;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class SecretaryWorkerController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('secretary.worker.index', [
            'workers' => $searchBar->worker(),
        ]);
    }

    public function show(Worker $worker): View
    {
        return view('secretary.worker.show', [
            'worker' => $worker,
        ]);
    }
}
