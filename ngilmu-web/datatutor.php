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
    <title>Data Guru</title>
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
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="bi bi-box-arrow-left"></i></span>
                        <span class="title">Log Out</span>
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
                    <input type="text" placeholder="Search Here">
                    <i class="bi bi-search"></i>
                </label>
            </div>
            <!-- userImg -->
            <div class="user">
                <img src="images/img1.jpg">
            </div>
        </div>

        <div class="col-md-12 p-5 pt-2">
            <h2><i class="bi bi-people"></i></i> DATA TUTOR </h2><hr>
            <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA TUTOR</a>
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">NOMER HP</th>
                  <th scope="col">JENIS KELAMIN</th>
                  <th scope="col">TANGGAL LAHIR</th>
                  <th scope="col">INSTANSI</th>
                  <th scope="col">ALAMAT</th>
                  <th colspan="2" scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Alex</td>
                  <td>0897654321</td>
                  <td>Laki-Laki</td>
                  <td>24 Juli 2000</td>
                  <td>Politeknik Negeri Jember</td>
                  <td>Jember</td>
                  <td><a href="" class="btn btn-success">Edit</a></td>
                  <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Serena</td>
                  <td>0812345679</td>
                  <td>Perempuan</td>
                  <td>13 Maret 1999</td>
                  <td>Politeknik Negeri Jember</td>
                  <td>Jember</td>
                  <td><a href="" class="btn btn-success">Edit</a></td>
                  <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Khanza</td>
                  <td>0851234679</td>
                  <td>Perempuan</td>
                  <td>1 Februari 2000</td>
                  <td>Politeknik Negeri Jember</td>
                  <td>Jember</td>
                  <td><a href="" class="btn btn-success">Edit</a></td>
                  <td><a href="" class="btn btn-danger">Delete</a></td>
                  <!-- <td><i class="fas fa-edit bg-success p-2 text-white rounded" data-toogle="tooltip" title="Edit"></i></td>
                  <td><i class="fas fa-trash-alt bg-danger p-2 text-white rounded" data-toogle="tooltip" title="Delete"></i></td> -->
                </tr>
        
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