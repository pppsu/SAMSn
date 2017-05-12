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
			<h3>Organization Information</h3>
		</div>	
		<div class="row">
			<div class="col l1 m1 s12"><a href="addOrganization" class="btn waves-effect waves-light">add</a></div>
			
		</div>
	</div>
</section>
<section>
	<table id="example" class="mdl-data-table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Organizetion Name</th>
				<th>Adviser</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Organizetion Name</th>
				<th>Adviser</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
        	@foreach ($organization as $org)
			<tr>
				<td>{{ $org->org_name }}</td>
				<td>{{ $org->title }}{{ $org->firstname }}  {{ $org->lastname }}</td>
				<td>
					<a href="editOrganization_{{ $org->id }}"><i class="Tiny material-icons ">mode_edit</i></a>
					<a href="organizeation/delete/{{ $org->id }}"><i class="Tiny material-icons " style="color: red">delete</i></a>
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