<?php include('../config/config.php'); ?>
<?php include('../config/database.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date_now = date("Y-m-d H:i:s");
    $sql = "UPDATE UserActivities SET 
                    date = '{$_POST['date']}',
                    activity  = '{$_POST['activity']}', 
                    time ='{$_POST['time']}'
            WHERE id = '{$_POST['id']}'
         ";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        $_SESSION['userId'] = $_POST['userId'];
        $_SESSION['page'] = 'lookup_activity';
        header("Location: " . $config['base_url']);
        die();
    } else {
        $conn->close();
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
