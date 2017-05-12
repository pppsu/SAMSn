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
			<h3>Add Member Information</h3>
		</div>		
	</div>
</section>
<section>
	<div class="row">
		@if ( count($errors) > 0 )
				<div class="card-panel red accent-1">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
				@endif
		<form method="POST" action="/SAMSn/public/addMember">
					<div class="col l12 m12 s12"><h4>Please Enter Your Information</h4></div><br><br><br><br>

					<div class="row">
						<div class="col l3 m3 s12">
							<div class="input-field" style="">
								<input placeholder="PSUPassport" id="icon_prefix" type="text" class="validate">
								<label for="icon_prefix">Search</label>
							</div>
						</div>
					</div>	

					<div class="row">
						<div class="input-field col s6">
							<input value="5630213025" id="disabled" type="text" class="validate" name="id">
							<label for="disabled">PSUPassport</label>          
						</div>
					</div>
					<div class="row">					
						<div class="input-field col s6">
							<select name="title">
								<option value="Mr.">Mr.</option>
								<option value="Mrs.">Mrs.</option>
								<option value="Ms.">Ms.</option>
							</select>
							<label>Choos Title Name</label>           
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s6">
							<input id="name" type="text" name="firstname">
							<label for="name">First Name</label>
						</div>

						<div class="input-field col s6">
							<input id="last_name" type="text" name="lastname">
							<label for="last_name">Lastname</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s6">
							<input id="faculty" type="text" name="faculty">
							<label for="faculty">Faculty</label>
						</div>
					
						<div class="input-field  col s6">
							<input id="major" type="text" name="major">
							<label for="major">Major</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">					
							<select name="org_id">
								<option value="" disabled selected>Choose your organization</option>
								@foreach($organization as $org)
								<option value="{{ $org->id }}">{{ $org->org_name }}</option>
								@endforeach
							</select>							
							<label>Choos Organization</label>           
						</div>

						<div class="input-field col s6">
							<select name="position">
								<option value="" disabled selected>Choose your position</option>
								<option value="President">President</option>
								<option value="Vice President">Vice President</option>
								<option value="Secretary">Secretary</option>
							</select>
							<label>Choos Student Position</label>           
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s6">
							<input id="email" type="text" name="email">
							<label for="email">Email</label>
						</div>

						<div class="input-field  col s6">
							<input id="phone" type="text" name="phone">
							<label for="phone">Phone</label>
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
							<button class="btn blue waves-effect right" type="submit" name="action">Add
								<i class="material-icons right">save</i>
							</button>
						</div>
						<div class="input-field col s12 l6 m6 ">
							<button class="btn red waves-effect left" type="reset" name="action">Clear
								<i class="material-icons right">clear</i>
							</button>
							<!-- <button class="btn red waves-effect left" type="Cancle" name="action">
								<a href="Member">Cancle<i class="material-icons right">clear</i></a>
							</button> -->
						</div>
					</div>
				</form>
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