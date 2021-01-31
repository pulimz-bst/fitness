<?php include('../config/config.php'); ?>
<?php include('../config/database.php'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['id'])) {
    $id = $_POST['id'];

    ///.... last weight ///// 
    $sql = "SELECT * FROM UserActivities WHERE is_deleted = 0 and userProfileID = {$_SESSION['userId']} and  id < '{$id}' and  is_done = '1' and is_event = '1'  limit 1 "; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $n = 0;
        while ($row = $result->fetch_assoc()) {
            $old_weight = $row["weight"];
            $old_muscle_mass = $row["muscle_mass"];

        }
    }else{
            $old_weight = $_SESSION['user']['weight'];
            $old_muscle_mass = $_SESSION['user']['muscle'];
    }
    ///.... last weight ///// 

    $sql = "UPDATE UserActivities SET 
                date = '{$_POST['date']}',
                activity  = '{$_POST['activity']}', 
                time ='{$_POST['time']}'
                is_event ='{$_POST['is_event']}'
            WHERE id = '{$_POST['id']}'
            ";

    $sql = "UPDATE UserActivities SET is_done = '1' ,weight ='{$_POST['weight']}',muscle_mass ='{$_POST['muscle_mass']}',old_weight ='{$old_weight}',old_muscle_mass ='{$old_muscle_mass}' WHERE id = '{$id}' ";
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
