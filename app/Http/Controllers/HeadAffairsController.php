<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Redirect;
use Validator;

class HeadAffairsController extends Controller
{
    public function index() {
        $staffs = Staff::where('role','=','Head of Student Affairs Division')->paginate(20);
        $staffs->setPath('headOfAffairs');

        return view('staff.headOfAffairs')->with('staffs',$staffs);
    }

    public function create() {
    	return view('staff.addHeadOfStudentAffairs');
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
        'id.required' => 'Please Enter Adviser ID',

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
            $staffs->role = "Head of Student Affairs Division";
            $staffs->email = $request->input('email');
            $staffs->begin_date = $request->input('begin_date');
            $staffs->end_date = $request->input('end_date');
            $student->save();

            return Redirect::to('headOfAffairs');
        }
        else{
            return Redirect::to('/addHeadOfStudentAffairs')
            ->withErrors($validator->messages());
        }
    }

    public function edit($id) {
        $staffs = Staff::find($id);
        return view('staff.edit_headOfAffairs')->with('staffs',$staffs);
    }

    public function update($id,Request $request) {
        $staffs = Staff::find($id);
        $staffs->psu_passport = $request->input('id');
        $staffs->title = $request->input('title');
        $staffs->firstname = $request->input('firstname');
        $staffs->lastname = $request->input('lastname');
        $staffs->role = "Head of Student Affairs Division";
        $staffs->email = $request->input('email');
        $staffs->begin_date = $request->input('begin_date');
        $staffs->end_date = $request->input('end_date');

        $staffs->save();
        return Redirect::to('headOfAffairs');
    }

    public function destroy($id) {
        $staffs = Staff::find($id);
        $staffs->delete();
        return Redirect::to('headOfAffairs');
    }
}
