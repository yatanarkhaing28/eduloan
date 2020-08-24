@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Student List (Table)</h2>
	<a href="{{route('students.create')}}" class="btn btn-success float-right">Add Loan</a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Name</th>
				<th scope="col">Photo</th>
				<th scope="col">Fathername</th>
				<th scope="col">NrcNo</th>
				{{-- <th scope="col">State</th> --}}
				<th scope="col">City</th>
				<th scope="col">Phone No</th>
				<th scope="col">Action</th>
				
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
				{{-- <td>{{$student->state}}</td> --}}
				<td>{{$student->city}}</td>
				<td>{{$student->phoneno}}</td>

				<td>
				
				<a href="{{route('students.edit',$student->id)}}" class="btn btn-warning btn-sm">Edit</a>
				<form method="post" action="{{route('students.destroy',$student->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block btn-sm">
					@csrf
					@method('DELETE')
					<a href="{{route('students.show',$student->id)}}" class="btn btn-info d-inline-block btn-sm">Detail</a>

					{{-- <a href="{{route('students.show',$student->id)}}" class="btn btn-info d-inline-block btn-sm" id="financial">Financial Info</a> --}}
					<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger btn-sm">
				</form>
				
			</td>
			</tr>
			@endforeach
				</tbody>
			</table>
		</div>
	
	
@endsection