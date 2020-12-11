<?php session_start(); ?> 
<?php include('./view/include/_header.php');?> 
<?php include('./view/include/_navbar.php');?>
 
<?php
    if(!isset($_SESSION['user'])){
        include('./view/pages/pincode.php');
    }else{ 
        include("./view/pages/{$_SESSION['page']}.php");
    }  
?>




<?php include('./view/include/_footer.php');?>
