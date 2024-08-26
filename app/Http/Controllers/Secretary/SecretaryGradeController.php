<?php

namespace App\Http\Controllers\Secretary;

use App\Models\Grade;
use App\Models\Hourly;
use App\Models\Worker;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class SecretaryGradeController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('secretary.grade.index', [
            'grades' => $searchBar->grade(),
        ]);
    }

    public function show(Grade $grade): View
    {
        return view('secretary.grade.show', [
            'grade' => $grade,
        ]);
    }
}
