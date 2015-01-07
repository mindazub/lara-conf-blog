@extends('layout.master')

@section('content')
	

<div class="container" style="margin: 50px 270px 150px 100px">

<div class="col-md-6">
	<form role="form" id="login" action="{{ URL::route('account-sign-in-post')}}" method="post">
		<table>
		<tr>			
		<div>
			<!-- <label for="email"> Email: </label> -->
			 <input id ="email" class="form-control" placeholder="Email" type="text" name="email" {{ (Input::old('email')) ? 'value="' . e(Input::old('email')) . '"' : '' }}>
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
		</div>
		</tr>

		<br>

		<tr>
		<div>
			<!-- <label for="password"> Password: </label> -->
			<input id="password" class="form-control" placeholder="Password"  type="password" name="password">
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
		</div>
		</tr>

		<tr>

		<br>
		
		<div>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">
				Remember me
			</label>
		</div>

		<br>

		</tr>
		

		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Sign in">
		</div>

		</table>
		{{Form::token()}}
	</form>
</div>
</div>
@stop