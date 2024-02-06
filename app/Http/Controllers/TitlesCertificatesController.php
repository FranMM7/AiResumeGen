<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TitlesCertificates;

class TitlesCertificatesController extends Controller
{
    public function index()
    {
        $titlesCertificates = TitlesCertificates::all();
        return view('titles_certificates.index', compact('titlesCertificates'));
    }

    public function create()
    {
        return view('titles_certificates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules based on your model's fields
        ]);

        TitlesCertificates::create($request->all());

        return redirect()->route('titles-certificates.index')->with('success', 'Title/Certificate created successfully.');
    }

    public function show($id)
    {
        $titlesCertificates = TitlesCertificates::findOrFail($id);
        return view('titles_certificates.show', compact('titlesCertificates'));
    }

    public function edit($id)
    {
        $titlesCertificates = TitlesCertificates::findOrFail($id);
        return view('titles_certificates.edit', compact('titlesCertificates'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add validation rules based on your model's fields
        ]);

        $titlesCertificates = TitlesCertificates::findOrFail($id);
        $titlesCertificates->update($request->all());

        return redirect()->route('titles-certificates.index')->with('success', 'Title/Certificate updated successfully.');
    }

    public function destroy($id)
    {
        $titlesCertificates = TitlesCertificates::findOrFail($id);
        $titlesCertificates->delete();

        return redirect()->route('titles-certificates.index')->with('success', 'Title/Certificate deleted successfully.');
    }
}
