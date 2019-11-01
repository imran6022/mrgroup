@extends('layouts.master')
@section('content')
<div class="rawcotton">
	<h3 class="text-center">Count Information</h3>
	@if(session('success')>0)
	<div class="alert alert-success text-center">
		@if(session())
			{{ session('success') }}	
		@endif
	</div>
	@endif
	<a href="{{ route('count_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Count</a>
	<table class="table table-bordered">
		<thead>
			<tr class="text-center">
				<th class="text-center">#</th>
				<th class="text-center">Count Name</th>
				<th class="text-center">Description</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($counts as $count)
			<tr class="text-center">
				<td>{{ $loop->index +1 }}</td>	
				<td>{{ $count->count }}</td>	
				<td>{{ $count->desctiption }}</td>	
				<td>
					<div class="btn btn-group">
						<a href="{{ route('edit_count', $count->id) }}" class="btn btn-primary">Edit</a>
						<a href="{{ route('delete_count', $count->id) }}" class="btn btn-danger del">Delete</a>
					</div>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@endsection