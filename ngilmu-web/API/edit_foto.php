<?php

include 'koneksi.php';

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $encodedImage = $_POST['profile'];
    
    $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $shuffle  = substr(str_shuffle($karakter), 0, 5);

    $imageLocation = "images/$email$shuffle.jpg";
    
    $perintah = "UPDATE user_detail SET profile = '$imageLocation' WHERE email = '$email'";
    $eksekusi = mysqli_query($koneksi, $perintah);
    $cek = mysqli_affected_rows($koneksi);
    
    if ($cek > 0) {
        file_put_contents($imageLocation, base64_decode($encodedImage));
        $response = array(
            'kode' => 201,
            'pesan' => 'Foto berhasil diperbarui!'
        );
    } else {
        $response = array(
            'kode' => 405,
            'pesan' => 'Foto gagal diperbarui!'
        );
    }
} else {
    $response["kode"] = 404;
    $response["pesan"] = "Tidak ada post data!";
}

echo json_encode($response);
mysqli_close($koneksi);

?>