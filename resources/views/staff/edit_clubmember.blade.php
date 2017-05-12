@extends('layout.staff_layout')
@section('title')
Staff
@endsection
@section('css')
@endsection
@section('content')
<section>
	<div >
		<div class="row">
			<h3>Add Member Information</h3>
		</div>		
	</div>
</section>
<section>
	<div class="row">
		<form method="POST" action="Member/update/{{ $student->id }}">
					<div class="col l12 m12 s12"><h4>Please Enter Your Information</h4></div><br><br><br><br>

					<div class="row">
						<div class="input-field col s6">
							<input type="text" id="psu_passport" class="validate" name="id" value="{{ $student->psu_passport }}">
							<label for="id">PSUPassport</label>          
						</div>
					</div>
					<div class="row">					
						<div class="input-field col s6">
							<select name="title">
								<option value="" disabled>Choose your title</option>
								@if ($student->title == "Mr.")
									<option value="Mr." selected>Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Ms.">Ms.</option>
								@elseif($student->title == "Mrs.")
									<option value="Mr.">Mr.</option>
									<option value="Mrs." selected>Mrs.</option>
									<option value="Ms.">Ms.</option>
								@else
									<option value="Mr.">Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Ms." selected>Ms.</option>
								@endif								
							</select>
							<label>Choos Title Name</label>           
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s6">
							<input id="name" type="text" name="firstname" value="{{ $student->firstname }}">
							<label for="name">First Name</label>
						</div>

						<div class="input-field col s6">
							<input id="last_name" type="text" name="lastname" value="{{ $student->lastname }}">
							<label for="last_name">Lastname</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s6">
							<input id="faculty" type="text" name="faculty" value="{{ $student->faculty }}">
							<label for="faculty">Faculty</label>
						</div>
					
						<div class="input-field  col s6">
							<input id="major" type="text" name="major" value="{{ $student->major }}">
							<label for="major">Major</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">					
							<select name="org_id">
								<option value="" disabled>Choose your organization</option>
								@foreach($organization as $org)
									@if ($student->org_id == $org->id)
										<option value="{{ $org->id }}" selected>{{ $org->org_name }}</option>
									@else
										<option value="{{ $org->id }}">{{ $org->org_name }}</option>
									@endif
								@endforeach
							</select>							
							<label>Choos Organization</label>           
						</div>

						<div class="input-field col s6">
							<select name="position">
								<option value="" disabled>Choose your position</option>
								@if ($student->position == "President")
									<option value="President" selected>President</option>
									<option value="Vice President">Vice President</option>
									<option value="Secretary">Secretary</option>
								@elseif ($student->position == "Vice President")
									<option value="President">President</option>
									<option value="Vice President" selected>Vice President</option>
									<option value="Secretary">Secretary</option>
								@else
									<option value="President">President</option>
									<option value="Vice President">Vice President</option>
									<option value="Secretary" selected>Secretary</option>
								@endif
							</select>
							<label>Choos Student Position</label>           
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s6">
							<input id="email" type="text" name="email" value="{{ $student->email }}">
							<label for="email">Email</label>
						</div>

						<div class="input-field  col s6">
							<input id="phone" type="text" name="phone" value="{{ $student->phone }}">
							<label for="phone">Phone</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field  col s12 l6 m6">
							<!-- <input type="date" class="datepicker" id="begin" placeholder="Begin Date" name="begin_date"> -->
							<input type="text" id="begin" placeholder="yyyy-mm-dd" name="begin_date" value="{{ $student->begin_date }}">
							<label for="begin">Begin Date</label>
						</div>
						<div class="input-field  col s12 l6 m6">
							<!-- <input type="date" class="datepicker" id="end" placeholder="End Date" name="end_date"> -->
							<input type="text" id="end" placeholder="yyyy-mm-dd" name="end_date" value="{{ $student->end_date }}">
							<label for="end">End Date</label>
						</div>
					</div>

					{{ csrf_field() }}

					<div class="row">
						<div class="input-field col s12 l6 m6 ">
							<button class="btn blue waves-effect right" type="submit" name="action">Edit
								<i class="material-icons right">save</i>
							</button>
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