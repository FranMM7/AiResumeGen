<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToolsSkills;

class ToolsSkillsController extends Controller
{
    public function index()
    {
        $toolsSkills = ToolsSkills::all();
        return view('tools_skills.index', compact('toolsSkills'));
    }

    public function create()
    {
        return view('tools_skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules based on your model's fields
        ]);

        ToolsSkills::create($request->all());

        return redirect()->route('tools-skills.index')->with('success', 'Tool/Skill created successfully.');
    }

    public function show($id)
    {
        $toolsSkills = ToolsSkills::findOrFail($id);
        return view('tools_skills.show', compact('toolsSkills'));
    }

    public function edit($id)
    {
        $toolsSkills = ToolsSkills::findOrFail($id);
        return view('tools_skills.edit', compact('toolsSkills'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add validation rules based on your model's fields
        ]);

        $toolsSkills = ToolsSkills::findOrFail($id);
        $toolsSkills->update($request->all());

        return redirect()->route('tools-skills.index')->with('success', 'Tool/Skill updated successfully.');
    }

    public function destroy($id)
    {
        $toolsSkills = ToolsSkills::findOrFail($id);
        $toolsSkills->delete();

        return redirect()->route('tools-skills.index')->with('success', 'Tool/Skill deleted successfully.');
    }
}
