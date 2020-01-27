<?php
// $koneksi = mysqli_connect("localhost", "root", "", "app_akademik");

// // Cek koneksi
// if (mysqli_connect_errno()) {
//     echo "Koneksi database gagal : " . mysqli_connect_error();
// } else {
//     echo "Koneksi database berhasil !!!";
// }

if (mysqli_connect("localhost", "root", "", "app_akademik")) {
    echo "Koneksi database berhasil !!!";
} else {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
