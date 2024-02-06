<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalData;

class PersonalDataController extends Controller
{
    public function index()
    {
        // Your logic to fetch data
        $data = PersonalData::all();
    
        // Return the view with data
        return view('personal_data.index', compact('data'));
    }
    
    public function create()
    {
        return view('personal_data.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            // Add validation rules here based on your model's fields
        ]);

        // Create a new PersonalData instance and save to the database
        PersonalData::create($request->all());

        return redirect()->route('personal-data.index')->with('success', 'Personal data created successfully.');
    }

    public function show($id)
    {
        $personalData = PersonalData::findOrFail($id);
        return view('personal_data.show', compact('personalData'));
    }

    public function edit($id)
    {
        $personalData = PersonalData::findOrFail($id);
        return view('personal_data.edit', compact('personalData'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            // Add validation rules here based on your model's fields
        ]);

        // Find the PersonalData instance and update in the database
        $personalData = PersonalData::findOrFail($id);
        $personalData->update($request->all());

        return redirect()->route('personal-data.index')->with('success', 'Personal data updated successfully.');
    }

    public function destroy($id)
    {
        // Find the PersonalData instance and delete from the database
        $personalData = PersonalData::findOrFail($id);
        $personalData->delete();

        return redirect()->route('personal-data.index')->with('success', 'Personal data deleted successfully.');
    }
}
