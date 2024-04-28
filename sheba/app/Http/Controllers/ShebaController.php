<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Medicine;
use App\Models\Gold;
use Illuminate\Support\Facades\Storage;

class ShebaController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->type == '0') {
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        }
        $doctor = Doctor::all();
        return view('user.home', compact('doctor'));
    }

    public function appointment(Request $request)
    {
        $data = new Appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->status = 'In Progress';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Successful. We will conduct with you soon');
    }

    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = Appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function buyMedicine(Request $request)
    {
        $request->validate([
            'medicine_id' => 'required|exists:meds,id',
            'quantity' => 'required|numeric|min:1',
        ]);

        $medicine = Medicine::findOrFail($request->medicine_id);
        $totalPrice = $medicine->price * $request->quantity;

        // Implement logic for processing the purchase, such as saving to a user's order history
        // For now, let's assume we just want to display a message

        return redirect()->back()->with('message', 'Medicine purchased successfully. Total price: ' . $totalPrice);
    }

    public function gold(Request $request)
    {
        $data=new gold;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->status='In progress';
        if(Auth::id())
        {
        $data->user_id=Auth::user()->id;
        }
         
        $data->save();

        return redirect()->back()->with('message','Gold member request successful. We will contact with you sooon');



    }
  
}
