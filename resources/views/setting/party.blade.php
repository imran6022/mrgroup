@extends('layouts.master')
@section('content')
<div class="rawcotton">
	<h3 class="text-center">Party Information</h3>
	@if(session('success')>0)
	<div class="alert alert-success text-center">
		@if(session())
			{{ session('success') }}	
		@endif
	</div>
	@endif
	<a href="{{ route('party_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Party</a>
	<table class="table table-bordered">
		<thead>
			<tr class="text-center">
				<th class="text-center">#</th>
				<th class="text-center">Party Name</th>
				<th class="text-center">Phone No</th>
				<th class="text-center">Address</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($partys as $party)
			
			<tr class="text-center">
				<td>{{ $loop->index +1 }}</td>	
				<td>{{ $party->name }}</td>	
				<td>{{ $party->mobile }}</td>	
				<td>{{ $party->address }}</td>	
				<td>
					<div class="btn btn-group">
						<a href="{{ route('edit_party', $party->id) }}" class="btn btn-primary">Edit</a>
						<a href="{{ route('delete_party', $party->id) }}" class="btn btn-danger del_party">Delete</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

