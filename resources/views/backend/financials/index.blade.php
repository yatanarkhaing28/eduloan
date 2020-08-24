@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Financial Info (Table)</h2>
	<a href="{{route('financials.create')}}" class="btn btn-success float-right">Add Financial Info</a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Education Exp</th>
				<th>Accomodation Exp</th>
				<th>Utility Exp</th>
				<th>Monthly Income</th>
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($financials as $financial)
			<tr>
				<td>{{$i++}}</td>
			
				<td>{{$financial->education_exp}}</td>
				<td>{{$financial->accomodation_exp}}</td>
				<td>{{$financial->utility_exp}}</td>
				<td>{{$financial->monthly_income}}</td>

				{{-- <td>
				<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>

				<form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
					@csrf
					@method('DELETE')
					<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
				</form>
				
			</td> --}}
			</tr>
			@endforeach
				</tbody>
			</table>
		</div>
	
@endsection	