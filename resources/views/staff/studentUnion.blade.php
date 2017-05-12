@extends('layout.staff_layout')
@section('title')
Staff
@endsection
@section('css')
<link rel="stylesheet" href="data_table/material.min.css">
<link rel="stylesheet" href="data_table/dataTables.material.min.css">
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

	<table id="example" class="mdl-data-table" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>PSU Passport</th>
				<th>Name</th>
				<th>Begin date</th>
				<th>End Date</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>PSU Passport</th>
				<th>Name</th>
				<th>Begin date</th>
				<th>End Date</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</tfoot>
		<tbody>
			@foreach ($students as $stuun)
			<tr>
				<td>{{ $stuun->psu_passport }}</td>
				<td>{{ $stuun->title }}{{ $stuun->firstname }}  {{ $stuun->lastname }}</td>
				<td>{{ $stuun->begin_date }}</td>
				<td>{{ $stuun->end_date }}</td>
				<td>{{ $stuun->email }}</td>
				<td>
					<a href="editStudentUnion_{{ $stuun->id }}"><i class="Tiny material-icons ">mode_edit</i></a>
					<a href="studentUnion/delete/{{ $stuun->id }}"><i class="Tiny material-icons " style="color: red">delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</section>
@endsection
@section('js')	
<script src="data_table/jquery.dataTables.min.js"></script>
<script src="data_table/dataTables.material.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable( {
			columnDefs: [
			{
				targets: [ 0, 1, 2 ],
				className: 'mdl-data-table__cell--non-numeric'
			}
			]
		} );
	} );
</script>	
@endsection