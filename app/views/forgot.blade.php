<!DOCTYPE html>
<html>
    <head>
        <title>login form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
    </head>
    <body>
 
        <div class="container">

            
  

<!-- FORGOTBOX -->

            <div id="forgotbox" style=" margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">
               &nbsp&nbsp<a href="{{ URL::action('home') }}"><i class="glyphicon glyphicon-home"></i></a>&nbsp&nbsp&nbsp&nbsp&nbspForgot password?
                        </div>
                        <div style="float:right; font-size: 80%; position: relative; top:-20px">
                            
                            <a href="#" onClick="$('#forgotbox').hide(); $('#loginbox').show()"> Sign in? </a>
                            <!-- <a href="#" onClick="$('#forgotbox').hide(); $('#signupbox').show()"> Create new account? </a> -->
                        </div>
                    </div>
 
    <div style="padding-top:30px" class="panel-body" >
 
    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
 
    <form id="loginform" class="form-horizontal" role="form">
 
    <div style="margin-bottom: 25px" class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="email">
                            </div>
 
                            
 
                                <div style="margin-top:10px" class="form-group">
                                        <!-- Button -->
 
                                    <div class="col-sm-12 controls">
                                        <a id="btn-login" href="#" class="btn btn-success">Recover </a>
                                                                 
                                    </div>

                                </div>
 
                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    Don't have an account!
                                    <a href="#" onClick="$('#forgotbox').hide(); $('#signupbox').show()"> Sign Up Here </a>
                                    </div>
                                </div>
                            </div>
                        </form>
 
                    </div>
                </div>
            </div>

<!-- END OF FORGOTBOX-->

      
        


        
    </body>
</html>
