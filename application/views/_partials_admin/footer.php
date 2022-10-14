<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.pinbuk.id/" target="_blank">Pinbuk</a>. All rights reserved.</span>
    </div>
</footer>
<!-- plugins:js -->
<!-- jquery -->
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url() ?>assets/admin/assets/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url() ?>assets/admin/assets/js/off-canvas.js"></script>
<script src="<?php echo base_url() ?>assets/admin/assets/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url() ?>assets/admin/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?php echo base_url() ?>assets/admin/assets/js/dashboard.js"></script>
<script src="<?php echo base_url() ?>assets/admin/assets/js/todolist.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>assets/lightbox2/dist/js/lightbox-plus-jquery.js"></script>
<script src="<?php echo base_url() ?>assets/evento/assets/js/jquery.validate.min.js"></script>

<!-- End custom js for this page -->
<script>
    var BASE_URL = '<?php echo base_url(); ?>index.php/';

    $(document).ready(function() {
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
<script type="text/javascript">
    <?php
    include(APPPATH . "/modules/admin/ajax/admin.js");

    ?>
</script>