<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
		<title>Form</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css"  crossorigin="anonymous">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
		<script src="../bower_components/webcomponentsjs/webcomponents-lite.js"></script>
 		 <link rel="import" href="../bower_components/polymer/polymer.html">
		<!-- CSS  -->
		<link href="css/label.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="">
		<link rel="stylesheet" href="https://www.gstatic.com/_/freebird/_/ss/k=freebird.e.-1v9562icdcj6f.L.W.O/d=1/rs=AMjVe6jEWiOnYrEzobvs6QdNdSOr1XNFZg" data-id="_cl">
		 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
		
 
</style>
	</head>
	<body>
	<!-- <div class="body"><div class="text-center panel-body"> <img src="img/PSUlogo.png" width="" height=""></div></div> -->
		<nav class="#8e24aa purple darken-1" role="navigation">
			<div class="container">
				<div class="nav-wrapper"><a id="logo-container" href=""  class="brand-logo"><img src="img/logo.png" " height="49px" width="34px" alt=""></a>
					<ul class="right"> 
						<!-- <li><a href="#"><i class="material-icons">menu</i></a></li> -->
					</ul>

					<ul id="nav-mobile" class="side-nav">
						<li><a href="#">Fuck u bicth</a></li>
					</ul>
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				</div>
			</div>
		</nav>
	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<br><br>
			<!-- <h1 class="header center orange-text"> ACTIVITY/ PROJECT/ EVENT APPROVAL FORM</h1> -->
			<div class="row center card-panel white">
				<h5 class="header col s12 orange-text">ACTIVITY/ PROJECT/ EVENT APPROVAL FORM</h5>
				<h6 class="header col s12 light"><b>FOR Student Union/ Student Council/ Faculty’s Student Union/ Student Club / Activity Organization</b></h6>
			</div>
			<!-- <div class="row center">
				<a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
			</div> -->
			<br><br>

		</div>
	</div>

	<div class="container ">
		<div class="section">
			<div class="row">
				<div class="col s12 ">
					<div class="card-panel white">
						<div class="row">
							<form class="col s12">
								<div class="">	
									<div class="input-field col s2 ">					
         				 				<label for="OrganiName" class="input-field">Organization name</label>
       							 	</div>
       					 				<div class="input-field col s10"> <input placeholder="" id="OrganiName" type="text" class="validate" ></div>
								</div>
								<div class="row">
       									 <div class="input-field col s12 m4 l2 ">
          									<label for="docNo" class="input-field">Document no.</label></div>
          									<div class="input-field col s12 m4 l8"><input  placeholder="" id="docNo" type="text" class="validate"></div>
       								
       								 	<!-- <div class=" col s12 m4 l2">
       								 	          									
       								 	</div> -->
      							</div>
      							<div class="row">
      								<div class="input-field col s7">
          									<label for="ActivityName" class="input-field">Subject Request for activity/ project/event approval (activity name).</label></div>
          									<div class="input-field col s5"><input placeholder="" id="ActivityName" type="text" class="validate"></div>
      							</div>
      							<h7><b>To  Vice President for Academic Affairs, Phuket Campus</b></h7><br>
									
									<p>&nbsp;&nbsp;&nbsp;&nbsp;(Organization name) will create the (activity name) on (dd/mm/yyyy)  to (dd/mm/yyyy) at (place)
									</p>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;So we would like you to approve this activity running as the detail, schedule and place as the attached file</p> <form action="#" >
         																	 <div class="file-field input-field right">
         																		   <div class="waves-effect waves- btn-floating  waves-light red">
            	 																		 <span><center>+</center></span>
             																			 <input type="file">
           																			</div>
        																			
         																	 </div>
       																	</form>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;<b>This activity will arrange by the budget from :</b></p>
									<div class="input-field">
									<p>
     									 <input name="group1" type="radio" id="budgetStu" />
      									 <label for="budgetStu">Student Activity’s budget</label>
   									</p>		
									<p>
     									 <input class="with-gap " name="group1" type="radio" id="budget"  />
   										 <label for="budget">Budget from other source (please identify)</label>
   										 <div class="input-field"><input id="budget" type="text" class=""></div>
    								</p></div>
    								<p>&nbsp;&nbsp;&nbsp;&nbsp;Amount :</p>
    								<p class="range-field">
     									<div class="col s8">
     									<input type="range" min="100" max="10000" value="100" id="amount" step="1" oninput="outputUpdate(value)"></div>
										<div class="col s4"><output for="amount" id="volume">100</output> ฿ .- Bath</div>
   									</p>
   									<br><br>
   								<p><h7><b>Activity hour credit as bellowing :</b></h7><br></p>
								<div class="row">
       									 <div class="input-field col s10  ">
          									<label for="docNo">Requirement activity.</label></div>
          									<div class="input-field col s1"><input placeholder="" id="docNo" type="text" class="validate"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
          								 <div class="input-field col s10  ">
          									<label for="morals"> Public consciousness, morals, ethics and discipline.</label></div>
          									<div class="input-field col s1"><input placeholder="" id="morals" type="text" class="validate"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
          								 <div class="input-field col s10  ">
          									<label for="SocialSkill">Social skill, academic/ profession international capability on basis of being Thai.</label></div>
          									<div class="input-field col s1"><input placeholder="" id="SocialSkill" type="text" class="validate"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
          								 <div class="input-field col s10  ">
          									<label for="division">Pride of Institute being children of the Father, being one without division by academic campus or area.</label></div>
          									<div class="input-field col s1"><input placeholder="" id="division" type="text" class="validate"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
          								 <div class="input-field col s10  ">
          									<label for="democracy">Understanding of cultural plurality, democracy.</label></div>
          									<div class="input-field col s1"><input placeholder="" id="de" type="text" class="validate"></div><div class="input-field-blue col s1"><label>hours</label></div><br>
          								 <div class="input-field col s10  ">
          									<label for="Healthy">Healthy development.</label></div>
          									<div class="input-field col s1"><input placeholder="" id="Healthy" type="text" class="validate"></div><div class="input-field-blue col s1"><label>hours</label></div><br> 	
      							</div>
      							<div class="row">
      								<div class="col s8">
										<p>&nbsp;&nbsp;&nbsp;&nbsp; Thank you for your consideration,</p>
									</div>
									<div class="col s4 right">
										<p>Signature________________</p>
										<p>(Firstname lastname)</p>

									</div>
								</div>


							</form>
							
						</div>
					</div>

					<div class=" col s6">
						<div class="card-panel">

						
							<h6>1.Instructor in charge</h6>
								<div class="row input-field">
									<div class="col s4 radio-item1">
  									<input class="" inline" type="radio" id="Approve1" name="group2" />
  									<label for="Approve1" class="input-field-green">Approve </label>
									</div>
									<div class="col s4 radio-no ">
  									<input class="icheck-danger inline" type="radio" id="Disapprove1" name="group2" />
  									<label for="Disapprove1">Disapprove </label></div>
								
									<div class="col s4 ">
  									<input  class="icheck-primary inline " type="radio" id="Edit1" name="group2"  data-toggle="collapse" data-target="#edit1" />
  									<label for="Edit1"> Edit </label></div>	
								</div><br>
								<div>
								<label>Signature</label>
								<select class="browser-default">
								  <option value="" disabled selected>Choose your Signature</option>
								  <option value="1">Option 1</option>
								  <option value="2">Option 2</option>
								</select></div>
								<div class="">
								<input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
						</div>
							<div class="card-panel">
							<h6>2.Student Union</h6>
							<div class="input-field row">
									<div class="col s4 radio-item1">
  									<input class="icheck-success inline" type="radio" id="Approve2" name="group3" />
  									<label for="Approve2">Approve </label></div>
								
									<div class="col s4 radio-no">
  									<input class="icheck-danger inline" type="radio" id="Disapprove2" name="group3" />
  									<label for="Disapprove2">Disapprove </label></div>
								
									<div class="col s4 ">
  									<input  class="icheck-primary inline " type="radio" id="Edit2" name="group3"  data-toggle="collapse" data-target="#edit2" />
  									<label for="Edit2"> Edit </label></div>	
								</div><br>
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
							<div class="input-field row">
									<div class="col s4  radio-item1">
  									<input class="icheck-success inline" type="radio" id="Approve3" name="group4" />
  									<label for="Approve3">Approve </label></div>
								
									<div class="col s4 radio-no">
  									<input class="icheck-danger inline" type="radio" id="Disapprove3" name="group4" />
  									<label for="Disapprove3">Disapprove </label></div>
								
									<div class="col s4">
  									<input  class="icheck-primary inline " type="radio" id="Edit3" name="group4"  data-toggle="collapse" data-target="#edit3" />
  									<label for="Edit3"> Edit </label></div>	
								</div><br>
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
							<div class="input-field row">
									<div class="col s4 radio-item1">
  									<input class="icheck-success inline" type="radio" id="Approve4" name="group5" />
  									<label for="Approve4">Approve </label></div>
								
									<div class="col s4 radio-no">
  									<input class="icheck-danger inline" type="radio" id="Disapprove4" name="group5" />
  									<label for="Disapprove4">Disapprove </label></div>
								
									<div class="col s4">
  									<input  class="icheck-primary inline " type="radio" id="Edit4" name="group5"  data-toggle="collapse" data-target="#edit4" />
  									<label for="Edit4"> Edit </label></div>
							</div><br>
								<label>Signature</label>
								<select class="browser-default">
								  <option value="" disabled selected>Choose your Signature</option>
								  <option value="1">Option 1</option>
								  <option value="2">Option 2</option>
								</select>
								<div class="">
								<input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
						</div>
						
					
					
					<!-- <div class=" col s6"> -->
					<div class="card-panel">
							<h6>5.Director of Student Affairs</h6>
							<div class="input-field row">
									<div class="col s4 radio-item1">
  									<input class="icheck-success inline" type="radio" id="Approve5" name="group6" />
  									<label for="Approve5">Approve </label></div>
								
									<div class="col s4 radio-no">
  									<input class="icheck-danger inline" type="radio" id="Disapprove5" name="group6" />
  									<label for="Disapprove5">Disapprove </label></div>
								
									<div class="col s4">
  									<input  class="icheck-primary inline " type="radio" id="Edit5" name="group6"  data-toggle="collapse" data-target="#edit5" />
  									<label for="Edit5"> Edit </label>	</div>
								</div><br>
								<label>Signature</label>
								<select class="browser-default">
								  <option value="" disabled selected>Choose your Signature</option>
								  <option value="1">Option 1</option>
								  <option value="2">Option 2</option>
								</select>
								<div class="">
								<input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
						</div>
					<!-- </div> -->
					<!-- <div class=" col s6">
					
					</div> -->
					<!-- <div class=" col s6"> -->
					<div class="card-panel">
							<h6>6.Assistant to the President for Student development </h6>
							<div class="input-field row">
									<div class="radio-item1 col s4">
  									<input class="icheck-success inline" type="radio" id="Approve6" name="group7" />
  									<label for="Approve6">Approve </label></div>
								
									<div class="col s4 radio-no">
  									<input class="icheck-danger inline" type="radio" id="Disapprove6" name="group7" />
  									<label for="Disapprove6">Disapprove </label></div>
								
									<div class="col s4">
  									<input  class="icheck-primary inline " type="radio" id="Edit6" name="group7"  data-toggle="collapse" data-target="#edit6" />
  									<label for="Edit6"> Edit </label></div>	
								</div><br>
								<label>Signature</label>
								<select class="browser-default">
								  <option value="" disabled selected>Choose your Signature</option>
								  <option value="1">Option 1</option>
								  <option value="2">Option 2</option>
								</select>
								<div class="">
								<input type="date" name="" id="input" class="form-control" value="" required="required" title=""></div>
						</div>
					<!-- </div> -->
					<!-- <div class=" col s6"> -->
					<!-- <div class="card-panel">
							<h6>1.Instructor in charge</h6>
						</div> -->
					<!-- </div> -->
					<!-- <div class=" col s6"> -->
					<div class="card-panel">
							<h6>7.Vice President for Academic Affairs</h6>
							<div class="input-field row">
									<div class="col s4 radio-item1">
  									<input class="icheck-success inline" type="radio" id="Approve7" name="group8" />
  									<label for="Approve7">Approve </label></div>
								
									<div class="col s4 radio-no">
  									<input class="icheck-danger inline" type="radio" id="Disapprove7" name="group8" />
  									<label for="Disapprove7">Disapprove </label></div>
								
									<div class="col s4">
  									<input  class="icheck-primary inline " type="radio" id="Edit7" name="group8"  data-toggle="collapse" data-target="#edit7" />
  									<label for="Edit7"> Edit </label>	</div>
								</div><br> 
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
								

						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
		<br><br>


		

			<div class="section">
				<div class="center">
				<a href="createdocument" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">done</i></a>
				<a href="" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">not_interested</i></a>
				</div>
				<div class="right">
					<a href="createdocument" class="btn-floating  blue"><i class="material-icons">navigation</i></a>
				</div>
			</div>
		</div>

		<footer class="page-footer #8e24aa purple darken-1">
			<div class="container">
				<div class="row white-text text-lighten-3">
					Prince of Songkla University, Phuket Campus 
					<span id="datetime" class="right"></span>
				</div>
				
			</div>
			<div class="footer-copyright">
				<div class="container">
					Creative by <a class="orange-text text-lighten-3" href="h">Morning Lab</a>
				</div>
			</div>
		</footer>


		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<script>var today = new Date();
				document.getElementById('time').innerHTML=today;</script>
						<script>
						var dt = new Date();
						document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
		</script>
		
		<script >
			function outputUpdate(vol) {
	document.querySelector('#volume').value = vol;
}
  			</script>
  			<script> 


</script>

	</body>
</html>
					