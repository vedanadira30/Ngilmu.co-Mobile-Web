<?php
    $server = "localhost";
    $username = "u1694897_b_reg_2";
    $password = "jtipolije";
    $db = "u1694897_b_reg_2_db";
    $koneksi = mysqli_connect($server, $username, $password, $db);
    // urutan pemanggilan variabel

    //cek koneksi ke database jika gagal
    if(mysqli_connect_errno()) {
        echo"Koneksi gagal : ".mysqli_connect_error();
    }
?>