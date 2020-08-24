@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Loan List (Table)</h2>
	<a href="{{route('loans.create')}}" class="btn btn-success float-right">Add Loan</a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Date</th>
				<th>Loantime</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($loans as $loan)
			<tr>
				<td>{{$i++}}</td>
			
				<td>{{$loan->amount}}</td>
				<td>{{$loan->status}}</td>
				<td>{{$loan->date}}</td>
				<td>{{$loan->loantime}}</td>

				<td>
				<a href="{{route('loans.edit',$loan->id)}}" class="btn btn-warning">Edit</a>

				<form method="post" action="{{route('loans.destroy',$loan->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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