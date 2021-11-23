<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "ngilmu";
    $koneksi = mysqli_connect($server, $username, $password, $db);
    // urutan pemanggilan variabel sama

    //cek koneksi ke database jika gagal
    if(mysqli_connect_errno()) {
        echo"Koneksi gagal : ".mysqli_connect_error();
    }
?>