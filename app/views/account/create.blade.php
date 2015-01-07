@extends('layout.master')

@section('content')
	
<div class="container" style="margin: 50px 270px 150px 100px">

	<div class="col-sm-6">
	<form role="form" action="{{ URL::route('account-create-post') }}" method="post">
		<table>
		<br><br>			
				<div>	
					<!-- <label for="email"> Email: </label> -->
					<input id="email" name="email" type="text" placeholder="Email" class="form-control" {{ (Input::old('email')) ? 'value="' . e(Input::old('email')) . '"' : '' }}>
					@if($errors->first('email'))
						{{ $errors->first('email')}}
					@endif
				</div>
			
		<br>
		
				<div>
					<!-- <label for="username">Username: </label> -->
					<input id="username" name="username" type="text" placeholder="Username" class="form-control" {{ (Input::old('username')) ? 'value="' . e(Input::old('username')) . '"' : '' }}>
					@if($errors->first('username'))
						{{ $errors->first('username')}}
					@endif
					</div>
		
		<br>
		<div>
			<!-- <label for="password">Password:</label> -->
			<input id="password" type="password" class="form-control" placeholder="Password" name="password" {{ (Input::old('password')) ? 'value="' . e(Input::old('password')) . '"' : '' }}>
			@if($errors->first('password'))
				{{ $errors->first('password')}}
			@endif
		</div>
		<br>
		<div class="field">
			<!-- <label for="password">Password again:</label> -->
			<input id="password_again" type="password" class="form-control" placeholder="Password again"name="password_again" {{ (Input::old('password_again')) ? 'value="' . e(Input::old('password_again')) . '"' : '' }}>
			@if($errors->first('password_again'))
				{{ $errors->first('password_again')}}
			@endif
		</div>
		<br>


			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Create an Account">
			</div>
		</table>

		{{ Form::token()}}
	</form>
	</div>
</div>
@stop