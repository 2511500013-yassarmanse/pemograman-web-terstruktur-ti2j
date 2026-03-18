<?php
    $sb_host = "localhost";
    $sb_user = "root";
    $sb_pass = "";
    $sb_name = "jadwalguru";/

    $koneksi = mysqli_connect($sb_host, $sb_user, $sb_pass, $sb_name);

    if (mysqli_connect_error()) {
        echo "gagal melakukan koneksi ke database : " . mysqli_connect_error(
        );
    }
?>