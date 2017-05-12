<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use Redirect;
use Validator;

class StudentCouncilController extends Controller
{   
    public function index() {
        $students = Student::where('role','=','SC')->paginate(20);
        $students->setPath('studentCouncil');

        return view('staff.studentCouncil')->with('students',$students);
    }
    public function create() {
    	return view('staff.addStudentCouncil');
    }

    public function insert(Request $request) {
    	
        $rules = [
        'id' => 'required',

        'firstname' => 'required',
        'lastname' => 'required',
        'major' => 'required',
        'faculty' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'begin_date' => 'required',
        'end_date' => 'required'     
        ];

        $messages = [
        'id.required' => 'Please Enter Adviser ID',

        'firstname.required' => 'Please Enter Name',
        'lastname.required' => 'Please Enter Lastname',
        'faculty.required' => 'Please Enter Faculty',
        'major.required' => 'Please Enter Major',
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
            $student->org_id = 'null';
            $student->position = 'null';
            $student->role = 'SC';//Student Council
            $student->begin_date = $request->input('begin_date');
            $student->end_date = $request->input('end_date');
            $student->phone = $request->input('phone');
            $student->email = $request->input('email');
            $student->save();

            $user = new User;
            $user->psu_pass = $request->input('id');
            $user->name = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->role = 'SC';//Student Council
            $user->email = $request->input('email');
            $user->password = bcrypt('111111');
            $user->admin = 0 ;
            $user->save();

            return Redirect::to('studentCouncil');
        }
        else{
            return Redirect::to('/addStudentCouncil')
            ->withErrors($validator->messages());
        }
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('staff.edit_studentCouncil')->with('student',$student);
    }

    public function update($id,Request $request) {
        $student = Student::find($id);
        $student->psu_passport = $request->input('id');
        $student->title = $request->input('title');
        $student->firstname = $request->input('firstname');
        $student->lastname = $request->input('lastname');
        $student->faculty = $request->input('faculty');
        $student->major = $request->input('major');
        $student->org_id = 'null';
        $student->position = 'null';
        $student->role = 'SC';//Student Council
        $student->begin_date = $request->input('begin_date');
        $student->end_date = $request->input('end_date');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');

        $student->save();
        return Redirect::to('studentCouncil');
    }

    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();

        return Redirect::to('studentCouncil');
    }
}
