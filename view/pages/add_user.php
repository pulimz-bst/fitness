<div class="container-fluid">
    <div class="row">
        <?php include('./view/include/_navbar_admin.php'); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
            </div>
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
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="email">Email <span class="text-muted">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12 mb-3">
                            <label for="address">Personal Question<span class="text-muted">*</span></label>
                            <input type="text" class="form-control" id="personal_question" placeholder="" required="">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="address">Answer<span class="text-muted">*</span></label>
                            <input type="text" class="form-control" id="answer" placeholder="" required="">
                        </div> 
                        <div class="col-md-12 mb-3">
                            <label for="address2">Pincode<span class="text-muted">*</span></label>
                            <input type="text" class="form-control" id="pincode" placeholder="">
                        </div> 
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">SAVE</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>