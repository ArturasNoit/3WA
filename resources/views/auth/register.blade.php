@extends('layout.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<form class="form-horizontal" method="POST" action="{{ route('register') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

								@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
							<label for="surname" class="col-md-4 control-label">Surname</label>

							<div class="col-md-6">
								<input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}"  autofocus>

								@if ($errors->has('surname'))
									<span class="help-block">
										<strong>{{ $errors->first('surname') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
							<label for="birthday" class="col-md-4 control-label">Date of birth</label>

							<div class="col-md-6">
								<input id="birthday" type="text" class="form-control" name="birthday" value="{{ old('birthday') }}" placeholder="YYYY-MM-DD" autofocus>

								@if ($errors->has('birthday'))
									<span class="help-block">
										<strong>{{ $errors->first('birthday') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
							<label for="phonenumber" class="col-md-4 control-label">Phone number</label>

							<div class="col-md-6">
								<input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}"  autofocus>

								@if ($errors->has('phonenumber'))
									<span class="help-block">
										<strong>{{ $errors->first('phonenumber') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control" name="password" >

								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<label for="password-confirm" class="col-md-4 control-label">Password repeat</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
							</div>
						</div>

						<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
							<label for="address" class="col-md-4 control-label">Address</label>

							<div class="col-md-6">
								<input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}"  autofocus>

								@if ($errors->has('address'))
									<span class="help-block">
										<strong>{{ $errors->first('address') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
							<label for="city" class="col-md-4 control-label">City</label>

							<div class="col-md-6">
								<input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}"  autofocus>

								@if ($errors->has('city'))
									<span class="help-block">
										<strong>{{ $errors->first('city') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
							<label for="zipcode" class="col-md-4 control-label">Zip code</label>

							<div class="col-md-6">
								<input id="zipcode" type="text" class="form-control" name="zipcode" value="{{ old('zipcode') }}"  autofocus>

								@if ($errors->has('zipcode'))
									<span class="help-block">
										<strong>{{ $errors->first('zipcode') }}</strong>
									</span>
								@endif
							</div>
						</div>


						<div class="form-group">
							<label for="country" class="col-md-4 control-label">Country</label>
							<div class="col-md-6">
								<select id="country" name="country" class="form-control">
									<option>Lietuva</option>
									<option>Latvija</option>
									<option>Estija</option>
									<option>Lenkija</option>
									<option>Baltarusija</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
