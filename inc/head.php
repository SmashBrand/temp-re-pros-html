<?php
$Path = pathinfo(__FILE__);
include ("$Path[dirname]/constants.php"); 
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />   
	<meta name="language" content="en" />    
    <meta http-equiv="keywords" content="<?php if(isset($keywords)) { print $keywords; } else { print " "; } ?>" />
    <meta http-equiv="description" content="<?php if(isset($description)) { print $description; } else { print " "; } ?>" />
    
    <!-- NO FOLLOW PRIVACY / Beta Testing Only / Don't Forget to Change Back -->
    <meta name="ROBOTS" content="noindex, nofollow" />
    <meta name="GOOGLEBOT" content="noindex, nofollow" />

	<meta name="Author" content="SmashBrand.com"/>
    <link href="<?=$sitePath?>img/icons/Crit_Icon_rePros.ico" rel="shortcut icon" />
    
    <title><?php if(isset($title)) { print $title; } else { print ""; } ?> | Crittenden Retail Pros | Designed by SmashBrand</title>
    <link rel="stylesheet" type="text/css" href="<?=$sitePath?>css/base.css" media="screen" />  

    <!-- JS Priority Calls if needed -->
	
</head>
            
            
            


 

