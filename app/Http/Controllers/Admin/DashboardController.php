<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Models\Worker;
use App\Models\Secretary;
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
            'gradeCount' => Grade::count(),
            'workerCount' => Worker::count(),
            'secretaryCount' => Secretary::count()
        ];
    }
}
