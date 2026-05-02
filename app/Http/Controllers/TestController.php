<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $users =  Test::all();
        return view('test/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('test/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:tests',
            'comments' => 'required'
        ]);
        

        // $test = Test::create($validated);
        
        $test = new Test();
        $test::create($validated);
        return redirect()->route('test.index')->with('success', 'Record created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // echo "this is show function";
        $row = Test::find($id);
        // dd($row);
        return view('test/show', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Test::find($id);
        // dd($row);
        return view('test/edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comments' => 'required'
        ]);

        $test = Test::find($id);
        $test->update($validated);
        return redirect()->route('test.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
