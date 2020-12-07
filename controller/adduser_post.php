<?php include('../config/config.php'); ?>
<?php include('../config/database.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $date_now = date("Y-m-d H:i:s");
    $sql = "INSERT INTO UserProfile (firstname,lastname,email,startDate,weight,muscle,personal_question,answer,pincode,created_at)
            VALUES ('{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['email']}','{$_POST['startDate']}','{$_POST['weight']}','{$_POST['muscle']}','{$_POST['personal_question']}','{$_POST['answer']}','{$_POST['pincode']}','{$date_now}')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        $_SESSION['page'] = 'users';
        header("Location: " . $config['base_url']);
        die();
    } else {
        $conn->close();
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
