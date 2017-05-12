<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Redirect;
use Validator;

class HeadActivityController extends Controller
{   
    public function index() {
        $staffs = Staff::where('role','=','Head of Student Activity Section')->paginate(20);
        $staffs->setPath('headOfActivity');

        return view('staff.headOfActivity')->with('staffs',$staffs);
    }

    public function create() {
    	return view('staff.addHeadOfStudentActivity');
    }

    public function insert(Request $request) {
    	
        $rules = [
        'id' => 'required',

        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'begin_date' => 'required',
        'end_date' => 'required'     
        ];

        $messages = [
        'id.required' => 'Please Enter ID',

        'firstname.required' => 'Please Enter Name',
        'lastname.required' => 'Please Enter Lastname',
        'email.required' => 'Please Enter Email',
        'begin_date.required' => 'Please Enter Begin Date',
        'end_date.required' => 'Please Enter End Date',

        ];
        $validator = Validator::make($request->all(),$rules, $messages); 
        /*$validator = Validator::make($request->all(),$rules);*/
        
        if ($validator->passes() ){
            $staffs = new Staff;
            $staffs->psu_passport = $request->input('id');
            $staffs->title = $request->input('title');
            $staffs->firstname = $request->input('firstname');
            $staffs->lastname = $request->input('lastname');
            $staffs->role = "Head of Student Activity Section";
            $staffs->email = $request->input('email');
            $staffs->begin_date = $request->input('begin_date');
            $staffs->end_date = $request->input('end_date');
            $student->save();

            return Redirect::to('headOfActivity');
        }
        else{
            return Redirect::to('/addHeadOfStudentActivity')
            ->withErrors($validator->messages());
        }
    }

    public function edit($id) {
        $staffs = Staff::find($id);
        return view('staff.edit_headOfActivity')->with('staffs',$staffs);
    }

    public function update($id,Request $request) {
        $staffs = Staff::find($id);
        $staffs->psu_passport = $request->input('id');
        $staffs->title = $request->input('title');
        $staffs->firstname = $request->input('firstname');
        $staffs->lastname = $request->input('lastname');
        $staffs->role = "Head of Student Activity Section";
        $staffs->email = $request->input('email');
        $staffs->begin_date = $request->input('begin_date');
        $staffs->end_date = $request->input('end_date');

        $staffs->save();
        return Redirect::to('headOfActivity');
    }

    public function destroy($id) {
        $staff = Staff::find($id);
        $staff->delete();

        return Redirect::to('headOfActivity');
    }
}
