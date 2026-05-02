<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Department::all();
        return view('admin/departments/index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/departments/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $model = new Department();
        $model->create($validated);

        return redirect()->route('departments.index')->with('success', 'Record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Department::find($id);
        return view('admin/departments/edit', compact('row'));
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => ''
        ]);

        $model = Department::find($id);
        // dd($validated);
        $model->update($validated);

        return redirect()->route('departments.index', $id)->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Department::find($id);
        $model->delete();
        return redirect()->route('departments.index')->with('success', 'Record deleted successfully.');
    }
}
