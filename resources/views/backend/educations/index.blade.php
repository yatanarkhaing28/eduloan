@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Education List (Table)</h2>
	<a href="{{route('educations.create')}}" class="btn btn-success float-right">Add Education Detail</a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>RollNo</th>
				<th>University</th>
				<th>Year</th>
				<th>Semester</th>
				
			</tr>
		</thead>
		<tbody>

			@php $i=1 @endphp
			@foreach($educations as $education)
			<tr>
				<td>{{$i++}}</td>
			
				<td>{{$education->rollno}}</td>
				<td>{{$education->university}}</td>
				<td>{{$education->year}}</td>
				<td>{{$education->semester}}</td>

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