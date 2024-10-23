<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Blog;
use App\Models\User;
use App\Models\Appointment;
use Notification;

use App\Notifications\SendEmailNotification;

class Admincontroller extends Controller
{

    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;

        $image = $request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }



    public function showappointment()
    {
        $data=appointment::all();
        
        // Fetch appointments where 'is_new' is true
        $apnts = Appointment::where('status', 'In progress')->get();
        
        // After fetching, mark them as seen
        Appointment::where('is_new', true)->update(['is_new' => false]);
        
        return view('admin.showappointment', compact('data', 'apnts'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status="approved";
        $data->save();
        return redirect()->back();
    }

    public function canceled($id)
    {
        $data=appointment::find($id);
        $data->status="canceled";
        $data->save();
        return redirect()->back();
    }


    public function showdoctor()
    {
        $data=doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();

        return redirect()->back()->with('message','Doctor Deleted Successfully');
    }

    public function updatedoctor($id)
    {
        $data=doctor::find($id);
        return view('admin.updatedoctor', compact('data'));
    }

    public function editedoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);

        $image = $request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }

        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;
        $doctor->availability = $request->input('availability'); 

        $doctor->save();
        return redirect('/showdoctor')->with('message','Doctor Details Updated Successfully');
    }


    public function emailview($id)
    {
        $data=appointment::find($id);
        return view('admin.emailview', compact('data'));
    }


    public function sendemail(Request $request,$id)
    {
        $data = appointment::find($id);

        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'name' => $request->name,
            'room' => $request->room,
            'date' => $request->date,
            'time' => $request->time,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data,new SendEmailNotification($details));


        return redirect('/showappointment')->with('message','Successfully Mailed.');

    }

    public function addblog()
    {
        return view('admin.addblog');
    }

    public function upload_blog(Request $request)
    {
        $blog = new blog;

        $image = $request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('blogimage', $imagename);

        $blog->image = $imagename;
        $blog->user = $request->name;
        $blog->date = $request->date;
        $blog->title = $request->title;
        $blog->news = $request->news;

        $blog->save();
        return redirect()->back()->with('message','Blog Added Successfully');
    }

    public function showblog()
    {
        $data=blog::all();
        return view('admin.showblog', compact('data'));
    }

    public function deleteblog($id)
    {
        $data=blog::find($id);
        $data->delete();

        return redirect()->back()->with('message','Blog Deleted Successfully');
    }

    public function updateblog($id)
    {
        $data=blog::find($id);
        return view('admin.updateblog', compact('data'));
    }

    public function editeblog(Request $request, $id)
    {
        $data = blog::find($id);

        $image = $request->file;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->file->move('blogimage', $imagename);
            $data->image = $imagename;
        }

        $data->user = $request->name;
        $data->date = $request->date;
        $data->title = $request->title;
        $data->news = $request->news;

        $data->save();
        return redirect('/showblog')->with('message','Blog Details Updated Successfully');
    }


}
