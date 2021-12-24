<?php 

require ('../koneksi.php');
    mysqli_query($koneksi, "DELETE FROM tbl_pendapatan WHERE id_pendapatan = '$_GET[id_pendapatan]'") or die (mysql_error());
    header('Location: ../pendapatantutor.php ');

?>