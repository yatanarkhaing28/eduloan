@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Student List (Table)</h2>
	<a href="{{route('students.create')}}" class="btn btn-success float-right">Add Loan</a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Fathername</th>
				<th>NrcNo</th>
				<th>State</th>
				<th>City</th>
				<th>Phone No</th>
				<th>Action</th>
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($students as $student)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$student->name}}</td>
				<td><img src="{{asset($student->photo)}}" width="80" height="50"></td>
				<td>{{$student->fathername}}</td>
				<td>{{$student->nrcno}}</td>
				<td>{{$student->state}}</td>
				<td>{{$student->city}}</td>
				<td>{{$student->phoneno}}</td>

				<td>
				

				<form method="post" action="{{route('students.destroy',$student->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
					@csrf
					@method('DELETE')
					<a href="{{route('students.show',$student->id)}}" class="btn btn-warning">
						Edu Detail

					</a>
					<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
				</form>
				
			</td>
			</tr>
			@endforeach
				</tbody>
			</table>
		</div>
	
@endsection