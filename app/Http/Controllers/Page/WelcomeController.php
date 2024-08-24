<?php

namespace App\Http\Controllers\Page;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Hourly;

class WelcomeController extends Controller
{
    public function __invoke(): View
    {
        return view('welcome.index', $this->getParams());
    }

    private function getParams(): array
    {
        return  [
            'hourlies' => Hourly::orderBy('id')
                ->limit(7)
                ->get()
        ];
    }
}
