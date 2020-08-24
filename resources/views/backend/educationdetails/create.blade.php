@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Education Create (Form)</h2>


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


			<form method="POST" action="{{route('educationdetails.store')}}" enctype="multipart/form-data">
				@csrf
				
				<div class="form-group">
					<label>RollNo</label>
					<input type="text" name="rollno" class="form-control">
				</div>

				<div class="form-group">
					<label>University</label>
					<input type="text" name="university" class="form-control">
				</div>

				<div class="form-group">
					<label>Year</label>
					<input type="text" name="year" class="form-control">
				</div>

				<div class="form-group">
					<label>Semester</label>
					<input type="text" name="semester" class="form-control">
				</div>

				<div class="form-group">
						<label>Student</label>
						<select name="student" class="form-control">
							<option>Choose....
								@foreach($students as $student)
									<option value="{{$student->id}}">{{$student->name}}</option>
								@endforeach
							</option>	

						</select>
					</div>
				
				<input type="submit" name="" value="Create" class="btn btn-outline-primary">
			</form>
		</div>
	</div>
</div>
@endsection