@extends('layout.master')

@section('content')
	

<div class="container" style="margin: 50px 270px 150px 100px">


	<form id="login" action="{{ URL::route('account-sign-in-post')}}" method="post">
		<table>
		<tr>	
		<div class="field">
			Email: <input type="text" name="email" {{ (Input::old('email')) ? 'value="' . e(Input::old('email')) . '"' : '' }}>
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
		</div>
		</tr>

		<tr>
		<div class="field">
			Password: <input type="password" name="password">
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>
		</tr>

		<tr>
		<div class="field">
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">
				Remember me
			</label>
		</div>
		</tr>
		

		<input type="submit" value="Sign In">

		</table>
		{{Form::token()}}
	</form>

</div>
@stop