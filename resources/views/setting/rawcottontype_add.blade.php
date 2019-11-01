@extends('layouts.master')
@section('content')
<div class="rawcotton">
	<h3 class="text-center">Add Rawcotton Type</h3>
	<div class="col-md-6 col-md-offset-3">

		<form action="{{ route('create_rowtype') }}" method="post" >
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Enter Count Name">
		    @error('name')
			    <div class="text-danger">{{ $message }}</div>
			@enderror
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Description</label>
		    <input type="text" class="form-control" name="desctiption" placeholder="Enter Description">
		    @error('desctiption')
			    <div class="text-danger">{{ $message }}</div>
			@enderror
		  </div>

		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>
</div>
@endsection