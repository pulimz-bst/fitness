<div class="container" style="margin-top: 30px;">
    <form action="<?php echo $config['base_url'] ?>/controller/pincode_post.php" method="POST">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="<?php echo $config['base_url'] ?>/assets/images/logo.png" height="200px">
                    </div>
                </div>
                <div class="shadow" style="padding: 20px;">
                    <div class="row teaxtbox">
                        <div class="col-md-12">
                            <input type="text" style="text-align:center;" name="pincode" id="pincode" value="">
                        </div>
                    </div>
                    <div class="row commonbutton ">
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" value="7">
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" onclick="sendPincode('8')" value="8" class="">
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" onclick="sendPincode('9')" value="9" class="">
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" onclick="sendPincode('4')" value="4" class="">
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" onclick="sendPincode('5')" value="5" class="">
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" onclick="sendPincode('6')" value="6" class="">
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" onclick="sendPincode('1')" value="1" class="">
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" onclick="sendPincode('2')" value="2" class="">
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <input type="button" name="" onclick="sendPincode('3')" value="3" class="">
                        </div>
                    </div>
                    <div class="row conflict">
                        <div class="col-md-6 offset-md-3">
                            <input type="button" name="" value="0" class="">
                        </div>
                    </div>
                    <div class="row conflict">
                        <div class="col-md-4">
                            <input type="button" name=""  onclick="deletepincode()"  value="Del" id="del">
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

<script>
    function sendPincode(intValue) {
        old_value =  $('#pincode').val(); 
        $('#pincode').val(old_value+intValue); 
    }
    function deletepincode() { 
        $('#pincode').val(''); 
    }
</script>