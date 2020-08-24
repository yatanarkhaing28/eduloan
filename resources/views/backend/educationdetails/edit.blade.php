@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Education Edit (Form / Old value)</h2>
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

			<form method="POST" action="{{route('educationdetails.update',$educationdetail->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label>Roll No</label>
					<input type="text" name="rollno" class="form-control" value="{{$educationdetail->rollno}}">
				</div>

				

				<div class="form-group">
					<label>University</label>
					<input type="text" name="university" class="form-control" value="{{$educationdetail->university}}">
				</div>

				<div class="form-group">
					<label>Year</label>
					<input type="text" name="year" class="form-control" value="{{$educationdetail->year}}">
				</div>

				<div class="form-group">
					<label>Semester</label>
					<input type="text" name="semester" class="form-control" value="{{$educationdetail->semester}}">
				</div>

				<div class="form-group">
						<label>Student</label>
						<select name="student" class="form-control">
							<option>Choose....
								@foreach($students as $student)
									<option value="{{$student->id}}"
										@if($student->id == $educationdetail->student_id)
										{{'selected'}}
										@endif
										>{{$student->name}}</option>
								@endforeach
							</option>	

						</select>
					</div>

				<input type="submit" name="" value="Update" class="btn btn-outline-primary">
			</form>
		</div>
	</div>
</div>
@endsection