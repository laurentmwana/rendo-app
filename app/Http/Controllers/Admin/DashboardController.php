<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('admin.dashboard.index', $this->getParams());
    }

    private function getParams(): array
    {
        return [
            'gradeCount' => 12,
            'workerCount' => 14,
            'secretaryCount' => 14
        ];
    }
}
