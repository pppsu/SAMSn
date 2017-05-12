<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use App\Staff;
use Redirect;
use Validator;
use DB;
class OrganizationController extends Controller
{
    public function index() {
        $organization = Organization::join('staffs','organizations.adv_id','=','staffs.id')
        ->select('organizations.*','staffs.title','staffs.firstname','staffs.lastname')->get();

        return view('staff.in_organize')->with('organization',$organization);
    }

    public function create() {
    	return view('staff.add_organize');
    }

    public function insert(Request $request) {

        $rules = [
        'id' => 'required',
        'org_name' => 'required',
        'org_acronym' => 'required',

        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'begin_date' => 'required',
        'end_date' => 'required'    
        ];

        $messages = [
        'id.required' => 'Please Enter Adviser ID',
        'org_name.required' => 'Please Enter Organization Name',
        'org_acronym.required' => 'Please Enter The Abbreviation of Organization',

        'firstname.required' => 'Please Enter Adviser Name',
        'lastname.required' => 'Please Enter Adviser Lastname',
        'email.required' => 'Please Enter Adviser Email',
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
            $staffs->role = "Advisor";
            $staffs->email = $request->input('email');
            $staffs->begin_date = $request->input('begin_date');
            $staffs->end_date = $request->input('end_date');
            $staffs->save();

         
            $staff = Staff::select('id')->orderBy('created_at', 'desc')->first();
            $adv_id = array_pull($staff, 'id');

            
            $organization = new Organization;
            $organization->adv_id = $adv_id;
            $organization->org_name = $request->input('org_name');
            $organization->org_acronym = $request->input('org_acronym');
            $organization->org_status = $request->input('org_status');
            $organization->org_attribute = $request->input('org_attribute');
            $organization->save();


            return Redirect::to('organizeation');
        }
        else{
            return Redirect::to('/addOrganization')
            ->withErrors($validator->messages());
        }

    }

    public function edit($id) {
        $organization = Organization::join('staffs','organizations.adv_id','=','staffs.id')
        ->select('organizations.*','staffs.firstname','staffs.lastname','staffs.email','staffs.begin_date','staffs.end_date','staffs.psu_passport')
        ->where('organizations.id','=',$id)->get();

        return view('staff.edit_organization')->with('organization',$organization);
    }

    public function update($id,Request $request) {
        $organization = Organization::find($id);
        $organization->adv_id = $request->input('adv_id');
        $organization->org_name = $request->input('org_name');
        $organization->org_acronym = $request->input('org_acronym');
        $organization->org_status = $request->input('org_status');
        $organization->org_attribute = $request->input('org_attribute');
        $organization->save();

        /*$staffs = new Staff;
        $staffs->psu_passport = $request->input('id');
        $staffs->title = $request->input('title');
        $staffs->firstname = $request->input('firstname');
        $staffs->lastname = $request->input('lastname');
        $staffs->role = "Advisor";
        $staffs->email = $request->input('email');
        $staffs->begin_date = $request->input('begin_date');
        $staffs->end_date = $request->input('end_date');
        $staffs->save();*/

        return Redirect::to('organizeation');
    }

    public function destroy($id) {
        $organization = Organization::find($id);
        $organization->delete();

        return Redirect::to('organizeation');
    }



}
