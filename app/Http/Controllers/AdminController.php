<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Notification;
use App\Notifications\MyFirstNotification;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor_view');
    }

    public function upload(Request $request)
    {
        $doctor = New doctor;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room_to = $request->room_to;

        $doctor->save();

        return redirect()->back()->with('success','Doctor Added Succesfully');
    }

    public function showappointments()
    {
        $appoint = appointment::all();

        return view('admin.showappointments', compact('appoint'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);

        $data->status = 'Approved';

        $data->save();

        return redirect()->back()->with('success', 'Appointment Approved Successfully');
    }

    public function cancel($id)
    {
        $data = appointment::find($id);

        $data->status = 'Cancaled';

        $data->save();

        return redirect()->back()->with('error', 'Appointment Canceled Successfully');
    }

    public function showadoctorall()
    {
        $data = doctor::orderBy('updated_at', 'DESC')->get();

        return view('admin.showadoctorAll', compact('data'));
    }

    public function editDoctor($id)
    {
        $data = doctor::find($id);

        return view('admin.edit_doctor', compact('data'));
    }

    public function updateDoctor(Request $request, $id)
    {
        $data = doctor::find($id);

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->speciality = $request->speciality;
        $data->room_to = $request->room_to;
        $image = $request->file;
        if($image)
        {
            $image = $request->file;
            $imagename = time().'.'.$image->getClientoriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $data->image=$imagename;
        }


        $data->save();

        return redirect('/showadoctorall')->with('success','Edit Doctor Successfully Doctor Name '. $data->name);
    }

    public function deleteDoctor($id)
    {
        $data = doctor::find($id);

        $data->delete();

        return redirect('/showadoctorall')->with('success','Delete Doctor Successfully Doctor Name '. $data->name);
    }

    public function emailview($id)
    {
        $data = appointment::find($id);

        return view('admin.email_view', compact('data'));
    }

    public function sendemail(Request $request, $id)
    {
        $data = appointment::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        notification::send($data, new
            MyFirstNotification($details));

        return redirect('/showappointments')->with('success','Email send is successfully to '. $data->name);
    }
}