<?php

require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_pemesanan = $_POST['id_pemesanan'];

    $perintah = "SELECT * FROM trans_pemesanan 
                    INNER JOIN user_detail ON trans_pemesanan.id_user = user_detail.id_user
                    INNER JOIN user_tutor ON trans_pemesanan.id_tutor = user_tutor.id_tutor
                    INNER JOIN tabel_mapel ON trans_pemesanan.id_mapel = tabel_mapel.id_mapel
                    WHERE id_pemesanan = '$id_pemesanan'";
    $eksekusi = mysqli_query($koneksi, $perintah);
    $cek = mysqli_affected_rows($koneksi);
    
    if ($cek > 0){
        $response["kode"] = 200;
        $response["pesan"] = "Data tersedia";
        $response["data_riwayat"] = array();
    
        while($ambil = mysqli_fetch_object($eksekusi)) {
            $F["id_pemesanan"] = $ambil->id_pemesanan;
            $F["id_user"] = $ambil->id_user;
            $F["id_tutor"] = $ambil->id_tutor;
            $F["id_mapel"] = $ambil->id_mapel;
            $F["tgl_pemesanan"] = $ambil->tgl_pemesanan;
            $F["sesi_belajar"] = $ambil->sesi_belajar;
            $F["harga"] = $ambil->harga;
            $F["status"] = $ambil->status;
            
            array_push($response["data_riwayat"], $F);
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

?>