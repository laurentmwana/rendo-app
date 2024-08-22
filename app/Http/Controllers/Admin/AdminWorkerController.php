<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Models\Worker;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\GradeRequest;
use App\Http\Requests\Admin\WorkerRequest;

class AdminWorkerController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('admin.worker.index', [
            'workers' => $searchBar->worker()
        ]);
    }

    public function create(): View
    {
        return view('admin.worker.new', [
            'worker' => (new Worker())
        ]);
    }

    public function store(WorkerRequest $request): RedirectResponse
    {
        Worker::create($request->validated());

        return redirect()
            ->route('~worker.index')
            ->with('success', 'travailleur ajouté');
    }

    public function show(Worker $worker): View
    {
        return view('admin.worker.show', [
            'worker' => $worker
        ]);
    }


    public function edit(Worker $worker): View
    {
        return view('admin.worker.edit', [
            'worker' => $worker
        ]);
    }

    public function update(WorkerRequest $request, Worker $worker): RedirectResponse
    {
        $worker->update($request->validated());

        return redirect()
            ->route('~worker.index')
            ->with('success', 'travailleur edité');
    }

    public function destroy(Worker $worker): RedirectResponse
    {
        $worker->delete();

        return redirect()
            ->route('~worker.index')
            ->with('success', 'travailleur supprimé');
    }
}
