@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Payment Edit(Form with Old Values)</h2>
	@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
	@endif
		<form method="POST" action="{{route('payments.update',$payment->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		
		<div class="form-group">
			<label>Installment</label>
			<input type="text" name="installment" class="form-control" value="{{$payment->installment}}">
		</div>
		<div class="form-group">
			<label>Balance</label>
			<input type="text" name="balance" class="form-control" value="{{$payment->balance}}">
		</div>
		<div class="form-group">
			<label>Payment Date</label>
			<input type="text" name="paymentdate" class="form-control" value="{{$payment->paymentdate}}">
		</div>
		<div class="form-group">
			<label>Loan</label>
			<select name="loan" class="form-control">
				@foreach($loans as $loan)

				<option  value="{{$loan->id}}"
					@if($loan->id==$payment->loan_id)
					{{'selected'}}
					@endif
					>{{$loan->amount}}</option>
					@endforeach


			</select>

		</div>

		<input type="submit" value="Update" class="btn btn-outline-primary">

	</form>
</div>
@endsection