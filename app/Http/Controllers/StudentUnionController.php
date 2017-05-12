<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Redirect;
use Validator;

class StudentUnionController extends Controller
{
    public function index() {
        $students = Student::where('role','=','Student Union')->paginate(20);
        $students->setPath('studentUnion');

        return view('staff.studentUnion')->with('students',$students);
    }

    public function create() {
    	return view('staff.addStudentUnion');
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
        'id.required' => 'Please Enter ID',

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
         $student->role = 'Student Union';
         $student->begin_date = $request->input('begin_date');
         $student->end_date = $request->input('end_date');
         $student->phone = $request->input('phone');
         $student->email = $request->input('email');
         $student->save();

         return Redirect::to('studentUnion');
     }
     else{
        return Redirect::to('/addStudentUnion')
        ->withErrors($validator->messages());
    }
}

public function edit($id) {
    $student = Student::find($id);
    return view('staff.edit_studentUnion')->with('student',$student);
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
    $student->role = 'Student Union';
    $student->begin_date = $request->input('begin_date');
    $student->end_date = $request->input('end_date');
    $student->phone = $request->input('phone');
    $student->email = $request->input('email');

    $student->save();
    return Redirect::to('studentUnion');
}

public function destroy($id) {
    $student = Student::find($id);
    $student->delete();

    return Redirect::to('studentUnion');
}
}
