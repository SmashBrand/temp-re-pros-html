<?php
$title = "HomePage";
$bodyClass ="";
$wrapClass ="";
include("inc/head.php");
?>

<body>
<?php
if(isset($_GET['admin'])) { include("admin.php"); }
include("inc/header.php");
?>
                       
    <!-- /// Section / Page -->
    <div class="mbw">
        <a href="list.php">
        <img src="<?=$imgPath?>base/home_loggedIn.png">
        </a> 
    </div> 
        
     
<?php 
include ("inc/footer.php");
?>
