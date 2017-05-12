@extends('layout.staff_layout')
@section('title')
Staff
@endsection
@section('css')
<style type="text/css">
	
	table, td, th {    
		border: 1px solid #ddd;
		text-align: center;
	}

	table {
		border-collapse: collapse;
		width: 90%;
	}

	th, td {
		padding: 10px;
	}
</style>
@endsection
@section('content')

<section>
	<div class="row">
		<div class="col l12 s12 m12">
			<h2>Student Union Information</h2>
		</div>
	</div>

	<div class="row">
			<div class="col l1 m1 s12"><a href="addStudentUnion" class="btn">add</a></div>

			<div class="col l6 m6 s12 offset-l4	">
				<div class="input-field" style="">
					
				</div>
			</div>
	</div>

	<table class="striped">	
		<thead>
			<tr>
				<th data-field="ora">PSU Passport</th>
				<th data-field="adviser">Name</th>
				<th data-field="bdate">Begin date</th>
				<th data-field="edate">End Date</th>
				<th data-field="Email">Email</th>
				<th data-field="manage"></th>
			</tr>
		</thead>
		@foreach ($students as $s)
		<tr class="jsgrid-alt-row">
			<td>{{ $s->psu_passport }}</td>
			<td>{{ $s->title }}{{ $s->firstname }}  {{ $s->lastname }}</td>
			<td>{{ $s->begin_date }}</td>
			<td>{{ $s->end_date }}</td>
			<td>{{ $s->email }}</td>
			<td>
				<a href="editStudentUnion_{{ $s->id }}"><i class="Tiny material-icons ">mode_edit</i></a>
				<a href="studentUnion/delete/{{ $s->id }}"><i class="Tiny material-icons " style="color: red">delete</i></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</section>
@endsection
@section('js')	
@endsection