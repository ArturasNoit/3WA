@extends('layout.master')

@section('content')
<div class="container">
  <div class="row">
  	<table class="table table-condensed">
  		<tr>
  			<th>ID</th>
  			<th>Name</th>
  			<th>Surname</th>
  			<th>Date of birth</th>
  			<th>Phone number</th>
  			<th>E-mail</th>
  			<th>Address</th>
  			<th>City</th>
  			<th>Zip code</th>
  			<th>Country</th>
  			<th>Created at</th>
  			<th>Updated at</th>
  		</tr>

  		<tr>
  			<td>{{ $user->id }}</td>
  			<td>{{ $user->name }}</td>
  			<td>{{ $user->surname }}</td>
  			<td>{{ $user->birthday }}</td>
  			<td>{{ $user->phonenumber }}</td>
  			<td>{{ $user->email }}</td>
  			<td>{{ $user->address }}</td>
  			<td>{{ $user->city }}</td>
  			<td>{{ $user->zipcode }}</td>
  			<td>{{ $user->country }}</td>
  			<td>{{ $user->created_at }}</td>
  			<td>{{ $user->updated_at }}</td>
  			<td>
  			</td>
  		</tr>

  	</table>
  </div>
</div>

@endsection

