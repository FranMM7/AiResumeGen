<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfessionalHistory;

class ProfessionalHistoryController extends Controller
{
    public function index()
    {
        $professionalHistory = ProfessionalHistory::all();
        return view('professional_history.index', compact('professionalHistory'));
    }

    public function create()
    {
        return view('professional_history.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules based on your model's fields
        ]);

        ProfessionalHistory::create($request->all());

        return redirect()->route('professional-history.index')->with('success', 'Professional history created successfully.');
    }

    public function show($id)
    {
        $professionalHistory = ProfessionalHistory::findOrFail($id);
        return view('professional_history.show', compact('professionalHistory'));
    }

    public function edit($id)
    {
        $professionalHistory = ProfessionalHistory::findOrFail($id);
        return view('professional_history.edit', compact('professionalHistory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add validation rules based on your model's fields
        ]);

        $professionalHistory = ProfessionalHistory::findOrFail($id);
        $professionalHistory->update($request->all());

        return redirect()->route('professional-history.index')->with('success', 'Professional history updated successfully.');
    }

    public function destroy($id)
    {
        $professionalHistory = ProfessionalHistory::findOrFail($id);
        $professionalHistory->delete();

        return redirect()->route('professional-history.index')->with('success', 'Professional history deleted successfully.');
    }
}
