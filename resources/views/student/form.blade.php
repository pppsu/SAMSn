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
                    <div class="card-panel white hoverable">
                        <div class="row">
                            
                            <form action="{{ route('document.index') }}" method="post" class="col s12" >
                                
                                <div class="form-group">	
                                    <div class="input-field col s2 ">					
                                        <label for="OrganiName" class="input-field">Organization name</label>
                                    </div>
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     <input type="hidden" name="status_pass1" value="0">
                                     <input type="hidden" name="status_pass2" value="0">
                                     <input type="hidden" name="status_pass3" value="0">
                                     <input type="hidden" name="status_pass4" value="0">
                                     <input type="hidden" name="status_pass5" value="0">
                                     <input type="hidden" name="status_pass6" value="0">
                                     <input type="hidden" name="status_pass7" value="0">
                                    <div class="input-field col s10 form-group">
                                    <input placeholder="" name="OrganiName" id="OrganiName" type="text" class="validate form-control" >
                                    </div>
                                </div>
                                <div class="row form-group">
                                    	<div class="input-field col s12 m4 l2 form-group">
                                        	<label for="docNo" class="input-field">Document no.</label>
                                    	</div>
                                    		<div class="input-field col s12 m4 l8 form-group">
                                        		<input disabled name="id" placeholder="" id="docNo" type="text" class="validate form-control" value="">
                                    		</div>
                                </div>
                                <div class="row form-group">
                                    <div class="input-field col s7">
                                        <label for="activity" class="input-field">Subject Request for activity/ project/event approval (activity name).</label></div>
                                    <div class="input-field col s5"><input placeholder="" id="activity" name="activity" type="text" class="validate form-control input-field"></div>
                                </div>

								
	                            <h7><b>To  Vice President for Academic Affairs, Phuket Campus</b></h7><br>

								<div class="col s6">
	                            	<p>&nbsp;&nbsp;&nbsp;&nbsp;(Organization name) will create the (activity name) on</p>
	                            </div>
	                            <div class="col s2 form-group"><input type="date" class="datepicker form-control" name="begin_date"></div>
	                            <div class="col s2">to</div>
	                            <div class="col s2 form-group"><input type="date" class="datepicker form-control" name="end_date"> </div> 
								<div class="col s1"><p><b>At</b></p></div>
	                            <div class="col s11 form-group"> <input type="text" class="form-control" name="act_place">  </div>

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
	                                <p>
	                                    <input name="budget_type" type="radio"  id="budgetStu" value="1" />
	                                    <label for="budgetStu">Student Activity’s budget</label>
	                                    <?php if (isset($budget_type) && $budget_type=="1") echo "checked";?>

	                                </p>
	                                <p>
	                                    <input class="with-gap " name="budget_type" type="radio" id="budget" value="2" />
	                                    <label for="budget">Budget from other source (please identify)</label>
	                                    <?php if (isset($budget_type) && $budget_type=="2") echo "checked";?>
	                                <div class="form-group input-field"><input id="budget" type="text" class="form-control" name="source_budget"></div>
	                                </p>
	                            </div>
								
	                            <!-- <p>&nbsp;&nbsp;&nbsp;&nbsp;Amount :</p> -->
	                            <!-- <p class="range-field form-group"></p>
	                            	                           <div class="col s8 form-group">
	                                                            <input type="range" min="0" max="50000" value="0" name="amount" id="amount" step="1" oninput="outputUpdate(value)"></div>
	                                                        <div class="col s4"><output for="amount" id="volume">0</output> ฿ .- Bath</div> -->
	                            <div class="col s2 form-group " id=""><p><b>Amount :</b></p></div>
	                            <div class="col s8 form-group ">
	                             <input class="with-gap" name="amount" type="text" id="amount" />
	                            </div>
	                            <div class="col s2 form-group "><p><b>฿ .- Bath</b></p></div><br>
	                            

								
	                            <br><br>
	                            <p><h7><b>Activity hour credit as bellowing :</b></h7><br></p>
	                            <div class="form-group row form-group">
	                                <div class="input-field col s10  form-group">
	                                    <label for="ReqAc">Requirement activity.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="ReqAc" id="ReqAc" type="text" class="form-control validate"></div><div class="input-field-blue col s1"><p><label style="font-family: 'Source Sans Pro', sans-serif;">hours</label></p></div><br>
								
	                                <div class="input-field col s10 form-group">
	                                    <label for="morals"> Public consciousness, morals, ethics and discipline.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="morals" id="morals" type="text" class="form-control validate"></div><div class="input-field-blue col s1"><p><label style="font-family: 'Source Sans Pro', sans-serif;">hours</label></p></div><br>
								
	                                <div class="input-field col s10 form-group ">
	                                    <label for="SocialSkill">Social skill, academic/ profession international capability on basis of being Thai.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="SocialSkill" id="SocialSkill" type="text" class="form-control validate"></div><div class="input-field-blue col s1"><p><label style="font-family: 'Source Sans Pro', sans-serif;">hours</label></p></div><br>
								
	                                <div class="input-field col s10   form-group">
	                                    <label for="division">Pride of Institute being children of the Father, being one without division by academic campus or area.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="division" id="division" type="text" class="validate form-control"></div><div class="input-field-blue col s1"><p><label style="font-family: 'Source Sans Pro', sans-serif;">hours</label></p></div><br>
								
	                                <div class="input-field col s10 form-group  ">
	                                    <label for="democracy">Understanding of cultural plurality, democracy.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="cultural" id="cultural" type="text" class="validate form-control"></div><div class="input-field-blue col s1 form-group"><p><label style="font-family: 'Source Sans Pro', sans-serif;">hours</label></p></div><br>
								
	                                <div class="input-field col s10  form-group ">
	                                    <label for="Healthy">Healthy development.</label></div>
	                                <div class="input-field col s1 form-group"><input placeholder="" name="Healthy" id="Healthy" type="text" class="validate form-control"></div><div class="input-field-blue col s1 form-group"><p><label style="font-family: 'Source Sans Pro', sans-serif;">hours</label></p></div><br> 	
	                            </div>

	                            <div class="row form-group">
	                                <div class="col s8 form-group">
	                                    <p>&nbsp;&nbsp;&nbsp;&nbsp; <b>Thank you for your consideration,</b></p>
	                                </div>
	                                <div class="col s4 right form-group">
	                                    <p><b>{{ Auth::user()->name }}</b></p>
	                                    <p><b>(</b>{{ Auth::user()->name }}<b>)</b></p>
	                                    <input type="hidden" name="created" value="{{ Auth::user()->name }}">
	                                </div>
	                            </div>
									<div class="form-group right">
										<input type="submit" name="save" value="save" class="btn-floating btn-large waves-effect waves-light green ">
	                           	 	</div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection

@section('footer')
	@parent
@endsection
