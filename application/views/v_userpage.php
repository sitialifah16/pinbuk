<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* .avatar img {
            float: left;
            max-width: 1.5rem;
            margin-right: 3px;
            border-radius: 50%;
        } */
        .formdaftar {
            background-color: white;
        }
        .help-block{
            color:red;
        }
    </style>
    <?php
    $this->load->view("_partials_home/header");
    ?>
    <script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.validate.min.js"></script>
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
            $('.menu-app').click(function(event) {
                event.preventDefault();
                $('.loader').show();
                nav = $(this).data("val");
                nama = $(this).data("nama");
                email = $(this).data("email");
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

            $('.logout').click(function(event) {
                event.preventDefault();
                nav = $(this).data("val");
                // console.log("update", BASE_URL + nav);

                swal({
                    title: "Apakah anda yakin ?",
                    text: "Anda akan meninggalkan laman ini !",
                    icon: "warning",
                    buttons: {
                        cancel: true,
                        confirm: true,
                    }
                }).then(function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type: "POST",
                            url: BASE_URL + nav,
                            cache: false,
                            success: function(data) {
                                var str = data.replace(/\"/g, "");
                                swal(str, {
                                    title: "Berhasil",
                                    buttons: false,
                                    timer: 1000,
                                    icon: "success",
                                });
                                window.location.href = BASE_URL + "home";
                                // console.log("success", data);
                            },
                            error: function(data) {
                                console.log("error", data);
                            }
                        });
                    } else {
                        swal("Logout dibatalkan", {
                            title: "Cancelled",
                            buttons: false,
                            timer: 1000,
                            icon: "error",
                        });
                    }
                })
            });
        });
    </script>
    <script type="text/javascript">
        <?php
        include(APPPATH . "/modules/userpage/ajax/userpage.js");
        ?>
    </script>

</head>

<body id="myPage">
    <?php
    $this->load->view("_partials_home/loader");
    $this->load->view("_partials_userpage/content");
    ?>

    <?php
    $this->load->view("_partials_home/footer");
    ?>
</body>

</html>