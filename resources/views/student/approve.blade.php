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
                            
                            
                           <!--  <form action="{{ route('document.index',$documents->id) }}" method="PATCH" class="col s12" >  -->
                                {!! Form::model($documents, ['method' => 'PATCH','route' => ['document.update', $documents->id]]) !!}
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
                                         <p> {{ Auth::user()->name }}</p>
                                        <p>({{ Auth::user()->name }})</p>
                                        <input type="hidden" name="created" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                    
                        
                        </div>
                    </div>
                </div>
                 <div class=" col s6">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                

                        <div class="card-panel">
                               
                            <h6>1.Instructor in charge</h6>
                            @if($documents->status_pass1==0)
                               <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve1" name="status_pass1"  value="1" />
                                    <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="status_pass1" value="2" />
                                    <label for="Disapprove1">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="status_pass1"  value="3" data-toggle="collapse" data-target="#edit1" />
                                    <label for="Edit1"> Edit </label></div> 
                                </div>
                                <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor1">
                                    <option value="" disabled selected>Choose your Signature</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime1" id="input" class="datepicker form-control" value=""></div>
                                 <!-- <input type="submit" name="save" value="verified_user" class="btn-floating btn-large waves-effect waves-light green material-icons right"> -->
                                @elseif($documents->status_pass1==1)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve1" name="status_pass1"  value="1" checked="" />
                                    <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="status_pass1" value="2" disabled="" />
                                    <label for="Disapprove1">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="status_pass1"  value="3" data-toggle="collapse" data-target="#edit1" disabled="" />
                                    <label for="Edit1"> Edit </label></div> 
                                </div>
                                <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor1">
                                    <option value="" disabled selected>Choose your Signature</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime1" id="input" class="datepicker form-control" value=""></div>
                               <!--  <input type="submit" name="save" value="verified_user" class="btn-floating btn-large waves-effect waves-light green material-icons right"> -->
                                       
                                @elseif($documents->status_pass1==2)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve1" name="status_pass1"  value="1" disabled="" />
                                    <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="status_pass1" value="2" checked="" />
                                    <label for="Disapprove1">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="status_pass1"  value="3" data-toggle="collapse" data-target="#edit1" disabled="" />
                                    <label for="Edit1"> Edit </label></div> 
                                </div>
                                <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor1">
                                    <option value="" disabled selected>Choose your Signature</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime1" id="input" class="datepicker form-control" value=""></div>
                               <!--  <input type="submit" name="save" value="verified_user" class="btn-floating btn-large waves-effect waves-light green material-icons right"> -->
                                
                                @elseif($documents->status_pass1==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve1" name="status_pass1"  value="1" disabled="" />
                                    <label for="Approve1" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove1" name="status_pass1" value="2" disabled="" />
                                    <label for="Disapprove1">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit1" name="status_pass1"  value="3" data-toggle="collapse" data-target="#edit1" checked="" />
                                    <label for="Edit1"> Edit </label></div> 
                                </div>
                                <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor1">
                                    <option value="" disabled selected>Choose your Signature</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime1" id="input" class="datepicker form-control" value=""></div>
                               <!--  <input type="submit" name="save" value="verified_user" class="btn-floating btn-large waves-effect waves-light green material-icons right"> -->
                                       
                                @endif
                            

                              
 
                        </div>
                         
                        <!-- </form> -->

                        <div class="card-panel">
                            <h6>2.Student Union</h6>
                       
                            @if($documents->status_pass2==0)
                               <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve2" name="status_pass2"  value="1" />
                                    <label for="Approve2" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove2" name="status_pass2" value="2" />
                                    <label for="Disapprove2">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit2" name="status_pass2"  value="3" data-toggle="collapse" data-target="#edit2" />
                                    <label for="Edit2"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass2==1)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve2" name="status_pass2"  value="1" checked="" />
                                    <label for="Approve2" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove2" name="status_pass2" value="2" disabled="" />
                                    <label for="Disapprove2">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit2" name="status_pass2"  value="3" data-toggle="collapse" data-target="#edit2" disabled="" />
                                    <label for="Edit2"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass2==2)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve2" name="status_pass2"  value="1" disabled="" />
                                    <label for="Approve2" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove2" name="status_pass2" value="2" checked="" />
                                    <label for="Disapprove2">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit2" name="status_pass2"  value="3" data-toggle="collapse" data-target="#edit2" disabled="" />
                                    <label for="Edit2"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass2==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve2" name="status_pass2"  value="1" disabled="" />
                                    <label for="Approve2" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove2" name="status_pass2" value="2" disabled="" />
                                    <label for="Disapprove2">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit2" name="status_pass2"  value="3" data-toggle="collapse" data-target="#edit2" checked="" />
                                    <label for="Edit2"> Edit </label></div> 
                                </div>
                                @endif

                            <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor2">
                                    <option value="" disabled selected>Choose your Signature</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime2" id="input" class="datepicker form-control" value=""></div>
                        </div>
                        <div class="card-panel">
                            <h6>3.Student Council</h6>
                              @if($documents->status_pass3==0)
                               <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve3" name="status_pass3"  value="1" />
                                    <label for="Approve3" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove3" name="status_pass3" value="2" />
                                    <label for="Disapprove3">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit3" name="status_pass3"  value="3" data-toggle="collapse" data-target="#edit3" />
                                    <label for="Edit3"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass3==1)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve3" name="status_pass3"  value="1" checked="" />
                                    <label for="Approve3" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove3" name="status_pass3" value="2" disabled="" />
                                    <label for="Disapprove3">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit3" name="status_pass3"  value="3" data-toggle="collapse" data-target="#edit3" disabled="" />
                                    <label for="Edit3"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass3==2)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve3" name="status_pass3"  value="1" disabled="" />
                                    <label for="Approve3" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove3" name="status_pass3" value="2" checked="" />
                                    <label for="Disapprove3">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit3" name="status_pass3"  value="3" data-toggle="collapse" data-target="#edit3" disabled="" />
                                    <label for="Edit3"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass3==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve3" name="status_pass3"  value="1" disabled="" />
                                    <label for="Approve3" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove3" name="status_pass3" value="2" disabled="" />
                                    <label for="Disapprove3">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit3" name="status_pass3"  value="3" data-toggle="collapse" data-target="#edit3" checked="" />
                                    <label for="Edit3"> Edit </label></div> 
                                </div>
                                @endif
                            <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor3">
                                    <option value="" disabled selected>Choose your Signature</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime3" id="input" class="datepicker form-control" value=""></div>
                        </div>
                    </div>

                    <div class=" col s6">
                        <div class="card-panel">

                            <h6>4.Head of Student Activity Director of Student Affairs</h6>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Requirement activity.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="Requirement_act4" name="Requirement_act4" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Public consciousness, morals, ethics and discipline.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="morals4" name="morals4" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Social skill, academic/ profession international capability on basis of being Thai.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="social_skill4" name="social_skill4" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Pride of Institute being children of the Father, being one without division by academic campus or area.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="pride_institution4" name="pride_institution4" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Understanding of cultural plurality, democracy.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="cultural4" name="cultural4" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                            <div class="row">
                                <div class="input-field col s9  ">
                                    <label for="docNo">Healthy development.</label>
                                </div>
                                <div class="input-field col s2"><input placeholder="" id="health_development4" name="health_development4" type="text" class="validate">
                                </div>
                                <div class="input-field-blue col s1"><label>hr.</label>
                                </div><br>
                            </div>
                             @if($documents->status_pass4==0)
                               <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve4" name="status_pass4"  value="1" />
                                    <label for="Approve4" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove4" name="status_pass4" value="2" />
                                    <label for="Disapprove4">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit4" name="status_pass4"  value="3" data-toggle="collapse" data-target="#edit4" />
                                    <label for="Edit4"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass4==1)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve4" name="status_pass4"  value="1" checked="" />
                                    <label for="Approve4" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove4" name="status_pass4" value="2" disabled="" />
                                    <label for="Disapprove4">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit4" name="status_pass4"  value="3" data-toggle="collapse" data-target="#edit4" disabled="" />
                                    <label for="Edit4"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass4==2)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve4" name="status_pass4"  value="1" disabled="" />
                                    <label for="Approve4" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove4" name="status_pass4" value="2" checked="" />
                                    <label for="Disapprove4">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit4" name="status_pass4"  value="3" data-toggle="collapse" data-target="#edit4" disabled="" />
                                    <label for="Edit4"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass4==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve4" name="status_pass4"  value="1" disabled="" />
                                    <label for="Approve4" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove4" name="status_pass4" value="2" disabled="" />
                                    <label for="Disapprove4">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit4" name="status_pass4"  value="3" data-toggle="collapse" data-target="#edit4" checked="" />
                                    <label for="Edit4"> Edit </label></div> 
                                </div>
                                @endif
                            <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor4">
                                    <option value="Mr.Surawut Japrang" disabled selected>Mr.Surawut Japrang</option>
                                                                    </select></div>
                              <div class="">
                                <input type="date" name="approveTime4" id="input" class="datepicker form-control" value="date"></div>
                        </div>



                        <!-- <div class=" col s6"> -->
                        <div class="card-panel">
                            <h6>5.Director of Student Affairs</h6>
                            @if($documents->status_pass5==0)
                               <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve5" name="status_pass5"  value="1" />
                                    <label for="Approve5" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove5" name="status_pass5" value="2" />
                                    <label for="Disapprove5">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit5" name="status_pass5"  value="3" data-toggle="collapse" data-target="#edit5" />
                                    <label for="Edit5"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass5==1)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve5" name="status_pass5"  value="1" checked="" />
                                    <label for="Approve5" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove5" name="status_pass5" value="2" disabled="" />
                                    <label for="Disapprove5">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit5" name="status_pass5"  value="3" data-toggle="collapse" data-target="#edit5" disabled="" />
                                    <label for="Edit5"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass5==2)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve5" name="status_pass5"  value="1" disabled="" />
                                    <label for="Approve5" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove5" name="status_pass5" value="2" checked="" />
                                    <label for="Disapprove5">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit5" name="status_pass5"  value="3" data-toggle="collapse" data-target="#edit5" disabled="" />
                                    <label for="Edit5"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass5==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve5" name="status_pass5"  value="1" disabled="" />
                                    <label for="Approve5" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove5" name="status_pass5" value="2" disabled="" />
                                    <label for="Disapprove5">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit5" name="status_pass5"  value="3" data-toggle="collapse" data-target="#edit5" checked="" />
                                    <label for="Edit5"> Edit </label></div> 
                                </div>
                                @endif
                            <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor5">
                                    <option value="Mr.Thawat Musikatham" disabled selected>Mr.Thawat Musikatham</option>
                                    <!-- <option value="1">Option 1</option>
                                    <option value="2">Option 2</option> -->
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime5" id="input" class="datepicker form-control" value=""></div>
                        </div>

                        <div class="card-panel">
                            <h6>6.Assistant to the President for Student development </h6>

                              @if($documents->status_pass6==0)
                               <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve6" name="status_pass6"  value="1" />
                                    <label for="Approve6" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove6" name="status_pass6" value="2" />
                                    <label for="Disapprove6">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit6" name="status_pass6"  value="3" data-toggle="collapse" data-target="#edit6" />
                                    <label for="Edit6"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass6==1)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve6" name="status_pass6"  value="1" checked="" />
                                    <label for="Approve6" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove6" name="status_pass6" value="2" disabled="" />
                                    <label for="Disapprove6">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit6" name="status_pass6"  value="3" data-toggle="collapse" data-target="#edit6" disabled="" />
                                    <label for="Edit6"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass6==2)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve6" name="status_pass6"  value="1" disabled="" />
                                    <label for="Approve6" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove6" name="status_pass6" value="2" checked="" />
                                    <label for="Disapprove6">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit6" name="status_pass6"  value="3" data-toggle="collapse" data-target="#edit6" disabled="" />
                                    <label for="Edit6"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass6==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve6" name="status_pass6"  value="1" disabled="" />
                                    <label for="Approve6" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove6" name="status_pass6" value="2" disabled="" />
                                    <label for="Disapprove6">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit6" name="status_pass6"  value="3" data-toggle="collapse" data-target="#edit6" checked="" />
                                    <label for="Edit6"> Edit </label></div> 
                                </div>
                                @endif
                            <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor6">
                                    <option value="Mr.Charoen phromrit" disabled selected>Mr.Charoen phromrit</option>
                                    <!-- <option value="1">Option 1</option>
                                    <option value="2">Option 2</option> -->
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime6" id="input" class="datepicker form-control" value=""></div>
                        </div>
                        <div class="card-panel">
                            <h6>7.Vice President for Academic Affairs</h6>
                             @if($documents->status_pass7==0)
                               <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve7" name="status_pass7"  value="1" />
                                    <label for="Approve7" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove7" name="status_pass7" value="2" />
                                    <label for="Disapprove7">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit7" name="status_pass7"  value="3" data-toggle="collapse" data-target="#edit7" />
                                    <label for="Edit7"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass7==1)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve7" name="status_pass7"  value="1" checked="" />
                                    <label for="Approve7" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove7" name="status_pass7" value="2" disabled="" />
                                    <label for="Disapprove7">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit7" name="status_pass7"  value="3" data-toggle="collapse" data-target="#edit7" disabled="" />
                                    <label for="Edit7"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass7==2)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve7" name="status_pass7"  value="1" disabled="" />
                                    <label for="Approve7" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove7" name="status_pass7" value="2" checked="" />
                                    <label for="Disapprove7">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit7" name="status_pass7"  value="3" data-toggle="collapse" data-target="#edit7" disabled="" />
                                    <label for="Edit7"> Edit </label></div> 
                                </div>
                                @elseif($documents->status_pass7==3)
                                <div class="row input-field">
                                <div class="col s4 radio-item1 form-group">
                                    <input class="form-control" inline" type="radio" id="Approve7" name="status_pass7"  value="1" disabled="" />
                                    <label for="Approve7" class="input-field-green">Approve </label>
                                </div>
                                <div class="col s4 radio-no form-group">
                                    <input class="icheck-danger inline form-control" type="radio" id="Disapprove7" name="status_pass7" value="2" disabled="" />
                                    <label for="Disapprove7">Disapprove </label>
                                </div>
                                <div class="col s4 form-group">
                                    <input  class="icheck-primary inline form-control" type="radio" id="Edit7" name="status_pass7"  value="3" data-toggle="collapse" data-target="#edit7" checked="" />
                                    <label for="Edit7"> Edit </label></div> 
                                </div>
                                @endif
                            <br>
                            <div>
                                <label>Signature</label>
                                <select class="browser-default" name="editor7">
                                    <option value="Assoc.Prof.Dr.Worawut Wisutmethangoon" disabled selected>Assoc.Prof.Dr.Worawut Wisutmethangoon</option>
                                    <!-- <option value="1">Option 1</option>
                                    <option value="2">Option 2</option> -->
                                </select></div>
                              <div class="">
                                <input type="date" name="approveTime7" id="input" class="datepicker form-control" value=""></div>
                        </div>
                    </div>
                         
                    <div class="form-group right">
                                        <input type="submit" name="save" value="verified_user" class="btn-floating btn-large waves-effect waves-light green material-icons">
                                        
                    </div> <a href="{{ route('document.index') }}" class="btn-floating btn-large waves-effect waves-light #1e88e5 yellow darken-1"><i class="material-icons">undo</i></a>
                {!! Form::close() !!}
            </div>
                

        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection