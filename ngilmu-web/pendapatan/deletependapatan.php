<?php 

require ('../koneksi.php');
// 	$id = $_GET['id'];
// 	$email = $row['email'];
//     $password = $row['password'];
//     $fullname = $row['fullname'];
//     $grade = $row['grade'];
//     $gender = $row['gender'];
//     $alamat = $row['alamat'];
// mysqli_query($koneksi, "DELETE FROM user_detail WHERE '$id' = id_user") or die (mysql_error());
mysqli_query($koneksi, "DELETE FROM tbl_pendapatan WHERE id_pendapatan = '$_GET[id_pendapatan]'") or die (mysql_error());
header('Location: ../pendapatantutor.php ');

?>