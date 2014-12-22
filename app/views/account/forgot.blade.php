
@extends('layout.master')

@section('content')

<div class="container" style="margin: 50px 270px 150px 100px">


	<form action="{{ URL::route('account-forgot-password-post')}}" method="post">
		
		<div class="field">
			Email: <input type="text" name="email" {{ (Input::old('email')) ? ' value="'. e(Input::old('email')) .'"' : ''}}>
			
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif

		</div>
		<input type="submit" value="Recover">
		{{Form::token()}}
	</form>

</div>

@stop