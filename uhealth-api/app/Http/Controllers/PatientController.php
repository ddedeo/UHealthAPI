<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return Patient::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:45',
            'lastname' => 'required|string|max:45',
            'date_of_birth' => 'required|date',
            'place_of_birth' => 'required|string|max:45',
            'height' => 'nullable|numeric',
            'medical_note' => 'nullable|string',
        ]);

        return Patient::create($validated);
    }

    public function show(Patient $patient)
    {
        return $patient;
    }

    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'firstname' => 'string|max:45',
            'lastname' => 'string|max:45',
            'date_of_birth' => 'date',
            'place_of_birth' => 'string|max:45',
            'height' => 'nullable|numeric',
            'medical_note' => 'nullable|string',
        ]);

        $patient->update($validated);
        return $patient;
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return response()->noContent();
    }
}
