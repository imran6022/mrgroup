@extends('layouts.master')

@section('content')
<div class="rawcotton">
	<h3 class="text-center">Sales Information</h3>
	@if(session('success'))
	<div class="alert alert-success text-center">
		{{ session('success') }}
	</div>
	@endif
	<a href="{{ route('salesadd') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Sales</a>
	<table class="table table-bordered">
		<thead>
			<tr class="text-center">
				<th class="text-center">#</th>
				<th class="text-center">Party Name</th>
				<th class="text-center">Count</th>
				<th class="text-center">Date</th>
				<th class="text-center">Lbd</th>
				<th class="text-center">Rate</th>
				<th class="text-center">Amount</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($seles as $sele)
			<tr class="text-center">
				<td>{{ $loop->index +1 }}</td>
				<td>{{ $sele->Party->name }}</td>
				<td>{{ $sele->count->count }}</td>
				<td>{{ $sele->date }}</td>
				<td>{{ $sele->pound }}</td>
				<td>{{ $sele->rate }}</td>
				<td>{{ $sele->amount }}</td>
				<td>
					<div class="btn-group">
						<a href="{{ route('editSales', $sele->id) }}" class="btn btn-primary">Update</a>
						<a href="{{ route('deleteSale', $sele->id) }}" class="btn btn-danger deleteSale">Delete</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection