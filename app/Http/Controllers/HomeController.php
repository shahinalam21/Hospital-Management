<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  
    public function redirect()
    {
        if(Auth::id()){

            if(Auth::User()->usertype == '0'){
                $doctors = Doctor::all();
                return view('user.home',compact('doctors'));
            }
            else{
                return view('admin.home');
            }

        }
        else{
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id()){
            return redirect('home');
        }
        else{
            $doctors = Doctor::all();
            return view('user.home',compact('doctors'));
        }
     
    }

    public function Appointment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'doctor' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data = new Appointment();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->status = "In Progress";

        if(Auth::id())
        {
            $data->user_id = Auth::User()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Apointment request sent successfully, we will contact to you very soon.');
    }

}
