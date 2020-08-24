@extends('backendtemplate')
@section('content')

<form id="education">
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
</form>


<form id="financial">
	<div class="container-fluid">
	<h2 class="d-inline-block py-3">Financial Info (Table)</h2>
	

	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Education Exp</th>
				<th>Accomodation Exp</th>
				<th>Utility Exp</th>
				<th>Monthly Income</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
			
			<tr>

				{{-- ($student->educationdetails); --}}
				<td>{{$i++}}</td>
				<td>{{$student->financials->education_exp}}</td>
				<td>{{$student->financials->accomodation_exp}}</td>
				<td>{{$student->financials->utility_exp}}</td>
				<td>{{$student->financials->monthly_income}}</td>
			</tr>
			
		</tbody>
	</table>

</div>
</form>


@endsection