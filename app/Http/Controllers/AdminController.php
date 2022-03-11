<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Addview()
    {
       return view('admin.add_doctor');
    }
    public function UplodeDoctor(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'specility' => 'required',
            'room' => 'required',
            'image' => 'required',
        ]);

        $doctor = new Doctor();

        $image = $request->image;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->image->move('doctorimage',$imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->specility = $request->specility;
        $doctor->room = $request->room;
        $doctor->save();

        return redirect()->back()->with('message','Doctor added successfully');
    }
}
