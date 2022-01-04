<?php
require ("koneksi.php");

session_start();

if(!isset($_SESSION['id_admin'])) {
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: index.php');

}
$sesID = $_SESSION['id_admin'];
$sesName = $_SESSION['email'];
$uName = $_SESSION['nama_lengkap'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/ngilmu2.png">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <div class="container-dash">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><img src="images/ngilmu4.png"></span>
                        <span class="title">Ngilmu.co</span>
                    </a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon"><i class="bi bi-house-door"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="datasiswa.php">
                        <span class="icon"><i class="bi bi-person"></i></span>
                        <span class="title">Data Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="datatutor.php">
                        <span class="icon"><i class="bi bi-people"></i></span>
                        <span class="title">Data Tutor</span>
                    </a>
                </li>
                <li>
                    <a href="datamapel.php">
                        <span class="icon"><i class="bi bi-book"></i></span>
                        <span class="title">Mata Pelajaran</span>
                    </a>
                </li>
                <li>
                    <a href="riwayatpemesanan.php">
                        <span class="icon"><i class="bi bi-clock-history"></i></span>
                        <span class="title">Riwayat Pemesanan</span>
                    </a>
                </li>
                <li>
                    <a href="pendapatantutor.php">
                        <span class="icon"><i class="bi bi-wallet2"></i></span>
                        <span class="title">Pendapatan Tutor</span>
                    </a>
                </li>
            </ul>
        </div>

    <!-- main -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <i class="bi bi-list"></i>
            </div>
            <!-- search -->
            <div class="search">
                <label>
                    <input type="search" placeholder="Search Here">
                    <i class="bi bi-search"></i>
                </label>
            </div>
            <!-- Profile -->
            <div class="dropdown">
                <a href="profile.php" class="btn btn-sm "><?php echo $_SESSION['nama_lengkap'] ?></a>
            </div>
            <!-- userImg -->
            <div class="user">
                <img src="images/img1.jpg">
            </div>
        </div>
        
        <!-- card -->
        <div class="cardBox">
            <div class="card">
                <div>
                     <?php
                        $query = "SELECT * FROM user_detail ORDER BY id_user";
                        $result = mysqli_query($koneksi, $query);
                        $row = mysqli_num_rows($result);
                    ?>
                        <div class="numbers">
                            <?php echo '<h1>'.$row.'</h1>';?>
                        </div>  
                        <div class="cardName">Data Siswa</div>
                </div>
            </div>
            <div class="card">
                <div>
                    <?php 
                        $query = "SELECT * FROM user_tutor ORDER BY id_tutor";
                        $result = mysqli_query($koneksi, $query);
                        $row = mysqli_num_rows($result);
                    ?>
                        <div class="numbers">
                            <?php echo '<h1>'.$row.'</h1>';?>
                        </div>
                        <div class="cardName">Data Tutor</div>
                </div>
            </div>
            <div class="card">
                <div>
                    <?php 
                        $query = "SELECT * FROM tabel_mapel ORDER BY id_mapel";
                        $result = mysqli_query($koneksi, $query);
                        $row = mysqli_num_rows($result);
                    ?>
                        <div class="numbers">
                            <?php echo '<h1>'.$row.'</h1>';?>
                        </div>
                        <div class="cardName">Mata Pelajaran</div>
                </div>
            </div>
        </div>
        <!-- carousel / slider -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 1000px">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/dashboard1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="images/dashboard2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                <img src="images/dashboard4.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>

</div>

<script>
    //menuToogle
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function(){
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }

    //membuat hovered
    let list = document.querySelectorAll('.navigation li');
    function activeLink(){
        list.forEach((item) =>
        item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item) =>
    item.addEventListener('mouseover', activeLink));
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>