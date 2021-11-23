<?php
require('koneksi.php');

session_start();

if(isset($_POST['submit'])){
    $username = $_POST['txt_user'];
    $pass = $_POST['txt_pass'];

    if(!empty(trim($username)) && !empty(trim($pass))){
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);

        while($row = mysqli_fetch_array($result)){
            $userVal = $row['username'];
            $passVal = $row['password'];
        }

        if($num != 0) {
            if($userVal==$username && $passVal==$pass){
                header('Location: dashboard.html?username=' . urlencode($userVal));
            }else{
                $error = 'user atau password salah!';
                header('Location: index.php');
            }
        }else{
            $error = 'Data tidak boleh kosong!';
            echo $error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="header">
        <img src="images/ngilmu.png">
    </div>
    <div class="container">
        <div class="box-left">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/a.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><b>Dari Sarjana untuk Indonesia</b></h5>
                      <h6>Hadirnya Ngilmu.co adalah solusi dan inovasi baru dalam sektor pendidikan<span>
                        khususnya pada usaha bimbingan belajar privat di kota Jember.</span></h6>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/b.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><b>Dari Sarjana untuk Indonesia</b></h5>
                      <h6>Hadirnya Ngilmu.co adalah solusi dan inovasi baru dalam sektor pendidikan<span>
                        khususnya pada usaha bimbingan belajar privat di kota Jember.</span></h6>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/c.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5><b>Dari Sarjana untuk Indonesia</b></h5>
                      <h6>Hadirnya Ngilmu.co adalah solusi dan inovasi baru dalam sektor pendidikan<span>
                        khususnya pada usaha bimbingan belajar privat di kota Jember.</span></h6>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
            <form class="box-right" action="index.php" method="POST">
             <h5><b>Selamat datang, admin!</b></h5>
             <h3><b>Masuk Akun</b></h3>
              <div class="input-box">
                  <h6><b>Username</b></h6>
                  <input type="text" placeholder=" username " name="txt_user">
              </div>
              <div class="input-box">
                  <h6><b>Password</b></h6>
                  <input type="password" placeholder=" password " name="txt_pass">
              </div>
              <button type = "submit" name="submit" class="login">Masuk</button>
            </form>   
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>