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
		
		
			<h1 class="login">Password Reset</h1>
			
			<div class="login-box center">
			
				<img class="login-box-logo" src="assets/images/login/login.png" alt="login">
			
				<p><span>Enter your email</span><br>
				to recover your passwd</p>
				
				<form action="#">
				
					<input class="input-xlarge" type="text" placeholder="Email">
					
					<div class="clear">&nbsp;</div>
										
					<input type="submit" value="Send Login Details" class="btn login-box-submit">
				
				</form>
						
			</div><!-- .login-box center -->
			<br><br>
						
		</div><!-- .span12 -->		
	
	</div><!-- .row-fluid -->	

</div><!-- .container-fluid .content-area -->

<?php include 'inc/footer.php'; ?>

<?php include 'inc/footer_js.php'; ?>

</body>

</html>