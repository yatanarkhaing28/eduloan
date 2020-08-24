@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Financial Create (Form)</h2>


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


			<form method="POST" action="{{route('financials.store')}}" enctype="multipart/form-data">
				@csrf
				
				<div class="form-group">
					<label>Education Exp</label>
					<input type="text" name="educationexp" class="form-control">
				</div>

				<div class="form-group">
					<label>Accomodation Exp</label>
					<input type="text" name="accomodationexp" class="form-control">
				</div>

				<div class="form-group">
					<label>Utility Exp</label>
					<input type="text" name="utilityexp" class="form-control">
				</div>

				<div class="form-group">
					<label>Monthly Income</label>
					<input type="text" name="monthlyincome" class="form-control">
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