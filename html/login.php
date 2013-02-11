<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Crittenden | Login</title>
<meta name="author" content="SmashBrand">
<meta name="viewport" content="960px">
<link href="assets/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/twitter-bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="assets/css/_global.css" rel="stylesheet">
<link href="assets/css/page-login.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

</head>

<body>

<?php include 'inc/header.php'; ?>

<div class="container-fluid content-area" role="main">
	
	<div class="row-fluid center">
	
		<div class="span12">
		
			<div class="login-alert">

				<h4>Important Headline</h4>

				<p>Something important is going on at Crittendon and here is the reason you should sign up for it and more info that will be placed in this box.</p>

			</div><!-- .login-alert -->
		
			<h1 class="login">Members Access</h1>
			
			<div class="login-box center">
            
            <img class="login-box-logo" src="assets/images/login/login.png" alt="login">
			
				<p><span>Sign in to</span><br>
				Retail Space Users Directory</p>
				
				<div class="alert alert-error span11 unhide">
					Sorry, your subscription is expired.<br/>
					Please call 1-800-421-3483 to activate.
				</div>
				
				<form action="#">
				
					<input class="input-xlarge" type="text" placeholder="Email">
					
					<div class="clear">&nbsp;</div>
					
					<input class="input-xlarge" type="text" placeholder="Password">
					
					<div class="clear">&nbsp;</div>
					
					<input type="submit" value="Login" class="btn login-box-submit">
				
				</form>
						
			</div><!-- .login-box center -->
		
			<div class="center login-help-options">
			
				
				<p class="login-help">Help: &nbsp; <a href="#">I can't sign in</a>  |  <a href="#">Forgot my Password</a></p>
				
				<p class="login-call">Don't have an account? Call Crittenden to get Access 1-800-421-3483</p>		
			
			</div><!-- .center login-help-options -->
				
		</div><!-- .span12 -->		
	
	</div><!-- .row-fluid -->	

</div><!-- .container-fluid .content-area -->

<?php include 'inc/footer.php'; ?>

<?php include 'inc/footer_js.php'; ?>

</body>

</html>