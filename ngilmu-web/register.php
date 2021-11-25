<?php

require('koneksi.php');

if ( isset($_POST['register']) ){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_namalengkap'];

    $query = "INSERT INTO user_admin VALUES ('','$userMail','$userPass','$userName')";
    $result = mysqli_query($koneksi, $query);
    header('Location: index.php');
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
    <title>Registrasi</title>
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
            <form class="box-right" action="register.php" method="POST">
             <h5><b>Selamat datang, admin!</b></h5>
             <h3><b>Registrasi</b></h3>
             <div class="input-box-regis">
                <h6><b>Email</b></h6>
                <input type="email" placeholder="email" name="txt_email" required>
            </div>
              <!-- <div class="input-box-regis">
                  <h6><b>Username</b></h6>
                  <input type="text" placeholder="username" name="txt_user">
              </div> -->
              <div class="input-box-regis">
                  <h6><b>Password</b></h6>
                  <input type="password" placeholder="password" name="txt_pass" required>
              </div>
              <div class="input-box-regis">   
                <h6><b>Nama Lengkap</b></h6>
                <input type="text" placeholder="nama lengkap" name="txt_namalengkap" required>
            </div>
            <div class="akun">
                <p class="verif">Punya akun?<a href="index.php">Login</a></p>
                <button type = "submit" name="register" class="register">Daftar</button>
            </div>
            </form>   
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>