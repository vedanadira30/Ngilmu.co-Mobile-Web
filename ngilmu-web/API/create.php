<?php

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$grade = $_POST['grade'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];

$stat = $dbh->prepare("INSERT INTO `user_detail`(`id_user`, `email`, `password`, `fullname`, `grade`, `gender`, `alamat`) VALUES ('', :email, :password, :fullname, :grade, :gender, :alamat)");

$stat->bindParam(':email', $email);
$stat->bindParam(':password', $password);
$stat->bindParam(':fullname', $fullname);
$stat->bindParam(':grade', $grade);
$stat->bindParam(':gender', $gender);
$stat->bindParam(':alamat', $alamat);
$stat->execute();
$response = [];
if ($stat->rowCount() > 0) {
    $response['message'] = 'berhasil';
} else {
    $response['message'] = 'gagal';
}

echo json_encode($response);