@extends('layout.form_layout')
@section('title', 'Student Document')

@section('sidebar')
    @parent
@endsection

@section('content')
	<div class="container ">
        <div class="section">
            <div class="row">
                <div class="col s12 ">
                    <div class="card-panel white">
                        <div class="row">
                            
                            <form action="{{ route('document.index') }}" method="post" class="col s12" >
                                
                                <div class="form-group">	
                                    <div class="input-field col s2 ">					
                                        <label for="OrganiName" class="input-field">Organization name</label>
                                    </div>
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="input-field col s10 form-group">
                                   <input placeholder="" name="OrganiName" id="OrganiName" type="text" class=" form-control"  value="{{$documents->club_name}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    	<div class="input-field col s12 m4 l2 form-group">
                                        	<label for="docNo" class="input-field">Document no.</label>
                                    	</div>
                                    		<div class="input-field col s12 m4 l8 form-group">
                                        		<input name="docNo" placeholder="" id="docNo" type="text" class=" form-control" value="{{$documents->id}}">
                                    		</div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-field col s7">
                                        <label for="activity" class="input-field">Subject Request for activity/ project/event approval (activity name).</label></div>
                                    <div class="input-field col s5"><input placeholder="" id="activity" name="activity" type="text" class=" form-control" value="{{$documents->activity}}"></div>
                                </div>

								
	                            <h7><b>To  Vice President for Academic Affairs, Phuket Campus</b></h7><br>

								<div class="col s6">
								<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$documents->club_name}}</b> will create the <b>{{$documents->activity}}</b>&nbsp;&nbsp;on</p></div>
								<div class="col s2 form-group"><input type="date" class="datepicker form-control" name="begin_date" value="{{$documents->begin_date}}"></div>
								<div class="col s2">to</div>
								<div class="col s2 form-group"><input type="date" class="datepicker form-control" name="end_date" value="{{$documents->end_date}}"> </div> 
								<div class="col s1"><p>at</p></div>
								<div class="col s11 form-group"><b> <input type="text" class="form-control" name="act_place" value="{{$documents->act_place}}"> </b> </div>
								<div class="form-group container col s12">
	                            <p>&nbsp;&nbsp;&nbsp;&nbsp;So we would like you to approve this activity running as the detail, schedule and place as the attached file</p> </div>
	                                <div class="file-field input-field right">
	                                    <div class="waves-effect waves- btn-floating  waves-light red">
	                                        <span><center>+</center></span>
	                                        <input type="file">
	                                    </div>
	                                </div>

	                            <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>This activity will arrange by the budget from :</b></p>
	                            <div class="input-field form-group">
	                               @if($documents->budget_type==1)
                                    <p>
                                        <input name="budget_type" type="radio"  id="budgetStu" value="1"  checked/>
                                        <label for="budgetStu">Student Activity’s budget</label>


                                    </p>
                                    <p>
                                        <input class="with-gap " name="budget_type" type="radio" id="budget" value="2" disabled/>
                                        <label for="budget">Budget from other source (please identify)</label>
                                    <div><input disabled value="" id="disabled" type="text" class="validate">
                                    <label for="disabled"></label></div>
                                    </p>
                                @elseif($documents->budget_type==2)
                                        <input name="budget_type" type="radio"  id="budgetStu" value="1" disabled/>
                                        <label for="budgetStu">Student Activity’s budget</label>
                                    </p>
                                    <p>
                                        <input class="with-gap " name="budget_type" type="radio" id="budget" value="2" checked="" />
                                        <label for="budget">Budget from other source (please identify)</label>
                                    <div class="form-group  input-field "><input placeholder="" id="source_budget" name="source_budget" type="text" class=" form-control" value="{{$documents->source_budget}}"></div>
                                    </p>
                                @endif
	                            </div>
								
	                             <div class="col s2 form-group " id=""><p><b>Amount :</b></p></div>
                                <div class="col s8 form-group ">
                                 <input class="with-gap" name="amount" type="text" id="amount" value="{{$documents->budget_numeral}}"/>
                                </div>
                                <div class="col s2 form-group "><p><b>฿ .- Bath</b></p></div><br>
								
	                            <br><br>
	                            <p><h7><b>Activity hour credit as bellowing :</b></h7><br></p>
	                            <div class="form-group row form-group">
	                                <div class="input-field col s10  form-group">
	                                    <label for="ReqAc">Requirement activity.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="ReqAc" id="ReqAc" type="text" class="form-control validate" value="{{$documents->Requirement_act}}"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
								
	                                <div class="input-field col s10 form-group">
	                                    <label for="morals"> Public consciousness, morals, ethics and discipline.</label></div>
	                                 <div class="input-field col s1 form-group"><input placeholder="" name="morals" id="morals" type="text" class="form-control validate " value="{{$documents->morals}}"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
								
	                                <div class="input-field col s10 form-group ">
	                                    <label for="SocialSkill">Social skill, academic/ profession international capability on basis of being Thai.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="SocialSkill" id="SocialSkill" type="text" class="form-control validate" value="{{$documents->social_skill}}"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
								
	                                <div class="input-field col s10   form-group">
	                                    <label for="division">Pride of Institute being children of the Father, being one without division by academic campus or area.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="division" id="division" type="text" class="validate form-control" value="{{$documents->pride_institution}}"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
								
	                                <div class="input-field col s10 form-group  ">
	                                    <label for="democracy">Understanding of cultural plurality, democracy.</label></div>
	                               <div class="input-field col s1 form-group"><input placeholder="" name="cultural" id="cultural" type="text" class="validate form-control" value="{{$documents->cultural}}"></div><div class="input-field-blue col s1 form-group"><label>hours</label></div><br>
								
	                                <div class="input-field col s10  form-group ">
	                                    <label for="Healthy">Healthy development.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="Healthy" id="Healthy" type="text" class="validate form-control" value="{{$documents->health_development}}"></div><div class="input-field-blue col s1 form-group"><label>hours</label></div><br>	
	                            </div>

	                            <div class="row form-group">
	                                <div class="col s8 form-group">
	                                    <p>&nbsp;&nbsp;&nbsp;&nbsp; Thank you for your consideration,</p>
	                                </div>
	                                <div class="col s4 right form-group">
	                                    <p> {{ Auth::user()->name }} </p>
                                        <p>({{ Auth::user()->name }})</p>
                                        <input type="hidden" name="created" value="{{ Auth::user()->name }}">
	                                </div>
	                            </div>
									
	                        </form>
	                    </div>
	                </div>
	            </div>
	             <div class=" col s6">
                                <form action="{{route('document.index')}}" method="post" class="col s12" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{ csrf_field() }} 

                        <div class="card-panel">
                               
                            <h6>1.Instructor in charge</h6>
                            @if($documents->status_pass1==null)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group2"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group2" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group2"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass1==1)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group2"  value="1" checked/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group2" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group2"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass1==2)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group2"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group2" value="2" checked/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group2"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass1==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group2"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group2" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group2"  value="3" data-toggle="collapse" data-target="#edit1" checked/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>

                            @endif
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor">
                                    <option value="" disabled selected>Choose your Signature</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select></div>
                            <div class="">
                                <input type="date" name="created" id="input" class="datepicker form-control" value=""></div>
                               
                        </div>
                        </form>
                        <div class="card-panel">
                            <h6>2.Student Union</h6>
                            @if($documents->status_pass2==null)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group3"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group3" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group3"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                             @elseif($documents->status_pass2==1)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group3"  value="1" checked/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group3" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group3"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass2==2)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group3"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group3" value="2" checked/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group3"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass2==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group3"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group3" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group3"  value="3" data-toggle="collapse" data-target="#edit1" checked/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>

                            @endif
                            <label>Signature</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your Signature</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <div class="">
                                <input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
                        </div>
                        <div class="card-panel">
                            <h6>3.Student Council</h6>
                              @if($documents->status_pass3==null)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group4"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group4" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group4"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                              @elseif($documents->status_pass3==1)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group4"  value="1" checked/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group4" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group4"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass3==2)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group4"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group4" value="2" checked/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group4"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass3==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group4"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group4" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group4"  value="3" data-toggle="collapse" data-target="#edit1" checked/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>

                            @endif
                            <br>
                            <label>Signature</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your Signature</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <div class="">
                                <input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
                        </div>
                    </div>

                    <div class=" col s6">
                        <div class="card-panel">

                            <h6>4.Head of Student Activity Director of Student Affairs</h6>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Requirement activity.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="docNo" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Public consciousness, morals, ethics and discipline.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="docNo" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Social skill, academic/ profession international capability on basis of being Thai.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="docNo" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Pride of Institute being children of the Father, being one without division by academic campus or area.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="docNo" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Understanding of cultural plurality, democracy.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="docNo" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Healthy development.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="docNo" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                             @if($documents->status_pass4==null)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group5"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group5" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group5"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                             @elseif($documents->status_pass4==1)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group5"  value="1" checked/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group5" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group5"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass4==2)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group5"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group5" value="2" checked/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group5"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass4==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group5"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group5" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group5"  value="3" data-toggle="collapse" data-target="#edit1" checked/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>

                            @endif
                            <label>Signature</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your Signature</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <div class="">
                                <input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
                        </div>



                        <div class="card-panel">
                            <h6>5.Director of Student Affairs</h6>
                           @if($documents->status_pass5==null)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group6"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group6" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group6"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass5==1)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group6"  value="1" checked/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group6" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group6"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass5==2)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group6"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group6" value="2" checked/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group6"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass5==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group6"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group6" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group6"  value="3" data-toggle="collapse" data-target="#edit1" checked/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>

                            @endif
                            <label>Signature</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your Signature</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <div class="">
                                <input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
                        </div>

                        <div class="card-panel">
                            <h6>6.Assistant to the President for Student development </h6>

                             @if($documents->status_pass6==null)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group7"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group7" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group7"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                             @elseif($documents->status_pass6==1)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group7"  value="1" checked/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group7" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group7"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass6==2)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group7"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group7" value="2" checked/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group7"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass6==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group7"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group7" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group7"  value="3" data-toggle="collapse" data-target="#edit1" checked/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>

                            @endif
                            <label>Signature</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your Signature</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <div class="">
                                <input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
                        </div>
                        <div class="card-panel">
                            <h6>7.Vice President for Academic Affairs</h6>
                            @if($documents->status_pass7==null)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group8"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group8" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group8"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                             @elseif($documents->status_pass7==1)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group8"  value="1" checked/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group8" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group8"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass7==2)
                                 <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group8"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group8" value="2" checked/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group8"  value="3" data-toggle="collapse" data-target="#edit1" disabled="disabled"/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>
                            @elseif($documents->status_pass7==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">

                                    <input class="form-control" inline" type="radio" id="Approve1" name="group8"  value="1" disabled="disabled"/>
                                           <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="group8" value="2" disabled="disabled"/>
                                    <label for="Disapprove1">Disapprove </label></div>

                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="group8"  value="3" data-toggle="collapse" data-target="#edit1" checked/>
                                    <label for="Edit1"> Edit </label></div> 
                            </div><br>

                            @endif
                            <label>Signature</label>
                            <select class="browser-default">
                                <option value="" disabled selected>Choose your Signature</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                            <div class="">
                                <input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
                        </div>
                    </div>
                   
					</form>
	        </div>
				

	    </div>
	</div>
@endsection

@section('footer')
	@parent
@endsection