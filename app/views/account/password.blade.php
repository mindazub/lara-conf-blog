@extends('layout.master')

@section('content')


<!-- <div class="container" style="margin: 50px 270px 150px 100px"> -->
<!-- <div class="container" style="margin: 50px 270px 150px 100px"> -->
	 <form role="form" action="{{ URL::route('account-change-password-post')}}" method="post">
	 	
	 	<div>
	 		<label>Old password:</label> 
	 		<input type="password" name="old_password" class="form-control"></input>
	 		@if($errors->has('old_password'))
	 			{{ $errors->first('old_password') }}
	 		@endif
	 	</div>
	 	<div>
	 		<label>New password:</label>
	 		<input type="password" name="password" class="form-control"></input>
	 		@if($errors->has('password'))
	 			{{ $errors->first('password') }}
	 		@endif
	 	</div>
	 	<div>
	 		<label>New password again:</label>
	 		<input type="password" name="password_again" class="form-control"></input>
	 		@if($errors->has('password_again'))
	 			{{ $errors->first('password_again') }}
	 		@endif
	 	</div>

	 	<input type="submit" value="Change password">
	 	{{Form::token()}}
	 </form>
<!-- </div> -->
@stop