<?php 

require ('../koneksi.php');
    mysqli_query($koneksi, "DELETE FROM trans_pemesanan WHERE id_pemesanan = '$_GET[id_pemesanan]'") or die (mysql_error());
    header('Location: ../riwayatpemesanan.php ');

?>