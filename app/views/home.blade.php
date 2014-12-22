@extends('layout.master')

@section('title') ECT-2015 @stop

@section('content')

	<!-- <h1>The blog with Faker</h1> -->
	

	<!-- <div class="text-center">
			<ul style="clear:both; display:inline-block; width:100%; margin: 0px !important;">
				{{ $posts->links() }}
			</ul>
	</div> -->

	@if(Auth::check())
		<div class="jumbotron">
			<h1> Blog with Faker!</h1>
			<h2>The conference Proceedings ECT-2015</h2>

		</div>
	@else

		<div class="jumbotron">
			<h1> Not Connected!</h1>
			<h2>Please log in of sign up!</h2>

		</div>
		


	@endif



		@if($posts->count())

				@foreach($posts as $post)

		<div class="row">

  <div class="container">
      <div class="panel panel-default">
        <!-- <img src="img/..."> -->
        
        <div class="container">

          <div class="col-md-2" style="margin-left:-10px; margin-top:55px;">
            
            <img src="img/{{ e($post->picName) }}">
            <!-- {{ HTML::image('img/pirmas.jpg', $alt="pradinis") }} -->
          </div>
          
              <div class="col-md-10" style="margin-left:10px; margin-bottom:20px; ">
                <div class="panel-heading" >
                  <h2><a href="{{ URL::action('post-show', $post->slug) }}">{{ e($post->title) }}</a> </h2> <small><i>Created By {{ e($post->user_id) }}, {{ $post->published_at }}</i></small>
                </div>
                <p style="margin-left:15px; text-align: justify; margin-right:40px;">
                  <!-- {{ ($post->body) }} <a href="#fakelink">Read more &rarr</a> -->
                  {{ Markdown::parse(Str::limit($post->body, 300)) }} <a href="{{ URL::action('post-show', $post->slug) }}">[Read more...&rarr;]</a>
                </p>
              </div> <!-- col10 -->
        </div> <!-- container -->
</div> <!-- row -->


		
	@endforeach



		@endif


	</ul>

	<div class="text-center">
	{{ $posts->links() }}
	</div>

	

@stop





