@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Loan Create (Form)</h2>


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


			<form method="POST" action="{{route('loans.store')}}" enctype="multipart/form-data">
				@csrf
				
				<div class="form-group">
					<label>Amount</label>
					<input type="text" name="amount" class="form-control">
				</div>

				<div class="form-group">
					<label>Loantime</label>
					<input type="text" name="loantime" class="form-control">
				</div>

				<div class="form-group">
					<label>Date</label>
					<input type="text" name="date" class="form-control">
				</div>

				{{-- <div class="form-group">
					<label>Financial</label>
					<input type="text" name="financial" class="form-control">
				</div> --}}


				<div class="form-group">
						<label>Education Exp</label>
						<select name="financial1" class="form-control">
							<option>Choose....
								@foreach($financials as $financial)
									<option value="{{$financial->id}}">{{$financial->education_exp}}</option>
								@endforeach
							</option>	

						</select>
					</div>

				<div class="form-group">
						<label>Accomodation</label>
						<select name="financial2" class="form-control">
							<option>Choose....
								@foreach($financials as $financial)
									<option value="{{$financial->id}}">{{$financial->accomodation_exp}}</option>
								@endforeach
							</option>	

						</select>
					</div>
					<div class="form-group">
						<label>Utility</label>
						<select name="financial3" class="form-control">
							<option>Choose....
								@foreach($financials as $financial)
									<option value="{{$financial->id}}">{{$financial->utility_exp}}</option>
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