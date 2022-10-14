<!DOCTYPE html>
<html lang="en">

<head>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/form/css/main.css">
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/form/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/form/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/form/js/main.js"></script>
    <?php
    $this->load->view("_partials_home/header");
    ?>
    <script>
        function update(z) {
            nav = z;
            // console.log("update", BASE_URL + z);

            $.ajax({
                type: "POST",
                url: BASE_URL + z,
                cache: false,
                success: process,
                error: function(data) {
                    console.log("error", data);

                }
            });
        }

        function process(htmlfile) {
            console.log("success", htmlfile);
            $("#container-content").html(htmlfile);
        }

        $(document).ready(function() {
            $('.menu-form').click(function(event) {
                event.preventDefault();
                $('.loader').show();
                nav = $(this).data("val");
                // console.log("update", BASE_URL + nav);

                $.ajax({
                    type: "POST",
                    url: BASE_URL + nav,
                    cache: false,
                    success: function(data) {
                        $('.loader').hide();
                        // console.log("success", data);
                        $("#container-content").html(data);
                    },
                    error: function(data) {
                        $('.loader').hide();
                        console.log("error", data);

                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        <?php
        include(APPPATH . "/modules/account/ajax/account.js");
        ?>
    </script>
</head>

<body id="myPage">
    <?php
    $this->load->view("_partials_home/loader");
    $this->load->view("_partials_form/content");
    ?>
    <?php
    $this->load->view("_partials_home/footer");
    ?>
</body>

</html>