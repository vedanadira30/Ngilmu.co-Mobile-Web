<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $row['id_tutor'];
$email = $row['email'];
$password = $row['password'];
$fullname = $row['fullname_tutor'];
$instansi = $row['instansi'];
$notelp = $row['no_telp'];
$gender = $row['gender'];
$alamat = $row['alamat'];
$tgllahir = $row['tgl_lahir'];

// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$id','$email','$password','$fullname','$instansi','$notelp','$gender','$alamat','$tgllahir')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>