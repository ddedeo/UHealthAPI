<?php

// app/Http/Controllers/Api/TimeslotController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Timeslot;
use Illuminate\Http\Request;

class TimeslotController extends Controller
{
    public function index()
    {
        return Timeslot::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'weekday' => 'required|integer|min:0|max:6',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'is_available' => 'boolean',
        ]);

        return Timeslot::create($validated);
    }

    public function show(Timeslot $timeslot)
    {
        return $timeslot;
    }

    public function update(Request $request, Timeslot $timeslot)
    {
        $validated = $request->validate([
            'weekday' => 'integer|min:0|max:6',
            'start_time' => 'date_format:H:i',
            'end_time' => 'date_format:H:i|after:start_time',
            'is_available' => 'boolean',
        ]);

        $timeslot->update($validated);
        return $timeslot;
    }

    public function destroy(Timeslot $timeslot)
    {
        $timeslot->delete();
        return response()->noContent();
    }
}
