<?php

namespace App\Http\Controllers\Page;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{

    public function about(): View
    {
        return view('page.about');
    }

    public function obj(): View
    {
        return view('page.obj');
    }

    public function client(): View
    {
        return view('page.client');
    }


    public function historic(): View
    {
        return view('page.historic');
    }
    public function politico(): View
    {
        return view('page.politico');
    }
}
