<?php

namespace App\Http\Controllers;

use App\Models\Medication_Patient;
use App\Http\Requests\StoreMedication_PatientRequest;
use App\Http\Requests\UpdateMedication_PatientRequest;

class MedicationPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedication_PatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Medication_Patient $medication_Patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medication_Patient $medication_Patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedication_PatientRequest $request, Medication_Patient $medication_Patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medication_Patient $medication_Patient)
    {
        //
    }
}
