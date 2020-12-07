<?php include('../config/config.php'); ?>
<?php include('../config/database.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date_now = date("Y-m-d H:i:s");
    $sql = "UPDATE UserProfile SET 
                    firstname = '{$_POST['firstname']}',
                    lastname  = '{$_POST['lastname']}', 
                    startDate ='{$_POST['startDate']}',
                    weight    ='{$_POST['weight']}',
                    muscle    = '{$_POST['muscle']}',
                    personal_question = '{$_POST['personal_question']}',
                    answer    =  '{$_POST['answer']}',
                    pincode   = '{$_POST['pincode']}'
            WHERE id = '{$_POST['id']}'
         ";

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
