<?php 
    include('../config/config.php');
    include('../config/database.php');
    unset($_SESSION['user']); 
    header("Location: ". $config['base_url']);
    die(); 
?>
