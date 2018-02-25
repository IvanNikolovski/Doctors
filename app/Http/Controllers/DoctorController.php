<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $doctors = Doctor::where('is_active', '=', 1)->get();
        return view ('doctors.index', compact('doctors'));

    }
    public function create() {
        return view('doctors.create');
    }
    public function store() {

        \request()->validate([
            'name' => 'required|min:4',
            'speciality' => 'required|min:4',
            'institution' => 'required'

        ]);
        $is_active = 0;
        if (\request('is_active') == 'on'){
            $is_active = 1;
        }
        Doctor::create([
            'name' => \request('name'),
            'speciality' => \request('speciality'),
            'institution' => \request('institution'),
            'is_active' => $is_active
        ]);
        return redirect('/');
    }
    public function edit($id) {
        $doctor = Doctor::find($id);
        return view ('doctors.edit', compact('doctor'));
    }
    public function update($id) {

        \request()->validate([
            'name' => 'required|min:4',
            'speciality' => 'required|min:4',
            'institution' => 'required'

        ]);

        $is_active = 0;
        if (\request('is_active') == 'on'){
            $is_active = 1;
        }

        $doctor = Doctor::find($id);
        $doctor->name = \request('name');
        $doctor->speciality = \request('speciality');
        $doctor->institution = \request('institution');
        $doctor->is_active = $is_active;

        $doctor->save();

        return redirect('/');
    }
    public function view($id) {
        $doctor = Doctor::find($id);

        return view ('doctors.view', compact('doctor'));
    }
    public function remove($id) {
        Doctor::find($id)->delete();

        return redirect('/');

    }
}
