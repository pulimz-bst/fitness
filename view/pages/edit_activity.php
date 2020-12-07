<div class="container-fluid">
    <div class="row">
        <?php include('./view/include/_navbar_admin.php'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit activities</h1>
            </div>
            <div class="">
                <form action="<?php echo $config['base_url'] ?>/controller/updateactivity_post.php" method="POST">
                    <?php
                    $sql = "SELECT * FROM UserActivities WHERE is_deleted = 0 and id = {$_SESSION['userId']}"; 
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $n = 0;
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>"> 
                            <input type="hidden" class="form-control" name="userId" value="<?php echo $row['userProfileID'] ?>"> 
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>Workout Day <span class="text-muted">*</span></label>
                                    <input type="date" class="form-control" name="date" required="" value="<?php echo $row['date'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>Activity<span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" name="activity" required="" value="<?php echo $row['activity'] ?>">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label>Time (min)<span class="text-muted">*</span></label>
                                    <input type="number" step="0.01" class="form-control" name="time" required="" value="<?php echo $row['time'] ?>">
                                </div> 
                            </div>
                             
                            <br>
                            <hr>
                            <div class="row">
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">SAVE</button>
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <h3 class="h3"> No results</h3>
                    <?php
                    }

                    $conn->close();
                    ?>
                </form>
            </div>
        </main>
    </div>
</div> 