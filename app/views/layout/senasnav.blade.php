<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#"></a>
              <!-- <a class="navbar-brand" href="#">ECT-2015</a> -->
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              @if(!Auth::check())
              <ul class="nav navbar-nav navbar-left">
                <!-- <li><a href="#fakelink">Home<span class="navbar-unread">2</span></a></li> -->
                    <li><a href="{{ URL::action('home')}}">Home</a></li>
                    <li><a href="#fakelink">Forum</a></li>
                    <li><a href="#fakelink">Shop</a></li>
                    <li><a href="#fakelink">About Us</a></li>
                    <li><a href="#fakelink">Not Logged In</a></li>
                                         
               </ul>
                @else
               <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{ URL::action('home')}}">Home</a></li>
                    <li><a href="#fakelink">Logged In</a></li>
                    <li><a href="#fakelink">Forum</a></li>
                    <li><a href="#fakelink">Shop</a></li>
                    <li><a href="{{ URL::action('getUpload')}}">Upload</a></li>
                    <li><a href="#fakelink">About Us</a></li>                                    
               </ul> 
               @endif


               @if(!Auth::check())
               <ul class="nav navbar-nav navbar-right">               
                  <li><a href="{{ URL::route('account-sign-in') }}">Login</a></li>
                  <li><a href="{{ URL::route('account-create' )}}">Register</a></li>
                  <li><a href="{{ URL::route('account-forgot-password')}}">Forgot Password</a></li>                  
              </ul>
              @else
              <ul class="nav navbar-nav navbar-right">               
                  <li><a href="{{ URL::route('profile-user')}}">{{ Auth::user()->username }}</a></li>
                  <li><a href="{{ URL::route('account-change-password')}}">Change password</a></li>                 
                  <li><a href="{{ URL::route('account-sign-out') }}">Logout</a></li>                  
              </ul>
              @endif



            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->