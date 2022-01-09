<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_tutor = $_POST['id_tutor'];
    $fullname = $_POST['fullname_tutor'];

    $$query_check = "SELECT * FROM user_tutor WHERE id_tutor = '$id_tutor'";
    $check = mysqli_fetch_array(mysqli_query($koneksi, $query_check)); 
    $json_array = array();
    $response = "";
    
    if (isset($check)) {
        $check_id = "SELECT * FROM user_tutor WHERE id_tutor = '$id_tutor'";
        $query = mysqli_query($koneksi, $check_id);
        $row = mysqli_fetch_assoc($query);

        $check_user_id = mysqli_fetch_array(mysqli_query($koneksi, $check_user)); 
        $json_array = array();
        $response = "";

        } else {
            $response = array(
                'kode' => 404,
                'pesan' => 'ID salah!',
                'tutor' => $json_array
            );
        }
    } else {
        $response = array(
            'kode' => 404,
            'pesan' => 'ID salah!!',
            'tutor' => $json_array
        );
    }
    print(json_encode($response));
    mysqli_close($koneksi);
}

?>