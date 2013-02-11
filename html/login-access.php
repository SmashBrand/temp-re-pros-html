<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Crittenden | Login Access</title>
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
		
			<div class="login-info">
			
				<div class="alert alert-success">
					<strong>Subscriber Created Successfully!</strong><br/>
					Temp Password: {% password %}
				</div>
				
				<div class="connected-computers span8">
				
					<h1>Connected Browsers</h1>
					
					<table class="table table-striped table-bordered table-hover">
					
						<thead>
							<tr>
								<th><h3>Computer Name</h3></th>
								<th>Actions</th>
							</tr>
						</thead>
						              
						<tbody>
							<tr>
							  <td><h2>faslkdjxydoe - Mac OS</h2></td>
							  <td><button class="btn btn-danger btn-mini">Unlink</button></td>
							</tr>
							<tr>
							  <td><h2>faslkdjxydoe - Mac OS</h2></td>
							  <td><button class="btn btn-danger btn-mini">Unlink</button></td>
							</tr>
						</tbody>              					
					
					</table>
					<hr />

					<h3>Subscriber Actions: </h3>
					<a href="#" class="btn btn-success btn-mini">Edit</a>
					<a href="#" class="btn btn-primary btn-mini">Change Password</a>
				
				</div><!-- .connected-computers -->
			
				<div class="login-info-title">
								
					<h2 class="pull-left">Directory Access Licensed to:</h2>
					
					<p class="pull-right">To change your information please call: <b>1-800-421-3483</b></p>		
										
					<div class="clear">&nbsp;</div>							
				
				</div><!-- .login-info-title -->	
				
				<div class="login-info-box-container">
				
					<div class="login-info-box-left">
					
						<div class="login-info-box-left-padding">
					
							<h3>Owner - </h3>
							
							<table class="table login-info-table-custom">
							
								<tr>
								
									<td><span>Member:</span></td>
									
									<td><b>First Name, Last Name</b></td>
								
								</tr>
								
								<tr>
								
									<td><span>Email:</span></td>
									
									<td><b><a href="mailto:FirstName@EmailAddress.com">FirstName@EmailAddress.com</a></b></td>
								
								</tr>
		
								<tr>
								
									<td><span>Phone:</span></td>
									
									<td><b>999-999-9999</b></td>
								
								</tr>
								
								<tr>
								
									<td><span>Address:</span></td>
									
									<td><b>123 Any St.<br>
									Suite 5<br>
									San Diego CA 90201</b></td>
								
								</tr>
							
							</table>
											
						</div><!-- .login-info-box-left-padding -->					
					
					</div><!-- .login-info-box-left -->
					
					<div class="login-info-box-right">
					
						<div class="login-info-box-right-padding">
						
							<h3>Subscription Info - </h3>
							
							<table class="table login-info-table-custom">
							
								<tr>
								
									<td><span>Product:</span></td>
									
									<td><b>Retail & Restuarant</b></td>
								
								</tr>
								
								<tr>
								
									<td><span>Subscription Start:</span></td>
									
									<td><b>02 / 02 / 2011</b></td>
								
								</tr>
		
								<tr>
								
									<td><span>Subscription Renewal:</span></td>
									
									<td><b>02 / 02 / 2011</b></td>
								
								</tr>
								
								<tr>
								
									<td><span>Notes:</span></td>
									
									<td><b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</b></td>
								
								</tr>
							
							</table>					
						
						</div><!-- .login-info-box-right-padding -->
					
					</div><!-- .login-info-box-right -->
								
				</div><!-- .login-info-box-container -->				
			
			</div><!-- .login-info -->
						
		</div><!-- .span12 -->		
	
	</div><!-- .row-fluid -->	

</div><!-- .container-fluid .content-area -->

<?php include 'inc/footer.php'; ?>

<?php include 'inc/footer_js.php'; ?>

</body>

</html>
