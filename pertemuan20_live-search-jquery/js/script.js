$(document).ready(function () {

    // hilangkan tombol cari
    $("#tombol-cari").hide();

    // event ketika keyword di tulis
    $("#keyword").on("keyup", function () {
        // munculkan icon loading
        $(".loader").show();

        // ajax menggunakan load() <- sebenernya hanya seperti ini
        // $("#container").load("ajax/handphone.php?keyword=" + $("#keyword").val())

        // ajax menggunakan $.get() <- hasil dari ini sama seperti menggunakan load, beda nya ketika data ditemukan loader hilang
        $.get("ajax/handphone.php?keyword=" + $("#keyword").val(), function (data) {

            $("#container").html(data);
            $(".loader").hide();
        });
    });

});