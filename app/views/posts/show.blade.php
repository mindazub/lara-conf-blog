@extends('layout.master')

@section('title') {{ $post->title }} @stop

@section('content')

<div class="row">
	<div class="container">
    

    
		<div class="col-md-10" style="margin-left:10px; margin-bottom:20px; ">
                <div class="panel-heading" >
                  <h2><a href="{{ URL::action('post-show', $post->slug) }}">{{ e($post->title) }}</a> </h2> <small><i>Created By {{ e($post->user->username) }}, {{ $post->published_at }}</i></small>&nbsp&nbsp&nbsp<small> <i>Comments: 15</i></small>
                </div>

                <div></div>

                
                <article style="margin-left:15px; text-align: justify; margin-right:40px;">
                  <!-- Social icons -->
                  <div style="margin-top: 25px;">
                     <p style="display: inline">{{HTML::image('/img/facebook.png')}} </p>
                     <p style="display: inline">{{HTML::image('/img/twitter.png')}} </p>
                     <p style="display: inline">{{HTML::image('/img/gplus.png')}} </p>
                  </div>
                  
                  <hr>

                  <!-- {{ ($post->body) }} <a href="#fakelink">Read more &rarr</a> -->
                  {{ Markdown::parse($post->body) }} 
                </article>

<!-- disqus comentarai-->

                 <div id="disqus_thread" style="width: 90%; margin-left: 25px;"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'manomindblogas'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  
<!-- disqus comentarai-->


	      </div> <!-- col10 -->




      </div>
      


	</div>
@stop