<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Activities</h1>
            </div>
            <div class="">
                <form action="#" method="POST">
                    <?php
                    $sql = "SELECT * FROM UserProfile WHERE is_deleted = 0 and id = {$_SESSION['userId']}";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $n = 0;
                        while ($row_user = $result->fetch_assoc()) {
                    ?>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row_user['id'] ?>">
                            <h4><?php echo $row_user['firstname'] ?>&nbsp;&nbsp;<?php echo $row_user['lastname'] ?></h4>
                            <label>Start Day : <span class="text-muted"><?php echo $row_user['startDate'] ?></span></label>
                            <label>Weight : <span class="text-muted"><?php echo $row_user['weight'] ?></span></label>
                            <label>Muscle Mass : <span class="text-muted"><?php echo $row_user['muscle'] ?></span></label>
                            <?php
                            $sql = "SELECT * FROM UserActivities WHERE is_deleted = 0  and userProfileID = {$_SESSION['userId']} GROUP BY date ORDER BY DATE DESC";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row_groupby = $result->fetch_assoc()) {
                                    $n = 0;
                            ?>
                                    <hr>
                                    <h4><?php echo $row_groupby['date'] ?></h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-sm">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Activity</th>
                                                    <th>Time (Min)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * FROM UserActivities WHERE is_deleted = 0 and date='{$row_groupby['date']}' and userProfileID = {$_SESSION['userId']} ORDER BY DATE DESC";
                                                $result_ac = $conn->query($sql);
                                                if ($result_ac->num_rows > 0) {
                                                    while ($row = $result_ac->fetch_assoc()) {
                                                ?>
                                                        <td><?php echo ++$n; ?></td>
                                                        <td><?php echo $row["activity"]; ?></td>
                                                        <td><?php echo $row["time"]; ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <?php if ($row["is_done"] == 0) { ?>
                                                                    <a href="<?php echo $config['base_url'] ?>/controller/compelete_post.php?id=<?php echo $row["id"]; ?>">
                                                                        <button type="button" class="btn btn-sm btn-outline-secondary">Done</button>
                                                                    </a>
                                                                <?php

                                                                } else {
                                                                ?>
                                                                    <a href="#">
                                                                        <button type="button" disabled class="btn btn-sm btn-outline-secondary">Complete</button>
                                                                    </a>
                                                                <?php
                                                                }
                                                                ?>

                                                            </div>
                                                        </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <tr>
                                                        <td colspan="5"> No results</td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <h3 class="h3"> No results</h3>
                            <?php  }
                            ?>
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