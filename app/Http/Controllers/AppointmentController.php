<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function create() {
        $doctors = Doctor::where('is_active', '=', 1)->get();

        return view('appointments.create', compact('doctors'));
    }
    public function store() {
        $has_occured = 0;
        if (\request('has_occured') == 'on'){
            $has_occured = 1;
        }
        Appointment::create([
            'patient_name' => \request('patient_name'),
            'time_from' => \request('time_from'),
            'time_to' => \request('time_to'),
            'doctor_id' => \request('doctor_id'),
            'has_occured' => $has_occured
        ]);
        return redirect('/');
    }
    public function edit($id) {
        $doctors = Doctor::where('is_active', '=', 1)->get();
        $appointment = Appointment::find($id);
        return view ('appointments.edit', compact('doctors', 'appointment'));
    }
    public function update($id) {
        $has_occured = 0;
        if (\request('has_occured') == 'on'){
            $has_occured = 1;
        }

        $appointment = Appointment::find($id);
        $appointment->patient_name = \request('patient_name');
        $appointment->time_from = \request('time_from');
        $appointment->time_to = \request('time_to');
        $appointment->time_to = \request('time_to');
        $appointment->doctor_id = \request('doctor_id');

        $appointment->save();

        return redirect('/');
    }
    public function view($id) {

        $appointment = Appointment::find($id);
        $doctor = Doctor::find($appointment->doctor_id);
        //dd($doctor);

        return view ('appointments.view', compact('appointment', 'doctor'));
    }
    public function remove($id) {
        Appointment::find($id)->delete();

        return redirect('/');

    }
}
