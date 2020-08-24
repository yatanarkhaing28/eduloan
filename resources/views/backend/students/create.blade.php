@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Student Create (Form)</h2>


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


			<form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">
				@csrf
				
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<label>Photo</label>
					<input type="file" name="photo" class="form-control">
				</div>

				<div class="form-group">
					<label>Fathername</label>
					<input type="text" name="fathername" class="form-control">
				</div>

				<div class="form-group">
					<label>NrcNo</label>
					<input type="text" name="nrcno" class="form-control">
				</div>

				<div class="form-group">
					<label>State</label>
					<input type="text" name="state" class="form-control">
				</div>

				<div class="form-group">
					<label>City</label>
					<input type="text" name="city" class="form-control">
				</div>

				<div class="form-group">
					<label>PhoneNo</label>
					<input type="text" name="phoneno" class="form-control">
				</div>


				{{-- <div class="form-group">
						<label>Financial</label>
						<select name="financial" class="form-control">
							<option>Choose....
								@foreach($financials as $financial)
									<option value="{{$financial->id}}">{{$financial->educationexp}}</option>
								@endforeach
							</option>	

						</select>
					</div> --}}
				
				<input type="submit" name="" value="Create" class="btn btn-outline-primary">
			</form>
		</div>
	</div>
</div>
@endsection