<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Teacher;
use App\Models\requestbyteacher;
use App\Models\student;
use App\Models\studentlist;

class Homecontroller extends Controller
{


//User functions//

 public function redirect()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $userid=Auth::user()->id;
                $makerequest = requestbyteacher::where('user_id',$userid)->get();

                return view('user.teacher-home',compact('makerequest'));
            }
            else
            {
                $teacher = teacher::all();
                $list = studentlist::all();
                $data = student::all();

                return view('admin.home',compact('teacher','list','data'));
            }

        }
        else
        {
            return redirect()->back();
        }

    }


//Home functions//

 public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
        $teacher = teacher::all();
        $list = studentlist::all();

        return view('user.home',compact('teacher','list'));
        }
    }


//Request functions//

 public function makerequestbyteacher(Request $request)
    {
        
        $data=new requestbyteacher;
                    
        $data->name=$request->name;

        $data->email=$request->email;

        $data->dob=$request->dob;

        $data->education=$request->education;

        $data->gender=$request->gender;

        $data->status='In progress';

        if(Auth::id())
        {

        $data->user_id=Auth::user()->id;
        
        }

        $data->save();

        return redirect()->back()->with('message','Your request will be updated soon!');

    }

 public function makerequestteacher()
    {

        return view('user.make_request_teacher');

    }


//Admission form functions//

 public function form(Request $request)
    {
         $this->validate($request, [
                'name' => 'required',
                'dob' => 'required',
                'gender' => 'required',
                'class' => 'required',
            ]);
        
        $student=new student;
            
        $student->name=$request->name;

        $student->dob=$request->dob;

        $student->gender=$request->gender;

        $student->class=$request->class;

        $student->nationality=$request->nationality;

        $student->state=$request->state;

        $student->save();

        return redirect()->back();

    }
}
