@extends('layout.master')
{{-- Viena forma tinkama naujos patiekalo sukūrimui ir editinimui --}}
@section('content')
	@if(isset($dish))
	<h1 style="text-align: center;">Edit dish with a name: {{$dish->title}}</h1>
	@else
	<h1 style="text-align: center;">Create new Dish</h1>
	@endif
	<div class="container">
		@if(isset($dish))
		<form class="form-group" action="{{route('dishes.update', $dish->id)}}" method="POST" >
		@else
		<form class="form-group" action="{{route('dishes.createDish')}}" method="POST">
		@endif

			{{ csrf_field() }}

			<fieldset>
				<la	bel for="title">Title</label>
				@if(isset($dish))
				<input value="{{ $dish->title }}" class="form-control" type="text" name="title">
				@else
				<input class="form-control" type="text" name="title">
				@endif

				<label for="photo">Photo</label>
				@if(isset($dish))
				<input value="{{ $dish->photo }}" class="form-control" type="text" name="photo">
				@else
				<input class="form-control" type="text" name="photo">
				@endif

				<label for="description">Description</label>
				@if(isset($dish))
				<textarea id="mytextarea" class="form-control" name="description">{{$dish->description}}</textarea>
				@else
				<textarea id="mytextarea" class="form-control" name="description"></textarea>
				@endif

				<label for="price">Price</label>
				@if(isset($dish))
				<input value="{{$dish->price}}" class="form-control" type="text" name="price">
				@else
				<input class="form-control" type="text" name="price">
				@endif

				<label for="quantity">Quantity</label>
				@if(isset($dish))
				<input value="{{$dish->quantity}}" class="form-control" type="text" name="quantity">
				@else
				<input class="form-control" type="text" name="quantity">
				@endif

				<label for="quantity">Menu ID (laikinai)</label>
				@if(isset($dish))
				<input value="{{$dish->menu_id}}" class="form-control" type="text" name="menu_id">
				@else
				<input class="form-control" type="text" name="menu_id">
				@endif

				<button class="btn btn-success" type="submit">{{ isset($dish) ? 'Edit' : 'Add'}}</button>
			</fieldset>
		</form>
		@if(isset($dish))
		<form class="form-group" action="{{route('dishes.delete', $dish->id)}}" method="GET">
		{{ csrf_field() }}
			<button class="btn btn-danger">Delete</button>
		</form>
		@endif
	</div>
@endsection