@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Loan Edit (Form / Old value)</h2>
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

			<form method="POST" action="{{route('loans.update',$loan->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group">
					<label>Amount</label>
					<input type="text" name="amount" class="form-control" value="{{$loan->amount}}">
				</div>

				<div class="form-group">
					<label>Date</label>
					<input type="text" name="date" class="form-control" value="{{$loan->date}}">
				</div>

				<div class="form-group">
					<label>Loantime</label>
					<input type="text" name="loantime" class="form-control" value="{{$loan->loantime}}">
				</div>

				<div class="form-group">
						<label>Financial</label>
						<select name="financial" class="form-control">
							<option>Choose....
								@foreach($financials as $financial)
									<option value="{{$financial->id}}"
										@if($financial->id == $loan->financial)
										{{'selected'}}
										@endif
										>{{$financial->education_exp}}</option>
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