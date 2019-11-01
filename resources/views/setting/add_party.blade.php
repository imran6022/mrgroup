@extends('layouts.master')
@section('content')
<div class="rawcotton">
	<h3 class="text-center">Add Party</h3>
	<div class="col-md-6 col-md-offset-3">
		<div id="messages" class="text-danger text-center"></div>
		<form method="post" action="{{ route('create_party') }}">
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Party Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Enter Party Name">
		    @error('name')
			    <div class="text-danger">{{ $message }}</div>
			@enderror
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Mobile No</label>
		    <input type="text" class="form-control" name="mobile" placeholder="Enter Party Name">
		    @error('mobile')
			    <div class="text-danger">{{ $message }}</div>
			@enderror
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Address</label>
		    <textarea name="address" class="form-control" cols="60" rows="5"></textarea>
		    @error('address')
			    <div class="text-danger">{{ $message }}</div>
			@enderror
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</div>
@endsection


