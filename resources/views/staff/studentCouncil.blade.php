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
	<div>
		<div class="row">
			<h3>Student Council Information</h3>
		</div>	
		<div class="row">
			<div class="col l1 m1 s12"><a href="addStudentCouncil" class="btn">add</a></div>
		</div>		
	</div>
</section>
<section>
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
			@foreach ($students as $stucou)
			<tr>
				<td>{{ $stucou->psu_passport }}</td>
				<td>{{ $stucou->title }}{{ $stucou->firstname }}  {{ $stucou->lastname }}</td>
				<td>{{ $stucou->begin_date }}</td>
				<td>{{ $stucou->end_date }}</td>
				<td>{{ $stucou->email }}</td>

				<td>
					<a href="editStudentCouncil_{{ $stucou->id }}"><i class="Tiny material-icons ">mode_edit</i></a>
					<a href="studentCouncil/delete/{{ $stucou->id }}"><i class="Tiny material-icons " style="color: red">delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	
</section>
@endsection
@section('js')
<!-- dataTable js -->
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