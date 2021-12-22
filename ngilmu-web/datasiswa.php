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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Siswa</title>
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

        <!-- Delete Modal -->
        <!-- <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="siswa/deletedatasiswa.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="id_user" id="id_user">
                <p>Apakah anda yakin?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" name="deletedata" class="btn btn-primary">Delete</button>
            </div>
            </form>
            </div>
        </div>
        </div> -->

        <!-- table data siswa -->
        <div class="col-md-12 p-5 pt-2">
            <h2><i class="bi bi-person"></i></i> DATA SISWA </h2><hr>
            <a href="siswa/tambahdatasiswa.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH DATA SISWA</a>
            <table  class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">PASSWORD</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">KELAS</th>
                  <th scope="col">JENIS KELAMIN</th>
                  <th scope="col">ALAMAT</th>
                  <th colspan="2" scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
              <?php
                 $no = 1;
                 $query = "SELECT * FROM user_detail";
                 $result = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));

                 while($row = mysqli_fetch_array($result)){ 
                        $id = $row['id_user'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $fullname = $row['fullname'];
                        $grade = $row['grade'];
                        $gender = $row['gender'];
                        $alamat = $row['alamat'];
                    ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $password; ?></td>
                        <td><?php echo $fullname; ?></td>
                        <td><?php echo $grade; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php echo $alamat; ?></td>
                        <td><a href="siswa/editdatasiswa.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="siswa/deletedatasiswa.php?id_user=<?=$row['id_user']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-danger">Hapus</a></td>
                        <!-- <td><button type="button" class="btn btn-danger deletebtn">Delete</button></td> -->
                        <!-- <td><a href="siswa/deletedatasiswa.php?id_user=<php echo $row['id_user']; ?>" class="btn btn-danger">Delete</a></td> -->
                    </tr>
                <?php
                 } ?>
              </tbody>
            </table>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
    $('#datatableid').DataTable();
} );
</script>

<script>
    //modal delete
    $(document).ready(function(){
        $('.deletebtn').on('click', function(){
            $('#deletemodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();

            console.log(data);

            $('#id_user').val(data[0]);
        });
    });
</script>

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
</body>
</html>