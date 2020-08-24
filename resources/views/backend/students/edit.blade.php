@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Student Edit (Form / Old value)</h2>
	<div class="row">
		<div class="offset-md-2 col-md-8">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<form method="POST" action="{{route('students.update',$student->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" value="{{$student->name}}">
				</div>

				<div class="form-group">
					<label>Photo</label>
					<input type="file" name="photo" class="form-control-file">
					<img src="{{asset($student->photo)}}" width="80" height="50">
					<input type="hidden" name="oldphoto" value="{{$student->photo}}">
				</div>

				<div class="form-group">
					<label>Fathername</label>
					<input type="text" name="fathername" class="form-control" value="{{$student->fathername}}">
				</div>

				<div class="form-group">
					<label>NrcNo</label>
					<input type="text" name="nrcno" class="form-control" value="{{$student->nrcno}}">
				</div>

				<div class="form-group">
					<label>State</label>
					<input type="text" name="state" class="form-control" value="{{$student->state}}">
				</div>

				<div class="form-group">
					<label>City</label>
					<input type="text" name="city" class="form-control" value="{{$student->city}}">
				</div>

				<div class="form-group">
					<label>Phone No</label>
					<input type="text" name="phoneno" class="form-control" value="{{$student->phoneno}}">
				</div>

				<input type="submit" name="" value="Update" class="btn btn-outline-primary">
			</form>
		</div>
	</div>
</div>
@endsection