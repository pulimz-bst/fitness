<?php include('../config/config.php'); ?>
<?php include('../config/database.php'); ?>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date_now = date("Y-m-d H:i:s");
    $userId   = $_POST['id'];
    $date     = $_POST['date'];
    // $is_event     = (isset($_POST['is_event']))?1:0; 

    
    foreach ($_POST['activity'] as $key => $activity) {
        $time = $_POST['time'][$key];
        $is_event = (isset($_POST['is_event'][$key]))?1:0;   
        if ($activity != '' and $time != '') {
            $sql = "INSERT INTO UserActivities (userProfileID,date,activity,time,created_at,is_event)
            VALUES ('{$userId}','{$date}','{$activity}','{$time}','{$date_now}',{$is_event})"; 
            if ($conn->query($sql) === TRUE) {

            } else {
                $conn->close();
                echo "Error: " . $sql . "<br>" . $conn->error;
                exit;
            }
        }
    }
    $conn->close();
    $_SESSION['userId'] = $userId;
    $_SESSION['page']   = 'lookup_activity';
    header("Location: " . $config['base_url']);
    die();
}
