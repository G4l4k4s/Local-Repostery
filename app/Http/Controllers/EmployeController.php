<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes =Employes::all();
        return view('employes.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateDate = $quest->validate([
            'name' =>'required|string|max:255',
            'last_name' =>'required|string¬max:255',
            'identification_number' =>'required|string|max:255',
            'position' =>'required|string|max:255'
        ]);

        $employe = Employe::create($validateDate);
        return redirect()->route('patients.show',$patient->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('employes.show', compact('employe'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('employes.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateDate = $request->validate([
            'name' =>'string|max:255',
            'last_name' =>'string|max:255',
            'identification_number' =>'string|max:255',
            'position' =>'string|max:255'
        ]);

        $employe->update($validateDate);
        return redirect()->route('emploton.show', $employe->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employe->delete();
        return redirect()->route('employes.index');
    }
}