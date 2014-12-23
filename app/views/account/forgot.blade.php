
@extends('layout.master')

@section('content')

<div class="container" style="margin: 50px 270px 150px 100px">

<div class="col-md-6">
	<form role="form" action="{{ URL::route('account-forgot-password-post')}}" method="post">
		
		<div>
			<label for="email"> Email: </label>
			<input id="email" name="email" type="text" class="form-control" {{ (Input::old('email')) ? ' value="'. e(Input::old('email')) .'"' : ''}}>
			
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif

		</div>
		<br>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Recover">
		</div>
		{{Form::token()}}
	</form>
</div>
</div>

@stop