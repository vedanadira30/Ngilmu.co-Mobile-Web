<!-- <php 

require ('../koneksi.php');

    if(isset($_POST['deletedata'])){
        $id = $_POST['id_user'];

        $query = "DELETE FROM user_detail WHERE id_user = '$id'";
        $result = mysqli_query($koneksi, $query);

        if($result){
            echo'<script> alert("Data Deleted"); </script>';
            header("Location:../datasiswa.php");
        }
        else{
            echo'<script> alert("Data Not Deleted">; </script>';
        }
    }
?> -->
<?php 

require ('../koneksi.php');
// 	$id = $_GET['id'];
// 	$email = $row['email'];
//     $password = $row['password'];
//     $fullname = $row['fullname'];
//     $grade = $row['grade'];
//     $gender = $row['gender'];
//     $alamat = $row['alamat'];
// mysqli_query($koneksi, "DELETE FROM user_detail WHERE '$id' = id_user") or die (mysql_error());
mysqli_query($koneksi, "DELETE FROM user_detail WHERE id_user = '$_GET[id_user]'") or die (mysql_error());
header('Location: ../datasiswa.php ');

?>