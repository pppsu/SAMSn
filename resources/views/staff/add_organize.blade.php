@extends('layout.staff_layout')
@section('title')
Staff
@endsection
@section('css')
@endsection
@section('content')
<style type="text/css">


</style>
<section>
	<div >
		<div class="row">
			<h3>Add Organization Information</h3>
		</div>		
	</div>
</section>
<section>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="card-panel ">
				@if ( count($errors) > 0 )
				<div class="card-panel red accent-1">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form method="POST" action="addOrganization">
					<div class="col l12 m12 s12"><h4>Please Enter you information</h4></div><br><br><br><br>

					<div class="row">
						<div class="input-field  col s12 l6 m6">
							<input id="org_name" type="text" name="org_name">
							<label for="org_name">Organization Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l6 m6 ">
							<input id="org_acronym" type="text" name="org_acronym">
							<label for="org_acronym">The Abbreviation of Organization</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l3 m3 ">
							<select name="org_status">
								<option value="Established a new club">Established a new club</option>
								<option value="Renew a club">Renew a club</option>
							</select>
							<label>Choos status of club</label>           
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l9 m5 ">
							<select name="org_attribute">
								<option value="Public consiousness, morals, ethics and discipline">Public consiousness, morals, ethics and discipline</option>
								<option value="Social skill, profession international capability on basis of being Thai.">Social skill, profession international capability on basis of being Thai.</option>
								<option value="Pride of lnstitute being children of the Father, being on without divsion by academic campus campus or area">Pride of lnstitute being children of the Father, being on without divsion by academic campus campus or area</option>
								<option value="Understanding of cultural plurality, democracy">Understanding of cultural plurality, democracy</option>
								<option value="Healthy development">Healthy development</option>
							</select>
							<label>Choos attribute of club</label>           
						</div>
					</div>
					<div class="row">
						<div class="col l3 m3 s12">
							<div class="input-field" style="">
								<input placeholder="Adviser ID" id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Search</label>
							</div>
						</div>
						<div class="input-field col s12 l3 m3 ">
							<input value="2017005" id="disabled" type="text" class="validate" name="id">
							<label for="disabled">Adviser ID</label>          
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 l3 m3 ">
							<select name="title">
								<option value="Mr.">Mr.</option>
								<option value="Mrs.">Mrs.</option>
								<option value="Ms.">Ms.</option>
							</select>
							<label>Choos Adviser Title Name</label>           
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s6">
							<input id="advice_name" type="text" name="firstname">
							<label for="advice_name">Adviser Name</label>
						</div>

						<div class="input-field col s6">
							<input id="last_name" type="text" name="lastname">
							<label for="last_name">Adviser Lastname</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s12 l12 m12">
							<input id="advice_email" type="text" name="email">
							<label for="advice_email">Adviser Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s12 l6 m6">
							<!-- <input type="date" class="datepicker" id="begin" placeholder="Begin Date" name="begin_date"> -->
							<input type="text" id="begin" placeholder="yyyy-mm-dd" name="begin_date">
							<label for="begin">Begin Date</label>
						</div>
						<div class="input-field  col s12 l6 m6">
							<!-- <input type="date" class="datepicker" id="end" placeholder="End Date" name="end_date"> -->
							<input type="text" id="end" placeholder="yyyy-mm-dd" name="end_date">
							<label for="end">End Date</label>
						</div>
					</div>

					{{ csrf_field() }}

					<div class="row">
						<div class="input-field col s12 l6 m6 ">
							<button class="btn blue waves-effect right" type="submit" name="action">Submit
								<i class="material-icons right">save</i>
							</button>
						</div>
						<div class="input-field col s12 l6 m6 ">
							<button class="btn red waves-effect left" type="Cancle" name="action">Cancle
								<i class="material-icons right">clear</i>
							</button>

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
@section('js')

<script type="text/javascript"> $(document).ready(function() {
	$('select').material_select();
});

$('select').material_select('destroy');

$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
selectYears: 20 // Creates a dropdown of 20 years to control year
});

</script>


@endsection