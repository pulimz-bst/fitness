<?php include('../config/config.php'); ?>
<?php include('../config/database.php'); ?>
<?php
$route = $_GET['route'];
if ($route) { 
    $_SESSION['page'] = $route;
} else {
    $_SESSION['page'] = "index";
}
header("Location: " . $config['base_url']);
die();
