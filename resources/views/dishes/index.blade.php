@extends('layout.master')

@section('content')
<div class="container">
		<h1 style="text-align: center;">Dishes menu</h1>

		<a class="btn btn-default" href="{{ route('dishes.create') }}">Add new dishes</a>

	<div class="row">
			@foreach($dishes as $dish)
				<ul class="list-group col-md-4">
					<li class="list-group-item list-group-item-success">Title: {{$dish->title}}</li>
					<li class="list-group-item"><a href="{{route('dishes.show', $dish->id)}}"><img class="img-responsive" src="{{ $dish->photo }}"></a></li>
					<li class="list-group-item">{{ substr($dish->description, 0, 200)}}</li>
					<li class="list-group-item">{{ $dish->price }}</li>
					<li class="list-group-item">{{ $dish->quantity }}</li>
					<li class="list-group-item">{{ $dish->menu->title }}</li>
					<a class="btn btn-success pull-left" href="{{ route('dishes.store', $dish->id) }}">Edit</a>
					<form class="form-group" action="{{route('dishes.delete', $dish->id)}}" method="GET">
						{{ csrf_field() }}
						<button class="btn btn-danger pull-left">Delete</button>
					</form>
				</ul>
			@endforeach
	</div>
</div>
@endsection