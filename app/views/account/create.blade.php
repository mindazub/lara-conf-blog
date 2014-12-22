@extends('layout.master')

@section('content')
	
<div class="container" style="margin: 50px 270px 150px 100px">

	<form action="{{ URL::route('account-create-post') }}" method="post">
		<table>
		<br><br>			
				<div class="field">	
					Email:
					<input type="text" name="email" {{ (Input::old('email')) ? 'value="' . e(Input::old('email')) . '"' : '' }}>
					@if($errors->first('email'))
						{{ $errors->first('email')}}
					@endif
				</div>
			
		<br>
		
				<div class="field">
					Username:
					<input type="text" name="username" {{ (Input::old('username')) ? 'value="' . e(Input::old('username')) . '"' : '' }}>
					@if($errors->first('username'))
						{{ $errors->first('username')}}
					@endif
					</div>
		
		<br>
		<div class="field">
			Password:
			<input type="text" name="password" {{ (Input::old('password')) ? 'value="' . e(Input::old('password')) . '"' : '' }}>
			@if($errors->first('password'))
				{{ $errors->first('password')}}
			@endif
		</div>
		<br>
		<div class="field">
			Password again:
			<input type="text" name="password_again" {{ (Input::old('password_again')) ? 'value="' . e(Input::old('password_again')) . '"' : '' }}>
			@if($errors->first('password_again'))
				{{ $errors->first('password_again')}}
			@endif
		</div>
		<br>


		<input type="submit" value="Create an account">
		</table>

		{{ Form::token()}}
	</form>
	
</div>
@stop