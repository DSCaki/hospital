<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Blog;
use App\Models\Appointment;



class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
                $blog = blog::all();
                return view('user.home', compact('doctor', 'blog'));
            }
            else
            {
                $appointments = appointment::count();
                $users = user::count();
                $doctorss = doctor::count();
                $doctors = doctor::all();
                $apnts = appointment::all();
                $blog = blog::all();
                return view('admin.home',compact('blog','appointments', 'users', 'doctorss', 'doctors', 'apnts'));
            }
        }

        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
        $doctor = doctor::all();
        $blog = blog::all();

        return view('user.home', compact('doctor', 'blog'));
        }
    }

    public function about()
    {
        $doctor = doctor::all();
        return view('user.about', compact('doctor'));
    }
    public function team()
    {
        $doctor = doctor::all();

        return view('user.team', compact('doctor'));
    }
    public function blog()
    {
        $blog = blog::all();
        return view('user.blog', compact('blog'));
    }
    public function blogdetails($id)
    {
        $blog = blog::find($id);
        $data = blog::all();
        $blog = blog::where('id' ,$id)->get();
        return view('user.blogdetails', compact('blog','data'));
    }
    public function contact()
    {
        return view('user.contact');
    }




    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number;
        $data->doctor = $request->doctor;
        $data->message = $request->message;
        $data->status = 'In progress';

        if(Auth::id())
        {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Appointment request Successfull. We will contact with you soon');
    }


    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id' ,$userid)->get();

            return view('user.myappointment', compact('appoint'));
        }

        else
        {
            return redirect()->back();
        }
    }

    public function cancle_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();

        return redirect()->back();
    }



}
