@extends('layout.master')

@section('content')


@if(Session::has('success'))
			<div class="container" style="width: 100%;">
				<div class="alert alert-success alert-dismisable">{{ Session::get('success') }}</div>
			</div>
		@elseif (Session::has('fail'))
			<div class="container" style="width: 100%;">
				<div class="alert alert-danger alert-dismisable">{{ Session::get('fail') }}</div>
			</div>
		@endif

		

<!-- <div class="container" style="background-color: #00BFFF; "> -->
<div class="container" style="background-color: #00BFFF; width: 100%; margin-bottom: 15px;">
		<div class="col-xs-12 col-md-6" style=" background-color: #f0f0f0; margin: 10px; padding: 10px;">

			<div id="upload_form" style="background-color: #fff; margin: 10px; padding: 10px;">

						{{ Form::open( array('url'=> 'upload', 'files'=> true)) }}
								<br>
								{{ Form::label('Upload something...')}}
								<br><br>
								{{ Form::file('image') }}
								<br><br>
								{{ Form::submit('Upload')}}
						{{ Form::close() }}
			</div>
	</div> 

	

</div> <!-- end of container -->

{{ Form::close() }}


<div class="container" style="background-color: #00BFFF; width: 100%; margin-bottom: 15px;">
		<h1>Uploaded files:</h1>
			<ul>
				<li><a href="#">Failas 1</a></li>
				<li><a href="#">Failas 2</a></li>
				<li><a href="#">Failas 3</a></li>
				<li><a href="#">Failas 4</a></li>
			</ul>
</div> <!-- end of container -->



@stop

