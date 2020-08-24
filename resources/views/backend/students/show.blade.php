@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block py-3">Education Detail (Table)</h2>
	

	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>RollNo:</th>
				<th>University:</th>
				<th>Year</th>
				<th>Semester:</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			
			<tr>

				{{-- ($student->educationdetails); --}}
				<td>{{$i++}}</td>
				<td>{{$student->educationdetails->rollno}}</td>
				<td>{{$student->educationdetails->university}}</td>
				<td>{{$student->educationdetails->year}}</td>
				<td>{{$student->educationdetails->semester}}</td>
			</tr>
			
		</tbody>
	</table>

</div>

@endsection