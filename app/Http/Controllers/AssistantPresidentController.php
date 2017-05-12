<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Redirect;
use Validator;

class AssistantPresidentController extends Controller
{
    public function index() {
        $staffs = Staff::where('role','=','Assistant to the President for Student Development')->get();

        return view('staff.presidentForStudent')->with('staffs',$staffs);
    }
    
    public function create() {
    	return view('staff.addPresidentForStudent');
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
        $staffs->role = "Assistant to the President for Student Development";
        $staffs->email = $request->input('email');
        $staffs->begin_date = $request->input('begin_date');
        $staffs->end_date = $request->input('end_date');
            $student->save();

            return Redirect::to('presidentForStudent');
        }
        else{
            return Redirect::to('/addPresidentForStudent')
            ->withErrors($validator->messages());
        }
    }

    public function edit($id) {
        $staffs = Staff::find($id);
        return view('staff.edit_presidentForStudent')->with('staffs',$staffs);
    }

    public function update($id,Request $request) {
        $staffs = Staff::find($id);
        $staffs->psu_passport = $request->input('id');
        $staffs->title = $request->input('title');
        $staffs->firstname = $request->input('firstname');
        $staffs->lastname = $request->input('lastname');
        $staffs->role = "Assistant to the President for Student Development";
        $staffs->email = $request->input('email');
        $staffs->begin_date = $request->input('begin_date');
        $staffs->end_date = $request->input('end_date');

        $staffs->save();
        return Redirect::to('presidentForStudent');
    }

    public function destroy($id) {
        $staffs = Staff::find($id);
        $staffs -> delete();
        return Redirect::to('presidentForStudent');
    }
}
