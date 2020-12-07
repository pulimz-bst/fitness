<?php include('../config/config.php'); ?>
<?php include('../config/database.php'); ?>
<?php
$route  = $_GET['route'];
$userId = (isset($_GET['id']))?$_GET['id']:false;
if ($route) {  
    $_SESSION['userId'] = $userId;
    $_SESSION['page']   = $route;
} else {
    $_SESSION['page'] = "index";
}
header("Location: " . $config['base_url']);
die();
