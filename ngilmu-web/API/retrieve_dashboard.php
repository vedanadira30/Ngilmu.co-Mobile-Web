<?php

require_once("koneksi.php");

$stat = $dbh->query("SELECT * FROM trans_pemesanan JOIN user_detail ON trans_pemesanan.id_user = user_detail.id_user JOIN user_tutor ON trans_pemesanan.id_tutor = user_tutor.id_tutor JOIN tabel_mapel ON trans_pemesanan.id_mapel = tabel_mapel.id_mapel");

while ($row = $stat->fetch(PDO::FETCH_ASSOC)){

$stat->bindParam('id_user', $id_pemesanan);
    $response = [];
    $json_array[] = $row;

    if ($stat->rowCount() ) {
        $response['pesan'] = 'berhasil!';
        $response['data'] = $json_array;
    } else {
        $response['pesan'] = 'gagal';
    }
}

echo json_encode($response);