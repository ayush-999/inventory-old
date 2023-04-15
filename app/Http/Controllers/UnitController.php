<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();
        $page_title = 'Unit';

        return view('unit.index', compact('units', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = 'Create Unit';

        return view('unit.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'short_form' => 'required|string',
        ]);

        Unit::create([
            'name' => $request->name,
            'short_form' => $request->short_form
        ]);

        return redirect()->route('unit.index');
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
    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        $page_title = 'Edit Unit';

        return view('unit.edit', compact('unit', 'page_title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $unit = Unit::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'short_form' => 'required|string',
        ]);

        $unit->update([
            'name' => $request->name,
            'short_form' => $request->short_form
        ]);

        return redirect()->route('unit.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();

        return back();
    }
}
