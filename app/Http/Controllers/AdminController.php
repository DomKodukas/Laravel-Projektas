<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {
        $doctor = new doctor;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->save();
        return redirect()->back()->with('message','Gydytojas sekmingai buvo pridetas');
    }
    public function showappointment()
    {
        $data = appointment::all();
        return view('admin.showappointment', compact('data'));
    }
    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status='Patvirtinta';
        $data->save();
        return redirect()->back();
    }
    public function redo($id)
    {
        $data = appointment::find($id);
        $data->status='Vykdoma';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status='Atmestas';
        $data->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function showdoctor()
    {
        $data = doctor::all();

        return view('admin.showdoctor', compact('data'));
    }
    public function deletedoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatedoctor($id)
    {
        $data = doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }
    public function editdoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $doctor->save();
        return redirect('/showdoctor');
    }
}
