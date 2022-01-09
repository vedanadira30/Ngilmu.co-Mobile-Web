<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'koneksi.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_check = "SELECT * FROM user_detail WHERE email = '$email'";
    $check = mysqli_fetch_array(mysqli_query($koneksi, $query_check)); 
    $json_array = array();
    $response = "";
    
    if (isset($check)) {
        $query_check_pass = "SELECT * FROM user_detail WHERE email = '$email' AND password = '$password'";
        $query_pass_result = mysqli_query($koneksi, $query_check_pass);
        $check_password = mysqli_fetch_array($query_pass_result);

        if (isset($check_password)) {
            $query_pass_result = mysqli_query($koneksi, $query_check_pass);
            while ($row = mysqli_fetch_assoc($query_pass_result)) {
                $json_array[] = $row;
            }                
            $response = array(
                'kode' => 200,
                'pesan' => 'Login berhasil',
                'user_list' => $json_array
            );
        } else {
            $response = array(
                'kode' => 401,
                'pesan' => 'Password salah, periksa kembali!',
                'user_list' => $json_array
            );    
        }
    } else {
        $response = array(
            'kode' => 404,
            'pesan' => 'Email salah, periksa kembali',
            'user_list' => $json_array
        );
    }
    print(json_encode($response));
    mysqli_close($koneksi);
}

// include 'koneksi.php';

// if (isset($_POST)) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $statements = $dbh->prepare("SELECT * FROM user_detail where email=:email and password=:password");
//     $statements->bindParam(':email', $email);
//     $statements->bindParam(':password', $password);
//     $statements->execute();
//     $result = $statements->fetch(PDO::FETCH_ASSOC);
//     echo json_encode($result);
// }
?>