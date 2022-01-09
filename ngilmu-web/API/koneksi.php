<?php

$host = "localhost";
$user = "root";
$password = "";
$db   = "db_ngilmu";

$koneksi = mysqli_connect($host, $user, $password, $db) or die("Gagal menghubungi server!");


// try {
//     $dbh = new PDO("mysql:host=localhost;dbname=db_ngilmu", 'root', '');
//     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Database connection established";
// } catch (PDOException $e) {
//     echo "PDOException: " . $e->getMessage();
// }
?>