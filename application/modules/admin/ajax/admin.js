$("#foto-form").validate({
    rules: {
        gambar: "required",
        deskripsi: "required"
    },
    errorElement: "em",
    errorPlacement: function (error, element) {
        // Add the `help-block` class to the error element

        error.addClass("help-block");

        if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("label"));
        } else {
            error.insertAfter(element);
            $("<br>").insertBefore(error);
        }
    }
});

$("#edit-foto-form").validate({
    rules: {
        deskripsi: "required"
    },
    errorElement: "em",
    errorPlacement: function (error, element) {
        // Add the `help-block` class to the error element

        error.addClass("help-block");

        if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("label"));
        } else {
            error.insertAfter(element);
            $("<br>").insertBefore(error);
        }
    }
});

function previewImage() {
    document.getElementById("listview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("listview").src = oFREvent.target.result;
    };
};

$(document).ready(function () {
    $(".action-menu").click(function () {
        iddaftar = $(this).data("id");
        statusto = $(this).data("val");
        pesan = $(this).data("pesan");

        swal({
            title: "Apakah anda yakin ?",
            text: "Anda akan " + pesan + " pendaftaran workshop user !",
            icon: "warning",
            buttons: {
                cancel: true,
                confirm: true,
            }
        }).then(function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    type: "POST",
                    url: BASE_URL + "admin/Registered_user/update_status",
                    cache: false,
                    data: {
                        iddaftar: iddaftar,
                        statusto: statusto
                    },
                    success: function (data) {
                        var str = data.replace(/\"/g, "");
                        swal(str, {
                            title: "Berhasil",
                            buttons: false,
                            timer: 1000,
                            icon: "success",
                        });
                        window.location.href = BASE_URL + "admin/registered_user";
                        // console.log("success", data);
                    },
                    error: function (data) {
                        console.log("error", data);
                        swal("Terjadi Kesalahan", data, "error");
                        // window.location.href = BASE_URL + "admin/registered_user";
                    }
                });
            } else {
                swal("Verifikasi dibatalkan", {
                    title: "Cancelled",
                    buttons: false,
                    timer: 1000,
                    icon: "error",
                });
            }
        })
    });

    $(".hapus-gambar").click(function () {
        id = $(this).data("id");

        swal({
            title: "Apakah anda yakin ?",
            text: "Anda akan menghapus gambar ini",
            icon: "warning",
            buttons: {
                cancel: true,
                confirm: true,
            }
        }).then(function (isConfirm) {
            if (isConfirm) {
                $.ajax({
                    type: "POST",
                    url: BASE_URL + "admin/Photo/delete_photo/" + id,
                    cache: false,
                    success: function (data) {
                        var str = data.replace(/\"/g, "");
                        if (str == "Gambar berhasil dihapus") {
                            swal(str, {
                                title: "Berhasil",
                                buttons: false,
                                timer: 1000,
                                icon: "success",
                            });
                            window.location.href = BASE_URL + "admin/photo";
                            // console.log("success", data);
                        } else {
                            swal(str, {
                                title: "Gagal",
                                buttons: false,
                                timer: 1000,
                                icon: "error",
                            });
                            // window.location.href = BASE_URL + "admin/photo";
                        }
                    },
                    error: function (data) {
                        console.log("error", data);
                        swal("Terjadi Kesalahan", data, "error");
                        // window.location.href = BASE_URL + "admin/photo";
                    }
                });
            } else {
                swal("Delete dibatalkan", {
                    title: "Cancelled",
                    buttons: false,
                    timer: 1000,
                    icon: "error",
                });
            }
        })
    });

    $('#foto-form').on('submit', function (event) {
        if ($(this).valid()) {
            event.preventDefault();
            $.ajax({
                url: BASE_URL + "admin/Photo/add_photo",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    var str = data.replace(/\"/g, "");;
                    if (str == "Gambar berhasil dimasukkan") {
                        swal("Berhasil", str, "success");
                        window.location.href = BASE_URL + "admin/photo";
                    } else {
                        swal("Gagal", "Gambar yang tidak memenuhi kriteria terdeteksi " + str, "warning");
                        $('[name="gambar[]"]').val("");
                        $('[name="deskripsi"]').val("");
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    swal("Status: " + textStatus, "error");
                    swal("Error: " + errorThrown, "error");
                },
            });
        } else {
            $(this).validate();
        }
    });

    $('#edit-foto-form').on('submit', function (event) {
        if ($(this).valid()) {
            event.preventDefault();
            id = $(".id").val();
            $.ajax({
                url: BASE_URL + "admin/Photo/edit_photo/" + id,
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    var str = data.replace(/\"/g, "");;
                    if (str == "Data gambar berhasil diubah") {
                        swal("Berhasil", str, "success");
                        window.location.href = BASE_URL + "admin/photo";
                    } else {
                        swal("Gagal", str, "error");
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    swal("Status: " + textStatus, "error");
                    swal("Error: " + errorThrown, "error");
                },
            });
        } else {
            $(this).validate();
        }
    });

    $("#listview").click(function () {
        $("input[id='image-source']").click();
    });

});