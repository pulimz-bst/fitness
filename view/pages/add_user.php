<div class="container-fluid">
    <div class="row">
        <?php include('./view/include/_navbar_admin.php'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"> 
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Add user</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="<?php echo $config['base_url'] ?>/controller/route.php?route=add_user" rel="noopener noreferrer">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Add User</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="">
                <form action="<?php echo $config['base_url']?>/controller/adduser_post.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name<span class="text-muted">*</span></label>
                            <input type="text" class="form-control" name="firstname" placeholder="" value="111" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="lastname" placeholder="" value="222">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="email">Email<span class="text-muted">*</span></label>
                            <input type="email" class="form-control" name="email"  required="" placeholder="you@example.com" value="you@example.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="email">Start Day <span class="text-muted">*</span></label>
                            <input type="date" class="form-control" name="startDate" required="" value="2020-12-02">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="email">Weight<span class="text-muted">*</span></label>
                            <input type="number" step="0.01" class="form-control" name="weight" required="" value="333">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="email">Muscle Mass<span class="text-muted">*</span></label>
                            <input type="number" step="0.01" class="form-control" name="muscle" required="" value="111">
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12 mb-3">
                            <label for="address">Personal Question<span class="text-muted">*</span></label>
                            <input type="text" class="form-control" name="personal_question" required="" value="1234">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address">Answer<span class="text-muted">*</span></label>
                            <input type="text" class="form-control" name="answer" required="" value="44321">
                        </div> 
                        <div class="col-md-12 mb-3">
                            <label for="address2">Pincode<span class="text-muted">*</span></label>
                            <input type="text" class="form-control" name="pincode" required="" value="1244">
                        </div> 
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">SAVE</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>