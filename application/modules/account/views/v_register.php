<div class="container-contact100 pt100">
    <div class="wrap-contact100">
        <form id="registrasi" class="contact100-form validate-form" action="<?php echo site_url() . '/account/registrasi'; ?>" method="post" enctype="multipart/form-data">
            <span class="contact100-form-title">
                REGISTRASI
            </span>

            <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
                <span class="label-input100">FULL NAME *</span>
                <input class="input100" type="text" name="name" placeholder="Enter Your Name" autocomplete="foo">
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Enter Your Email (e@a.x)">
                <span class="label-input100">EMAIL *</span>
                <input class="input100" type="text" name="email" placeholder="Enter Your Email" autocomplete="foo">
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Enter Your Password">
                <span class="label-input100">PASSWORD *</span>
                <input class="input100" type="password" name="password" placeholder="Enter Your Password" autocomplete="foo">
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Enter Your Confirmation Password">
                <span class="label-input100">CONFIRMATION PASSWORD *</span>
                <input class="input100" type="password" name="password_conf" placeholder="Enter Your Confirmation Password" autocomplete="foo">
            </div>


            <div class="container-contact100-form-btn">
                <button type="submit" class="contact100-form-btn">
                    <span>
                        Submit
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/form/js/main.js"></script>
<script type="text/javascript">
    <?php
    include(APPPATH . "/modules/account/ajax/account.js");
    ?>
</script>