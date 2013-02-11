<?php
$title = "List View";
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
        <a href="detail.php">
        <img src="<?=$imgPath?>base/list.png">
        </a> 
    </div> 
        
     
<?php 
include ("inc/footer.php");
?>
