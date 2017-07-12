@extends('layout.master')

@section('content')
<div class="container">
		<h1 style="text-align: center;">{{$dish->title}}</h1>

		{{-- <a class="btn btn-default" href="{{ route('dishes.create') }}">Add new dishes</a> --}}

	<div class="row">
				<ul class="list-group col-md-6">
					<li class="list-group-item"><a href="#"><img class="img-responsive" src="{{ $dish->photo }}"></a></li>
					<li class="list-group-item">{{ substr($dish->description, 0, 200)}}</li>
					<li class="list-group-item">{{ $dish->price }}</li>
					<li class="list-group-item">{{ $dish->quantity }}</li>
					<a class="btn btn-success pull-left" href="{{ route('dishes.store', $dish->id) }}">Edit</a>
					<form class="form-group" action="{{route('dishes.delete', $dish->id)}}" method="GET">
						{{ csrf_field() }}
						<button class="btn btn-danger pull-left">Delete</button>
					</form>
				</ul>
	</div>
</div>
@endsection