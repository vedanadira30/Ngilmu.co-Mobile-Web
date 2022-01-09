<?php

include 'koneksi.php';

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    // $id_user = $_POST['id_user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $grade = $_POST['grade'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $profile = $_POST['profile'];

    $perintah = "UPDATE user_detail SET password = '$password', fullname = '$fullname', grade = '$grade', gender = '$gender', alamat = '$alamat', profile = '$profile' WHERE email = '$email'";
    $eksekusi = mysqli_query($koneksi, $perintah);
    $cek = mysqli_affected_rows($koneksi);

    if ($cek > 0){
        $response["kode"] = 201;
        $response["pesan"] = "Data berhasil diubah!";
    } else {
        $response["kode"] = 405;
        $response["pesan"] = "Data gagal diubah!";
    }
} else {
    $response["kode"] = 404;
    $response["pesan"] = "Tidak ada post data!";
}

echo json_encode($response);
mysqli_close($koneksi);

?>