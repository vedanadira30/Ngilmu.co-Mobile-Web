<?php 

require ('../koneksi.php');
    mysqli_query($koneksi, "DELETE FROM user_tutor WHERE id_tutor = '$_GET[id_tutor]'") or die (mysql_error());
    header('Location: ../datatutor.php ');

?>