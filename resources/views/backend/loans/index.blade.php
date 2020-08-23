@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Loan List (Table)</h2>
	<a href="#" class="btn btn-success float-right">Add Loan</a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Amount</th>
				<th>Status</th>
				<th>Date</th>
				<th>Loantime</th>
				<th>financial</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($loans as $loan)
			{{-- <tr>
				<td>{{$i++}}</td>
			
				<td>{{$subcategory->name}}</td>

				<td>
				<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>

				<form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
					@csrf
					@method('DELETE')
					<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
				</form>
				
			</td>
			</tr> --}}
			@endforeach
				</tbody>
			</table>
		</div>
	
@endsection