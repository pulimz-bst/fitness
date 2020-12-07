<?php include('../config/config.php');?>
<?php include('../config/database.php');?>
<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $pincode = $_POST['pincode'];
    if($pincode == '1234'){
        ///// admin
        $_SESSION['user'] = [
            'role' => "admin",
            'name' => "MY name admin",  
        ]; 
        $_SESSION['page'] = "dashboard";
    }else{
        ///// user
        $_SESSION['user'] = [
            'role' => "user",
            'name' => "MY name user", 
        ];
        $_SESSION['page'] = "user";
    }  
} 
header("Location: ". $config['base_url']);
die(); 