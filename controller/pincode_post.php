<?php include('../config/config.php');?>
<?php include('../config/database.php');?>
<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $pincode = $_POST['pincode'];
   
    if($pincode == '1234'){
        ///// admin
        $_SESSION['user'] = [
            'role' => "admin",
            'firstname' => "MY name admin",  
            'lastname' => "lastname",  
        ]; 
        $_SESSION['page'] = "dashboard";
    }else{
        ///// user 
        $sql = "SELECT * FROM UserProfile WHERE pincode = '{$pincode}' and is_deleted = 0 LIMIT 1  "; 
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $n = 0;
            while ($row = $result->fetch_assoc()) { 
                $_SESSION['user'] = [
                    'role' => "user",
                    'firstname' => $row['firstname'], 
                    'lastname'  => $row['lastname'],   
                    'weight'    => $row['weight'],   
                    'muscle'    => $row['muscle'],   
                ];
                $_SESSION['userId'] = $row['id'];
                $_SESSION['page'] = "user";
            }
            $conn->close();
        } else {
            $conn->close(); 
        }
    }  
} 
header("Location: ". $config['base_url']);
die(); 