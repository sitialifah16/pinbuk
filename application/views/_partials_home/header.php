<!-- ========== Meta Tags ========== -->
<meta charset="UTF-8">
<meta name="description" content="Milad PINBUK ke-25">
<meta name="keywords" content="pinbuk , ussi , ojk, wakaf">
<meta name="author" content="Informatika Unsyiah">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- ========== Title ========== -->
<title>Milad Pinbuk 25th</title>
<!-- ========== Favicon Ico ========== -->
<!--<link rel="icon" href="fav.ico">-->
<!-- ========== STYLESHEETS ========== -->
<!-- Bootstrap CSS -->
<link href="<?php echo base_url() ?>assets/evento/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts Icon CSS -->
<link href="<?php echo base_url() ?>assets/evento/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/evento/assets/css/et-line.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/evento/assets/css/ionicons.min.css" rel="stylesheet">
<!-- Carousel CSS -->
<link href="<?php echo base_url() ?>assets/evento/assets/css/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/evento/assets/css/owl.theme.default.min.css" rel="stylesheet">
<!-- Animate CSS -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/evento/assets/css/animate.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/evento/assets/css/jquery.fancybox.min.css">
<!-- Custom styles for this template -->
<link href="<?php echo base_url() ?>assets/evento/assets/css/main.css" rel="stylesheet">
<!-- jquery -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.magnific-popup.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/popper.js"></script>
<script src="<?php echo base_url() ?>assets/evento/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/evento/assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>

<script>
    var BASE_URL = '<?php echo base_url(); ?>index.php/';
    /* ---------------------------- SMOOTH SCROLLING ----------------------------------- */
    $(document).ready(function() {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function() {

                });
            } // End if
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
    })
</script>