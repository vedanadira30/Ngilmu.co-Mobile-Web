<?php 

require ('../koneksi.php');
// 	$id = $_GET['id'];
// 	$email = $row['email'];
//     $password = $row['password'];
//     $fullname = $row['fullname_tutor'];
//     $instansi = $row['instansi'];
//     $no_hp = $row['no_hp'];
//     $gender = $row['gender'];
//     $alamat = $row['alamat'];
//     $tgl_lahir = $row['tgl_lahir'];

// mysqli_query($koneksi, "DELETE FROM user_tutor WHERE '$id' = id_tutor") or die (mysql_error());
mysqli_query($koneksi, "DELETE FROM user_tutor WHERE id_tutor = '$_GET[id_tutor]'") or die (mysql_error());
header('Location: ../datatutor.php ');

?>