<?php

namespace App\Http\Controllers;
use App\Document;
use App\Organization;
use App\User;
use App\Staff;
use App\Student;
use Illuminate\Http\Request;
use Redirect;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organization = Organization::all();
         $organization = new Organization;
        $documents = Document::all();
      /* return view('student.index',['documents'=>$documents]);*/
        return view('Approve.index',['documents'=>$documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $organization = Organization::select('id','org_name')->get();
         $document = Document::select('id')->get();
        /*return view('student.form');*/
        return view('student.form')->with('organization',$organization);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documents = new Document;
        $organization = new Organization;
        
        /*$documents->club_id = $request->input('docNo');*/
        $documents->club_name = $request->input('OrganiName');
        $documents->activity = $request->input('activity');
        /*$documents->club_id = $request->input(' club_id');*/
       
        
       /* $documents->id = $request->input('docNo');*/

         $documents->begin_date = $request->input('begin_date');
         $documents->end_date = $request->input('end_date');
         $documents->act_place = $request->input('act_place');
        /* $documents->budget_alphabet = $request->input('activity');
         $documents->stu_id = $request->input('activity');
         $documents->location = $request->input('activity');*/

        $documents->budget_type = $request->input('budget_type');
        $documents->source_budget = $request->input('source_budget');
        $documents->budget_numeral = $request->input('amount');

        $documents->Requirement_act = $request->input('ReqAc');
        $documents->morals = $request->input('morals');
        $documents->social_skill = $request->input('SocialSkill');
        $documents->pride_institution = $request->input('division');
        $documents->cultural = $request->input('cultural');
        $documents->health_development = $request->input('Healthy');
        $documents->createName = $request->input('createName');
        $documents->createLastname = $request->input('createLastname');

       
        $documents->status_pass1 = $request->input('status_pass1');
        $documents->status_pass2 = $request->input('status_pass2');
        $documents->status_pass3 = $request->input('status_pass3');
        $documents->status_pass4 = $request->input('status_pass4');
        $documents->status_pass5 = $request->input('status_pass5');
        $documents->status_pass6 = $request->input('status_pass6');
        $documents->status_pass7 = $request->input('status_pass7');

        /*$documents->editor = $request->input('editor1');
        $documents->approveTime = $request->input('approveTime1');
        $documents->comment = $request->input('comment1');
        $documents->Requirement_act4 = $request->input('Requirement_act4');
        $documents->morals4 = $request->input('morals4');
        $documents->social_skill4 = $request->input('social_skill4');
        $documents->pride_institution4 = $request->input('pride_institution4');
        $documents->cultural4 = $request->input('cultural4');
        $documents->health_development4 = $request->input('health_development4');*/
        
        $documents->save();
        return Redirect::to('document');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documents = Document::findOrFail($id);
        $staffs = Staff::select('title','psu_passport','firstname','lastname')->get();
        $students = Student::select('title','psu_passport','firstname','lastname')
                            ->where('role','=','SU')->get();
         $sc = Student::select('title','psu_passport','firstname','lastname')
                            ->where('role','=','SC')->get();
        return view('student.detail',compact('documents'))->with('staffs',$staffs)
                                                           ->with('students',$students)
                                                           ->with('sc',$sc);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$documents = Document::findOrFail($id);
        return view('student.detail',compact('documents'));*/
        $staffs = Staff::select('title','psu_passport','firstname','lastname')->get();
        $students = Student::select('title','psu_passport','firstname','lastname')
                            ->where('role','=','SU')->get();
         $sc = Student::select('title','psu_passport','firstname','lastname')
                            ->where('role','=','SC')->get();
        $documents = Document::findOrFail($id);
        return view('student.approve',compact('documents'))->with('staffs',$staffs)
                                                           ->with('students',$students)
                                                           ->with('sc',$sc);
        /*return view('student.approve')->with('staffs',$staffs);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
         $documents = Document::find($id);
         $documents->club_name = $request->input('OrganiName');
         $documents->activity = $request->input('activity');
         $documents->begin_date = $request->input('begin_date');
         $documents->end_date = $request->input('end_date');
         $documents->act_place = $request->input('act_place');
         
         $documents->budget_type = $request->input('budget_type');
         $documents->source_budget = $request->input('source_budget');
         $documents->budget_numeral = $request->input('amount');
         
         $documents->Requirement_act = $request->input('ReqAc');
         $documents->morals = $request->input('morals');
         $documents->social_skill = $request->input('SocialSkill');
         $documents->pride_institution = $request->input('division');
         $documents->cultural = $request->input('cultural');
         $documents->health_development = $request->input('Healthy');
         $documents->createName = $request->input('createName');
         $documents->createLastname = $request->input('createLastname');
         
         $documents->status_pass1 = $request->input('status_pass1');
         $documents->status_pass2 = $request->input('status_pass2');
         $documents->status_pass3 = $request->input('status_pass3');
         $documents->status_pass4 = $request->input('status_pass4');
         $documents->status_pass5 = $request->input('status_pass5');
         $documents->status_pass6 = $request->input('status_pass6');
         $documents->status_pass7 = $request->input('status_pass7');
        
        $documents->editor1 = $request->input('editor1');
        $documents->approveTime1 = $request->input('approveTime1');
        $documents->comment1 = $request->input('comment1');

        $documents->editor2 = $request->input('editor2');
        $documents->approveTime2 = $request->input('approveTime2');
        $documents->comment2 = $request->input('comment2');

        $documents->editor3 = $request->input('editor3');
        $documents->approveTime3 = $request->input('approveTime3');
        $documents->comment3 = $request->input('comment3');

        $documents->editor4 = $request->input('editor4');
        $documents->approveTime4 = $request->input('approveTime4');
        $documents->comment4 = $request->input('comment4');

        $documents->editor5 = $request->input('editor5');
        $documents->approveTime5 = $request->input('approveTime5');
        $documents->comment5 = $request->input('comment5');

        $documents->editor6 = $request->input('editor6');
        $documents->approveTime6 = $request->input('approveTime6');
        $documents->comment6 = $request->input('comment6');

        $documents->editor7 = $request->input('editor7');
        $documents->approveTime7 = $request->input('approveTime7');
        $documents->comment7 = $request->input('comment7');


        $documents->Requirement_act4 = $request->input('Requirement_act4');
        $documents->morals4 = $request->input('morals4');
        $documents->social_skill4 = $request->input('social_skill4');
        $documents->pride_institution4 = $request->input('pride_institution4');
        $documents->cultural4 = $request->input('cultural4');
        $documents->health_development4 = $request->input('health_development4');
        $documents->save();
        return Redirect::to('document');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documents = Document::find($id);
        $documents->delete();
        return Redirect::to('document');
      
    }
}
