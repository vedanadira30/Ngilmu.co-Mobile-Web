<?php
require ("koneksi.php");

session_start();

if(!isset($_SESSION['id_admin'])) {
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: index.php');

}
$sesID = $_SESSION['id_admin'];
$sesName = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Riwayat Pemesanan</title>
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
            <!-- dropdown -->
            <div class="dropdown">
            <a href="profile.php" class="btn btn-sm"><?php echo $_SESSION['email'] ?></a>
            </div>
            <!-- userImg -->
            <div class="user">
                <img src="images/img1.jpg">
            </div>
        </div>

        <!-- menampilkan data riwayat pemesanan -->
        <div class="col-md-12 p-5 pt-2">
            <h2><i class="bi bi-clock-history"></i></i> RIWAYAT PEMESANAN </h2><hr>
            <!-- <a href="pemesanan/tambahdatapemesanan.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH RIWAYAT PEMESANAN</a> -->
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA SISWA</th>
                  <th scope="col">NAMA TUTOR</th>
                  <th scope="col">MATA PELAJARAN</th>
                  <th scope="col">TANGGAL PEMESANAN</th>
                  <th scope="col">SESI BELAJAR</th>
                  <th scope="col">HARGA</th>
                  <th colspan="2" scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 $no = 1;
                 $query = "SELECT * FROM trans_pemesanan 
                            INNER JOIN user_detail ON trans_pemesanan.id_user = user_detail.id_user
                            INNER JOIN user_tutor ON trans_pemesanan.id_tutor = user_tutor.id_tutor
                            INNER JOIN tabel_mapel ON trans_pemesanan.id_mapel = tabel_mapel.id_mapel";
                 $result = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

                 while($row = mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$row['fullname']?></td>
                        <td><?=$row['fullname_tutor']?></td>
                        <td><?=$row['mata_pelajaran']?></td>
                        <td><?=$row['tgl_pemesanan']?></td>
                        <td><?=$row['sesi_belajar']?></td>
                        <td><?=$row['harga']?></td>
                        <!-- <td><a href="" class="btn btn-success">Edit</a></td> -->
                        <td><a href="pemesanan/deletepemesanan.php?id_pemesanan=<?php echo $row['id_pemesanan']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php
                 } ?>
        
              </tbody>
            </table>

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