<?php

namespace App\Http\Controllers\Page;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function __invoke(): View
    {
        return view('welcome.index');
    }
}
