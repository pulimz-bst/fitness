<div class="container-fluid">
    <div class="row">
        <?php include('./view/include/_navbar_admin.php'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit user</h1>
            </div>
            <div class="">
                <form action="<?php echo $config['base_url'] ?>/controller/updateuser_post.php" method="POST">

                    <?php
                    $sql = "SELECT * FROM UserProfile WHERE is_deleted = 0 and id = {$_SESSION['userId']}";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $n = 0;
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" >
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name<span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" name="firstname" placeholder="" value="<?php echo $row['firstname'] ?>" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="" value="<?php echo $row['lastname'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="email">Email<span class="text-muted">*</span></label>
                                    <input type="email" class="form-control" name="email" disabled value="<?php echo $row['email'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="email">Start Day <span class="text-muted">*</span></label>
                                    <input type="date" class="form-control" name="startDate" required="" value="<?php echo $row['startDate'] ?>">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email">Weight<span class="text-muted">*</span></label>
                                    <input type="number" step="0.01" class="form-control" name="weight" required="" value="<?php echo $row['weight'] ?>">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email">Muscle Mass<span class="text-muted">*</span></label>
                                    <input type="number" step="0.01" class="form-control" name="muscle" required="" value="<?php echo $row['muscle'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="address">Personal Question<span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" name="personal_question" required="" value="<?php echo $row['personal_question'] ?>">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="address">Answer<span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" name="answer" required="" value="<?php echo $row['answer'] ?>">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="address2">Pincode<span class="text-muted">*</span></label>
                                    <input type="text" class="form-control" name="pincode" required="" value="<?php echo $row['pincode'] ?>">
                                </div>
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