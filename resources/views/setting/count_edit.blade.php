@extends('layouts.master')
@section('content')
<div class="rawcotton">
	<h3 class="text-center">Add Count</h3>
	<div class="col-md-6 col-md-offset-3">

		<form action="{{ route('update_count', $count->id) }}" method="post" >
			@csrf
		  <div class="form-group">
		    <label for="exampleInputEmail1">Count Name</label>
		    <input type="text" class="form-control" name="count" value="{{ $count->count }}">
		    @error('count')
			    <div class="text-danger">{{ $message }}</div>
			@enderror
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Description</label>
		    <input type="text" class="form-control" name="desctiption" value="{{ $count->desctiption }}">
		    @error('desctiption')
			    <div class="text-danger">{{ $message }}</div>
			@enderror
		  </div>

		  <button type="submit" class="btn btn-primary">Update</button>
		</form>

	</div>
</div>
@endsection