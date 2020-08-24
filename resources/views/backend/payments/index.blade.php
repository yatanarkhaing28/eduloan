@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Payment List (Table)</h2>
	<a href="{{route('payments.create')}}" class="btn btn-success float-right">Add Payment</a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Installment</th>
				<th>Balance</th>
				<th>Payment Date</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($payments as $payment)
			<tr>
				<td>{{$i++}}</td>
			
				<td>{{$payment->installment}}</td>
				<td>{{$payment->balance}}</td>
				<td>{{$payment->paymentdate}}</td>
				

				<td>
				<a href="{{route('payments.edit',$payment->id)}}" class="btn btn-warning">Edit</a>

				<form method="post" action="{{route('payments.destroy',$payment->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
					@csrf
					@method('DELETE')
					<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
				</form>
				
			</td>
			</tr>
			@endforeach
				</tbody>
			</table>
		</div>
	
@endsection