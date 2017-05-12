@extends('layout.staff_layout')
@section('title')
Staff
@endsection
@section('css')
<!-- dataTable css -->
<link rel="stylesheet" href="data_table/material.min.css">
<link rel="stylesheet" href="data_table/dataTables.material.min.css">
@endsection
@section('content')

<section>
	<div >
		<div class="row">
			<h3>Head of Student Affairs Division Information</h3>
		</div>	
		
		<div class="row">
			<div class="col l1 m1 s12"><a href="addHeadOfStudentAffairs" class="btn">add</a></div>

			<div class="col l6 m6 s12 offset-l4	">
				<div class="input-field" style="">
					
				</div>
			</div>
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
        	@foreach ($staffs as $hosad)
            <tr>
                <td>{{ $hosad->psu_passport }}</td>
				<td>{{ $hosad->title }}{{ $hosad->firstname }}  {{ $hosad->lastname }}</td>
				<td>{{ $hosad->begin_date }}</td>
				<td>{{ $hosad->end_date }}</td>
				<td>{{ $hosad->email }}</td>
				<td>
				<a href="editHeadOfStudentAffairs_{{$hosad->id}}"><i class="Tiny material-icons ">mode_edit</i></a>
				<a href="headOfAffairs/delete/{{$hosad->id}}"><i class="Tiny material-icons " style="color: red">delete</i></a>
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