<?php 

require ('../koneksi.php');
    mysqli_query($koneksi, "DELETE FROM tabel_mapel WHERE id_mapel = '$_GET[id_mapel]'") or die (mysql_error());
    header('Location: ../datamapel.php ');

?>