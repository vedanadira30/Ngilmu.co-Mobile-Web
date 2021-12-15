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
mysqli_query($koneksi, "DELETE FROM tabel_mapel WHERE id_mapel = '$_GET[id_mapel]'") or die (mysql_error());
header('Location: ../datamapel.php ');

?>