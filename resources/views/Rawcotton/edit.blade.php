@extends('layouts.master')
@section('content')
<div class="rawcotton">
	<h3 class="text-center">Add Cotton Purchases</h3>
	@if($errors->any())		
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p class="text-center">{{ $error }}</p>
			@endforeach
		</div>		
	@endif
	
	<div class="col-md-6 col-md-offset-3">
		<form action="{{ route('rawCottonPurchaseUpdate', $rowcotton->id) }}" method="post">
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Party Name</label>
		    <select name="party" id="" class="form-control">
		    	<option value="">Select Party</option>
		    	@foreach(App\Party::get() as $party)
		    		<option value="{{ $party->id }}" {{ $party->id == $rowcotton->party? 'selected' : '' }}>{{ $party->name }}</option>
		    	@endforeach
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Purchases Date</label>
		    <input type="date" name="date" id="datepicker" class="form-control" value="{{ $rowcotton->date }}">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Raw Cotton Type</label>
		    <select name="type" id="count" class="form-control">
		    	<option value="">Select Count</option>
		    	@foreach(App\RowcottonType::get() as $rawcotton)
		    		<option value="{{ $rawcotton->id }}" {{ $rawcotton->id == $rowcotton->type ? 'selected' : '' }}>{{ $rawcotton->name }}</option>
		    	@endforeach
		    </select>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Pound/LBS</label>
		    <input type="number" name="pound" class="form-control" id="pound" value="{{ $rowcotton->pound }}">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Rate</label>
		    <input type="number" name="rate" class="form-control" id="rate" value="{{ $rowcotton->rate }}">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Amount</label>
		    <input type="number" name="amount" id="amount" class="form-control" value="{{ $rowcotton->amount }}">
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
@endsection



