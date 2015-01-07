
@extends('layout.master')

@section('content')
	
	<h1> {{ Auth::user()->username }} profile page | <a href="{{ URL::route('edit-profile') }}">Edit</a></h1>  
		
		<br>
	<form role="form" >
			<div>
				<label for="username">Username: </label>
				<label>{{ Auth::user()->username }}</label>							
			</div>
			<br>
			<div>
				<label for="email"> Email: </label>
				<label>{{ Auth::user()->email }}</label>							
			</div>
			<br>						
			{{ Form::token() }}
	</form>

@stop