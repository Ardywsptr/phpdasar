// ambil elemen-elemen yang dibutuhkan untuk DOM
let keyword = document.getElementById("keyword");
let tombolCari = document.getElementById("tombol-cari");
let container = document.getElementById("container");

// tambahkan event -> ketika keyword ditulis
keyword.addEventListener("keyup", function () {

    // buat object ajax
    let ajax = new XMLHttpRequest();

    // cek kesiapan ajax
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            // jalankan perintah apapun disini
            container.innerHTML = ajax.responseText;
        }
    }

    // eksekusi ajax
    ajax.open("GET", "ajax/handphone.php?keyword=" + keyword.value, true);
    ajax.send();

});