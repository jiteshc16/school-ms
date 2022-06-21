<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

use App\Models\requestbyteacher;

use App\Models\studentlist;

use App\Models\student;

class AdminController extends Controller
{


//Add teacher functions//

    public function addview()
        {

            return view('admin.add_teachers');

        }


    public function upload(Request $request)
        {

            $teacher=new teacher;
            
            $teacher->name=$request->name;

            $teacher->department=$request->department;

            $teacher->grade=$request->grade;

            $teacher->gender=$request->gender;

            $teacher->save();

            return redirect()->back()->with('message','Teacher Added Successfully');

            return redirect('user.home');

        }


//Approve or cancel teacher's request functions//

    public function teachersprofileupdate()
        {

            $data = requestbyteacher::all();
            return view('admin.teachers_profile_update',compact('data'));

        }


    public function approved($id)
        {

            $data = requestbyteacher::find($id);

            $data->status='Approved';

            $data->save();

            return redirect()->back();

        }


    public function canceled($id)
        {

            $data = requestbyteacher::find($id);

            $data->status='Canceled';

            $data->save();

            return redirect()->back();

        }


//Update teacher functions//

    public function showteachers()
        {
            $teacher = teacher::all();
            return view('admin.showteachers',compact('teacher'));
        }


    public function deleteteacher($id)
        {
            $teacher = teacher::find($id);

            $teacher->delete();

            return redirect()->back();
        }


    public function updateteacher($id)
        {
            $teacher = teacher::find($id);
            return view('admin.update_teacher',compact('teacher'));
        }


    public function editteacher(Request $request , $id)
        {
            $teacher = teacher::find($id);

            $teacher->name=$request->name;

            $teacher->department=$request->department;

            $teacher->grade=$request->grade;

            $teacher->gender=$request->gender;

            $teacher->save();

            return redirect()->back()->with('message','Teacher Details Updated Successfully');
        }


//Add student functions//

    public function addstudent()
        {
            return view('admin.add-student');
        }


    public function uploadstudent(Request $request)
        {

            $data=new studentlist;
            
            $data->name=$request->name;

            $data->class=$request->class;

            $data->section=$request->section;

            $data->dob=$request->dob;

            $data->gender=$request->gender;

            $data->save();

            return redirect()->back()->with('message','Student Added Successfully');

        }


//update student functions//

    public function showstudent()
        {
            $list = studentlist::all();
            return view('admin.allstudents',compact('list'));
        }


    public function deletestudent($id)
        {
            $list = studentlist::find($id);

            $list->delete();

            return redirect()->back();
        }


    public function updatestudent($id)
        {
            $list = studentlist::find($id);
            return view('admin.update_student',compact('list'));
        }


    public function editstudent(Request $request , $id)
        {
            $data = studentlist::find($id);
            
            $data->name=$request->name;

            $data->class=$request->class;

            $data->section=$request->section;

            $data->dob=$request->dob;

            $data->gender=$request->gender;

            $data->save();

            return redirect()->back()->with('message','Student Details Updated Successfully');
        }


//Delete request functions//

    public function deleterequest($id)
        {
            $makerequests = requestbyteacher::find($id);

            $makerequests->delete();

            return redirect()->back();
        }


}
