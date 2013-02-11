<?php
$title = "Detail View";
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
        <a href="index.php">
        <img src="<?=$imgPath?>base/detail.png">
        </a> 
    </div> 
        
     
<?php 
include ("inc/footer.php");
?>
