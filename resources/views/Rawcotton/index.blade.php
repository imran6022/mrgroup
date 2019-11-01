@extends('layouts.master')
@section('content')
<div class="rawcotton">
	<h3 class="text-center">Raw Cotton Purchases Information</h3>
	@if(session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
	@endif
	<a href="{{ route('rawcotpurchaseAdd') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Raw Cotton Purchases</a>
	<table class="table table-bordered">
		<thead>
			<tr class="text-center">
				<th class="text-center">#</th>
				<th class="text-center">Party Name</th>
				<th class="text-center">Type</th>
				<th class="text-center">Date</th>
				<th class="text-center">Lbd</th>
				<th class="text-center">Rate</th>
				<th class="text-center">Amount</th>
				<th class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($rawcottons as $rawcotton)
			<tr class="text-center">
				<td>{{ $loop->index +1 }}</td>
				<td>{{ $rawcotton->Party->name }}</td>
				<td>{{ $rawcotton->RawType->name }}</td>
				<td>{{ $rawcotton->date }}</td>
				<td>{{ $rawcotton->pound }}</td>
				<td>{{ $rawcotton->rate }}</td>
				<td>{{ $rawcotton->amount }}</td>
				<td>
					<div class="btn-group">
						<a href="{{ route('rawCottonEdit', $rawcotton->id) }}" class="btn btn-primary">Update</a>
						<a href="{{ route('rawCottonDelete', $rawcotton->id) }}" class="btn btn-danger RCPDlt">Delete</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

