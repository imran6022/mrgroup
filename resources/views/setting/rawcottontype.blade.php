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
	<a href="{{ route('rawcottontype_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Rawcotton Type</a>
	<table class="table table-bordered">
		<thead>
			<tr class="text-center">
				<th class="text-center">#</th>
				<th class="text-center">name</th>
				<th class="text-center">Description</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($rowcottonTypes as $rowcottonType)
			<tr class="text-center">
				<td>{{ $loop->index +1 }}</td>
					<td>{{ $rowcottonType->name }}</td>
					<td>{{ $rowcottonType->desctiption }}</td>
				<td>
					
					<div class="btn btn-group">
						<a href="" class="btn btn-primary">Edit</a>
						<a href="" class="btn btn-danger del">Delete</a>
					</div>
				</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection