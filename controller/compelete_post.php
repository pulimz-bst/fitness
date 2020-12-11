<?php include('../config/config.php'); ?>
<?php include('../config/database.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' and isset($_GET['id'])) { 
    $id = $_GET['id'];
    $sql = "UPDATE UserActivities SET is_done = '1' WHERE id = '{$id}' "; 
    if ($conn->query($sql) === TRUE) {
        $conn->close();  
        $_SESSION['page'] = 'user';
        header("Location: " . $config['base_url']);
        die();
    } else {
        $conn->close();
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
