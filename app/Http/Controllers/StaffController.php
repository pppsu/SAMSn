<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Redirect;




class StaffController extends Controller
{
    public function insert(Request $request) {
    	$staffs = new Staff;
    	$staffs->title = $request->input('title');
    	$staffs->firstname = $request->input('firstname');
    	$staffs->lastname = $request->input('lastname');
    	$staffs->email = $request->input('email');
    	$staffs->begin_date = $request->input('begin_date');
    	$staffs->end_date = $request->input('end_date');

    	$staffs->save();
    	return Redirect::to('addPresidentForAcademic');
    }
}
