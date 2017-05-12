<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Organization;
use Redirect;
use Validator;

class MemberController extends Controller
{
    public function index() {


        $students = Student::join('organizations','students.org_id','=','organizations.id')
        ->select('students.*','organizations.org_name')->get();


        return view('staff.in_clubmember')->with('students',$students);
    }

    public function create() {
        $organization = Organization::select('id','org_name')->get();
    	
        return view('staff.add_clubmember')->with('organization',$organization);
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

        'faculty.required' => 'Please Enter Faculty',
        'major.required' => 'Please Enter Major',
        'org_id.required' => 'Please Select Organization',
        'position.required' => 'Please Select Position',
        'email.required' => 'Please Enter Email',
        'phone.required' => 'Please Enter Phone',
        'begin_date.required' => 'Please Enter Begin Date',
        'end_date.required' => 'Please Enter End Date',

        ];
        $validator = Validator::make($request->all(),$rules, $messages); 
        /*$validator = Validator::make($request->all(),$rules);*/
         if ($validator->passes() ){
    	$student = new Student;
    	$student->psu_passport = $request->input('id');
    	$student->title = $request->input('title');
    	$student->firstname = $request->input('firstname');
    	$student->lastname = $request->input('lastname');
    	$student->faculty = $request->input('faculty');
    	$student->major = $request->input('major');
        $student->org_id = $request->input('org_id');
        $student->position = $request->input('position');
    	$student->role = 'Member';
    	$student->begin_date = $request->input('begin_date');
    	$student->end_date = $request->input('end_date');
    	$student->phone = $request->input('phone');
    	$student->email = $request->input('email');
    	$student->save();

    	return Redirect::to('Member');
        }
        else{
            return Redirect::to('/addMember')
            ->withErrors($validator->messages());
        }
    }
    

    public function edit($id) {
        $student = Student::find($id);
        $organization = Organization::select('id','org_name')->get();
        //echo $student;
        return view('staff.edit_clubmember')->with('student',$student)
        ->with('organization',$organization);
    }

    public function update($id,Request $request) {
        echo $id;
        $student = Student::find($id);
        $student->psu_passport = $request->input('id');
        $student->title = $request->input('title');
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->faculty = $request->input('faculty');
        $student->major = $request->input('major');
        $student->org_id = $request->input('org_id');
        $student->position = $request->input('position');
        $student->role = 'Member';
        $student->begin_date = $request->input('begin_date');
        $student->end_date = $request->input('end_date');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');

        $student->save();
        return Redirect::to('Member');
    }

    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();

        return Redirect::to('Member');
    }
}
