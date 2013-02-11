<?php
$title = "Login";
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
    <div class="mbw960">
        <a href="home.php">
        <img src="<?=$imgPath?>base/login.png">
        </a> 
    </div> 
        
     
<?php 
include ("inc/footer.php");
?>
