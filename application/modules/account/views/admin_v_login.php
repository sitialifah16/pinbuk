<div class="container-contact100 pt100">
    <div class="wrap-contact100">
        <form id="loginadmin" class="contact100-form validate-form" action="<?php echo site_url() . '/account/loginadmin'; ?>" method="post" enctype="multipart/form-data">
            <span class="contact100-form-title">
                LOGIN ADMIN
            </span>

            <?php
            // Cetak jika ada notifikasi
            if ($this->session->flashdata('sukses')) {
                echo '<div class="alert alert-success wrap-input100" role="alert">' . $this->session->flashdata("sukses") . '</div>';
            } elseif ($this->session->flashdata('gagal')) {
                echo '<div class="alert alert-danger wrap-input100" role="alert">' . $this->session->flashdata("gagal") . '</div>';
            }
            ?>

            <div class="wrap-input100 validate-input bg1" data-validate="Enter Your Username">
                <span class="label-input100">USERNAME</span>
                <input class="input100" type="text" name="username" placeholder="Enter Your Username" autocomplete="foo">
            </div>

            <div class="wrap-input100 validate-input bg1" data-validate="Enter Your Password">
                <span class="label-input100">PASSWORD</span>
                <input class="input100" type="password" name="password" placeholder="Enter Your Password" autocomplete="foo">
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