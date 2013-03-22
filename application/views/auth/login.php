<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url(); ?>files/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url(); ?>files/css/flat-ui.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>files/js/jquery-1.8.2.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>files/scripts/login.js" ></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>files/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body style="background-color:#cdcdcd;">
    <div class="container">
      <div class="login" style="margin-top:75px;">
        <div id="err_login">
        	Error : Invalid login username or password.
        	<a class="close" data-dismiss="alert" href="#">&times;</a>
        </div>
        <div class="login-screen"> 
            
          <div class="login-icon">
            <img src="<?php echo base_url(); ?>files/images/login/oie_22101901RGqHPNo.png" alt="Welcome to Informal Flights" />
            <h4>Welcome to <small>Informal Flights</small></h4>
          </div>
          <div class="login-form">
            <form id="login_form" method="post" target="">
		    <div class="control-group">
		      <input name="username" type="text" class="login-field" value="" placeholder="Enter your name" id="login-name" />
		      <label class="login-field-icon fui-man-16" for="login-name"></label>
		    </div>

		    <div class="control-group">
		      <input name="password" type="password" class="login-field" value="" placeholder="Password" id="login-pass" />
		      <label class="login-field-icon fui-lock-16" for="login-pass"></label>
		    </div>
            </form>
            <a id="btn_login" class="btn btn-large btn-block" href="#">Login</a>
           <a class="login-link" href="#">Lost your password?</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
