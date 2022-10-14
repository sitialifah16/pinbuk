$(document).ready(function () {
    $('#registrasi').on('submit', function (event) {
        event.preventDefault();
        $('.loader').show();
        $.ajax({
            url: BASE_URL + "Account/registrasi",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
         
            success: function (data) {
                var str = data.replace(/\"/g, "");
                $('.loader').hide();
                if (str == "Email berhasil terkirim. Silahkan aktivasi akun untuk melanjutkan login !") {
                    swal("Berhasil", str, "success");
                    update("Account/login_view")
                } else {
                    swal("Gagal", "Periksa email atau koneksi anda dan silahkan coba lagi !", "error");
                    update("Account/registrasi_view")
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $('.loader').hide();
                console.log("Status: " + textStatus, "error");
                console.log("Error: " + errorThrown, "error");
                swal("Gagal", "Periksa email atau koneksi anda dan silahkan coba lagi !", "error");
            },
        });
    });

    $('#login').on('submit', function (event) {
        event.preventDefault();
        $('.loader').show();
        $.ajax({
            url: BASE_URL + "Account/login",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
         
            success: function (data) {
                var str = data.replace(/\"/g, "");
                $('.loader').hide();
                if(str == "Anda berhasil login !"){
                    window.location.href = BASE_URL + "userpage";
                } else{
                    swal("Gagal", str, "error");
                    update("Account/login_view")
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $('.loader').hide();
                console.log("Status: " + textStatus, "error");
                console.log("Error: " + errorThrown, "error");
                swal("Gagal", "Login gagal ! Silahkan coba lagi !", "error");
            },
        });
    });


    $('#loginadmin').on('submit', function (event) {
        event.preventDefault();
        $('.loader').show();
        $.ajax({
            url: BASE_URL + "Account/loginadmin",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
         
            success: function (data) {
                var str = data.replace(/\"/g, "");
                $('.loader').hide();
                if(str == "Anda berhasil login !"){
                    window.location.href = BASE_URL + "admin/dashboard";
                } else{
                    swal("Gagal", str, "error");
                    update("Account/admin_login")
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $('.loader').hide();
                console.log("Status: " + textStatus, "error");
                console.log("Error: " + errorThrown, "error");
                swal("Gagal", "Login gagal ! Silahkan coba lagi !", "error");
            },
        });
    });

});