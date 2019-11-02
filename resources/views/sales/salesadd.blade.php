@extends('layouts.master')
@section('content')
<div class="rawcotton">
	<h3 class="text-center">Sales Information</h3>
	@if($errors->any())		
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p class="text-center">{{ $error }}</p>
			@endforeach
		</div>		
	@endif
	
	<div class="col-md-6 col-md-offset-3">
		<form action="{{ route('SalesCreate') }}" method="post">
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Party Name</label>
		    <select name="party_id" id="" class="form-control">
		    	<option value="">Select Party</option>
		    	@foreach(App\Party::get() as $party)
		    		<option value="{{ $party->id }}">{{ $party->name }}</option>
		    	@endforeach
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Sales Date</label>
		    <input type="date" name="date" id="datepicker" class="form-control" placeholder="Enter email">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Yarn Type</label>
		    <select name="count_id" id="count_id" class="form-control">
		    	<option value="">Select Count</option>
		    	@foreach(App\count::get() as $count)
		    		<option value="{{ $count->id }}">{{ $count->count }}</option>
		    	@endforeach
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Pound/LBS</label>
		    <input type="number" name="pound" class="form-control" id="pound" placeholder="Enter rate">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Rate</label>
		    <input type="float" name="rate" class="form-control" id="rate" placeholder="Enter rate">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Amount</label>
		    <input type="number" name="amount" id="amount" class="form-control" aria-describedby="emailHelp" placeholder="Enter Amount">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection


