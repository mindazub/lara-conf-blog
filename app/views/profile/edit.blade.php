@extends('layout.master')

@section('content')

	<h1><a href="{{ URL::route('profile-user') }}">{{ Auth::user()->username }} profile page </a> | Edit </h1>  

	

<form role="form" method="post" action="{{ URL::route('edit-profile-post') }}">
						<br>
						<div>
							<label for="username">Username: </label>
							<input id="username" name="username" type="text" class="form-control" value="{{ Auth::user()->username }}">
							@if($errors->has('username'))
								{{ $errors->first('username') }}
							@endif
						</div>
						<br>
						<div>
							<label for="email"> Email: </label>
							<input id="email" name="email" type="text" class="form-control" value="{{ Auth::user()->email }}">
							@if($errors->has('email'))
								{{ $errors->first('email') }}
							@endif
						</div>
						<br>
						<div>
							<label for="pass1">If you want to change something, enter your password: </label>
							<input id="pass1" name="pass1" type="password" class="form-control">									
							@if($errors->has('pass1'))
								{{ $errors->first('pass1') }}
							@endif
						</div>
										
						<br>
						{{ Form::token() }}
						<div class="form-group">
							<input type="submit" value="Save">
						</div>

				</form>


@stop