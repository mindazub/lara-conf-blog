
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> @yield('title') | ECT-2015 - International Conference on Power Systems</title>
<!--     <title>Flat UI - Free Bootstrap Framework and Theme</title>
 -->    <meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
    <!-- <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Loading Flat UI -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    {{ HTML::style('assets/css/flat/flat-ui.css') }}
    {{ HTML::style('docs/assets/css/demo.css') }}
    <!-- <link href="css/flat/flat-ui.css" rel="stylesheet"> -->
    <!-- <link href="docs/assets/css/demo.css" rel="stylesheet"> -->

    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- <link rel="stylesheet" type="text/css" href="css/front.css"> -->
    <!-- {{ HTML::style('css/front.css')}} -->
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="dist/js/vendor/html5shiv.js"></script>
      <script src="dist/js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #f2f2f2; font: 18px/30px Georgia, sans-serif;">
    <div class="container">
      <div class="demo-headline">
        <div class="demo-logo">
          <div class="logo"></div>
          <h1>ECT-2015<small style="color:#bdc3c7">&nbsp&nbsp&nbsp&nbspInternational Conference on Power Systems</small></h1>
          <!-- spalvos #bdc3c7 #1abc9c -->
        </div>
      </div> <!-- /demo-headline -->
    


  <div class="row">
        <div class="col-xs-12">
          
          @include('layout.senasnav')

        </div>
      </div> <!-- /row -->

<!-- <ul class="nav navbar-nav navbar-right">  -->
<!-- <li><a href="{{ URL::route('login') }}">Login</a></li> -->
<!-- </ul> -->

<div class="row">

  <div class="container">

                @if(Session::has('global'))
                <p>{{ Session::get('global')}}</p>
                @endif
      


    @yield('content')

                



<div class="footer">
  <div class="row">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-embossed " style="color:white; text-align:right; padding:7px;">
            <small>Created by ECT-2015, Mindaugas Ažubalis</small>
        </nav>      
    </div>
  </div>

</div>

    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>
    <!-- bootstrap CDN scripts -->


    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
  </body>
</html>
