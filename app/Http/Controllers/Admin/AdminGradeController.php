<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Search\SearchBar;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\GradeRequest;

class AdminGradeController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('admin.grade.index', [
            'grades' => $searchBar->grade()
        ]);
    }

    public function create(): View
    {
        return view('admin.grade.new', [
            'grade' => (new Grade())
        ]);
    }

    public function store(GradeRequest $request): RedirectResponse
    {
        Grade::create($request->validated());

        return redirect()
            ->route('~grade.index')
            ->with('success', 'grade ajouté');
    }

    public function show(Grade $grade): View
    {
        return view('admin.grade.show', [
            'grade' => $grade
        ]);
    }


    public function edit(Grade $grade): View
    {
        return view('admin.grade.create', [
            'grade' => $grade
        ]);
    }

    public function update(GradeRequest $request, Grade $grade): RedirectResponse
    {
        $grade->update($request->validated());

        return redirect()
            ->route('~grade.index')
            ->with('success', 'grade edité');
    }

    public function destroy(Grade $grade): RedirectResponse
    {
        $grade->delete();

        return redirect()
            ->route('~grade.index')
            ->with('success', 'grade supprimé');
    }
}
