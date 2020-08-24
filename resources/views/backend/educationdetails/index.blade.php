@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Education List (Table)</h2>
	<a href="{{route('educationdetails.create')}}" class="btn btn-success float-right">Add Education Detail</a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>RollNo</th>
				<th>University</th>
				<th>Year</th>
				<th>Semester</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($educationdetails as $educationdetail)
			<tr>
				<td>{{$i++}}</td>
			
				<td>{{$educationdetail->rollno}}</td>
				<td>{{$educationdetail->university}}</td>
				<td>{{$educationdetail->year}}</td>
				<td>{{$educationdetail->semester}}</td>

				<td>
				<a href="{{route('educationdetails.edit',$educationdetail->id)}}" class="btn btn-warning">Edit</a>

				<form method="post" action="{{route('educationdetails.destroy',$educationdetail->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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