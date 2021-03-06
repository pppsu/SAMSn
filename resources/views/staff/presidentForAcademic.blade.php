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
	<div >
		<div class="row">
			<h3>Vice President for Academic Affairs for Phuket Campus</h3>
		</div>	
		
		<div class="row">
			<div class="col l1 m1 s12"><a href="addPresidentForAcademic" class="btn">add</a></div>

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
        	@foreach ($staffs as $vpfa)
            <tr>
                <td>{{ $vpfa->psu_passport }}</td>
				<td>{{ $vpfa->title }}{{ $vpfa->firstname }}  {{ $vpfa->lastname }}</td>
				<td>{{ $vpfa->begin_date }}</td>
				<td>{{ $vpfa->end_date }}</td>
				<td>{{ $vpfa->email }}</td>
				<td>
					<a href="editPresidentForAcademic_{{$vpfa->id}}"><i class="Tiny material-icons ">mode_edit</i></a>
					<a href="presidentForAcademic/delete/{{$vpfa->id}}"><i class="Tiny material-icons " style="color: red">delete</i></a>
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