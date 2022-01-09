<?php

require("koneksi.php");

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST["email"];
    
    $perintah = "SELECT * FROM user_tutor WHERE email = '$email'";
    $eksekusi = mysqli_query($koneksi, $perintah);
    $cek = mysqli_affected_rows($koneksi);

    if ($cek > 0){
        $response["kode"] = 200;
        $response["pesan"] = "Data tersedia";
        $response["data"] = array();

        while ($ambil = mysqli_fetch_object($eksekusi)){
            $F["id_tutor"] = $ambil->id_tutor;
            $F["email"] = $ambil->email;
            $F["password"] = $ambil->password;
            $F["fullname_tutor"] = $ambil->fullname_tutor;
            $F["instansi"] = $ambil->instansi;
            $F["alamat"] = $ambil->alamat;
            $F["gender"] = $ambil->gender;
            $F["no_telp"] = $ambil->no_telp;
            $F["tgl_lahir"] = $ambil->tgl_lahir;
            $F["profile"] = $ambil->profile;
            
            array_push($response["data"], $F);
        }
    } else {
        $response["kode"] = 401;
        $response["pesan"] = "Data tidak tersedia";
    }
} else {
    $response["kode"] = 404;
    $response["pesan"] = "Tidak ada post data";
}

echo json_encode($response);
mysqli_close($koneksi);
// require_once("koneksi.php");

// $stat = $dbh->query('SELECT * FROM user_tutor');

// while ($row = $stat->fetchAll(PDO::FETCH_ASSOC)){
//     $response = [];
//     $json_array[] = $row;

//     if ($stat->rowCount()) {
//         $response['pesan'] = 'berhasil!';
//         $response['data'] = $json_array;
//     } else {
//         $response['pesan'] = 'gagal';
//     }
// }

// echo json_encode($response);

?>