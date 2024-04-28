<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\m_e_ds;

use App\Models\addgold;

use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{
    public function addview()
    {



    return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;

        $image=$request->file;

    $imagename=time().'.'.$image->getClientoriginalExtension();

    $request->file->move('doctorimage',$imagename);

    $doctor->image=$imagename;

    $doctor->name=$request->name;

    $doctor->phone=$request->number;

    $doctor->room=$request->room;

     $doctor->Speciality=$request->Speciality;

     $doctor->save();

     return redirect()->back()->with('message','Successfully Added');



    }

    public function showappointment()
    {
          $data=appointment::all();

         
        return view('admin.showappointment',compact('data'));

    }

    public function apporved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();
    }
    public function addMedicineView()
    {
        return view('admin.add_med');
    }


    public function addMedicine(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validating the image
        ]);
        $Medicine = new m_e_ds; // Use MEDs instead of Medicine
        $meds->name = $request->name;
        $meds->price = $request->price;
        $meds->type = $request->type;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            Storage::putFileAs('medicine_images', $image, $imageName); // Storing image in storage/app/public/medicine_images
            $meds->image = $imageName;
        }
        $meds->save();
        return redirect()->back()->with('message', 'Medicine added successfully');
    }
    

    public function deleteMedicine($id)
    {
        $Medicine = Medicine::findOrFail($id);
        if ($Medicine->image) {
            Storage::delete('medicine_images/' . $Medicine->image);
        }

        
        $Medicine->delete();

        return redirect()->back()->with('message', 'Medicine deleted successfully');

    }
    public function updateMedicine(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        $Medicine = Medicine::findOrFail($id);
        $Medicine->name = $request->name;

        if ($request->hasFile('image')) {
            if ($Medicine->image) {
                Storage::delete('medicine_images/' . $Medicine->image);
            }
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            Storage::putFileAs('medicine_images', $image, $imageName);
            $Medicine->image = $imageName;
        }


        $Medicine->save();
        return redirect()->back()->with('message', 'Medicine updated successfully');
    }

    public function goldview()
    {
        return view('admin.add_gold');
    }

    public function uploadg(Request $request)
    {
        $goldp = new addgold;

        $goldp->Membership=$request->Membership;
        $goldp->Description=$request->description;
        $goldp->Price=$request->Price;

        $doctor->save();

        return redirect()->back();


    }
}
