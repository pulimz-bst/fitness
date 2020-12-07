<div class="container" style="margin-top: 30px;">
    <form action="<?php echo $config['base_url']?>/controller/pincode_post.php" method="POST">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="<?php echo $config['base_url']?>/assets/images/logo.png" height="200px">
                    </div>
                </div>
                <div class="shadow" style="padding: 20px;">
                    <div class="row teaxtbox">
                        <div class="col-md-12">
                            <input type="text" style="text-align:center;" name="pincode" value="1234">
                        </div>
                    </div>
                    <div class="row commonbutton ">
                        <div class="col-md-4">
                            <input type="button" name="" value="7">
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="" value="8" class="">
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="" value="9" class="">
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="" value="4" class="">
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="" value="5" class="">
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="" value="6" class="">
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="" value="1" class="">
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="" value="2" class="">
                        </div>
                        <div class="col-md-4">
                            <input type="button" name="" value="3" class="">
                        </div>
                    </div>
                    <div class="row conflict">
                        <div class="col-md-6 offset-md-3">
                            <input type="button" name="" value="0" class="">
                        </div>
                    </div>
                    <div class="row conflict">
                        <div class="col-md-4">
                            <input type="button" name="" value="Del" id="del">
                        </div>
                        <div class="col-md-8">
                            <input type="submit" name="" value="Enter" id="equal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>