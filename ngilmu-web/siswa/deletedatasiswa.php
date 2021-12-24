<?php 

require ('../koneksi.php');
    mysqli_query($koneksi, "DELETE FROM user_detail WHERE id_user = '$_GET[id_user]'") or die (mysql_error());
    header('Location: ../datasiswa.php ');

?>