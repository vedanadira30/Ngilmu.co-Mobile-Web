<?php 

require ('../koneksi.php');
// 	$id = $row['id_tutor'];
//$email = $row['email'];
//$password = $row['password'];
//$fullname = $row['fullname_tutor'];
//$instansi = $row['instansi'];
//$notelp = $row['no_telp'];
//$gender = $row['gender'];
//$alamat = $row['alamat'];
//$tgllahir = $row['tgl_lahir'];

// mysqli_query($koneksi, "DELETE FROM user_tutor WHERE '$id' = id_tutor") or die (mysql_error());
mysqli_query($koneksi, "DELETE FROM user_tutor WHERE id = '$_GET[id]'") or die (mysql_error());
header('Location: ../datatutor.php ');

?>