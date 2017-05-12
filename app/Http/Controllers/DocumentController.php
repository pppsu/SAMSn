<?php

namespace App\Http\Controllers;
use App\Document;
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
        $documents = Document::all();
        return view('student.index',['documents'=>$documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.form');
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
        $documents->created = $request->input('created');

       
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
        return view('student.detail',compact('documents'));
    
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
        $documents = Document::findOrFail($id);
        return view('student.approve',compact('documents'));
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
         $documents->created = $request->input('created');
         
         $documents->status_pass1 = $request->input('status_pass1');
         $documents->status_pass2 = $request->input('status_pass2');
         $documents->status_pass3 = $request->input('status_pass3');
         $documents->status_pass4 = $request->input('status_pass4');
         $documents->status_pass5 = $request->input('status_pass5');
         $documents->status_pass6 = $request->input('status_pass6');
         $documents->status_pass7 = $request->input('status_pass7');
        
       /* $documents->editor = $request->input('editor1');
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documents = Document::find($id)->delete();
        return Redirect::to('document');

    }
}
