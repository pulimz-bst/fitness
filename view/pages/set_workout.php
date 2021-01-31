<div class="container-fluid">
    <div class="row">
        <?php include('./view/include/_navbar_admin.php'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Set Workout activities to user</h1>
            </div>
            <div class="">
                <form action="<?php echo $config['base_url'] ?>/controller/setWorkout_post.php" method="POST">
                    <?php
                    $sql = "SELECT * FROM UserProfile WHERE is_deleted = 0 and id = {$_SESSION['userId']}";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $n = 0;
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                            <h4><?php echo $row['firstname'] ?>&nbsp;&nbsp;<?php echo $row['lastname'] ?></h4>
                            <label>Start Day : <span class="text-muted"><?php echo $row['startDate'] ?></span></label>
                            <label>Weight : <span class="text-muted"><?php echo $row['weight'] ?></span></label>
                            <label>Muscle Mass : <span class="text-muted"><?php echo $row['muscle'] ?></span></label>

                            <hr>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>Workout Day <span class="text-muted">*</span></label>
                                    <input type="date" class="form-control" name="date" required="" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label>Activity<span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" name="activity[]" required="" value="">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label>Time (min)<span class="text-muted">*</span></label>
                                    <input type="number" step="0.01" class="form-control" name="time[]" required="" value="">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label>Save the muscles<span class="text-muted"></span></label>
                                    <input class="form-control" type="checkbox" id="checkboxNoLabel" name="is_event[]" value="1" aria-label="...">
                                </div>
                                <div class="col-md-1 mb-3">
                                    <label>&nbsp;</label>
                                    <button type="button" id="add" class="btn btn-success  btn-block">Add</button>
                                </div>
                            </div>
                            <div id="show"> </div>
                            <div class="row box" id="clone" style="display:none;">
                                <div class="col-md-4 mb-3">
                                    <label>Activity<span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" name="activity[]" value="">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label>Time (min)<span class="text-muted">*</span></label>
                                    <input type="number" step="0.01" class="form-control" name="time[]" value="">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label>Save the muscles<span class="text-muted"></span></label>
                                    <input class="form-control" type="checkbox" id="checkboxNoLabel" name="is_event[]" value="1" aria-label="...">
                                </div>
                                <div class="col-md-1 mb-3">
                                    <label>&nbsp;</label>
                                    <button type="button" onclick="del(this)" class="btn btn-danger btn-block">Del</button>
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





<script>
    $(document).ready(function() {
        $("#add").click(function() {
            $("#clone").clone().show().appendTo("#show");
        });
    });

    function del($this) {
        $($this).closest(".box").remove();
    }
</script>