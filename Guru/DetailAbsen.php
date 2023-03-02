<?php
  include '../koneksi.php';
  include '../CekSesi.php';
function query($query){
 
   global $conn;
 
   $result = mysqli_query($conn, $query);
   $datas = [];
   while($data = mysqli_fetch_assoc($result)) {
     $datas[] = $data;
   }

   return $datas;
}

  $siswa = query("SELECT * FROM siswa");
  $absen = query("SELECT * FROM absen");
  if (isset($_GET['Kelas'])) {
    $pertemuanGET = $_GET['Pertemuan'];
    $kelasGET = $_GET['Kelas'];
    $mapelGET = $_GET['Mapel'];
    $periodeGET = $_GET['Periode'];
    $mapel = query("SELECT * FROM mapel INNER JOIN siswa ON mapel.Kelas = siswa.Kelas
    WHERE siswa.Kelas = '$kelasGET' AND mapel.Mapel = '$mapelGET';");
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- manggil css -->
    <link rel="stylesheet" type="text/css" href="../css/Dashboard.css" />

    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />

    <!-- script manggil si font-awesome -->
    <script src="https://kit.fontawesome.com/5abd65a6aa.js" crossorigin="anonymous"></script>

    <title>Absen</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script type="text/javascript" src="../js/Dashboard.js"></script>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="../img/logo_smp.png" alt="" width="65px" height="50px"
                    class="d-inline-block align-text-center" />
                <b style="margin-left: 15px;">ABSENSI SMPN 52 BEKASI</b>
            </a>
        </div>
    </nav>

    <!-- sidebar -->
    <div class="sidebar">
        <div class="row no-gutters">
            <!-- bagian sidebar yang isinya menu -->
            <div class="col-md-2 bg-dark mt-2 pr-3 pt-4 sidebar">
                <ul class="nav flex-column mb-5 isi_sidebar">
                    <!-- logo user -->
                    <li class="logo-user">
                        <img src="../img/user.png" alt="" width="100"><br><br> 
                        <?php echo $_SESSION['Nama_User']; ?>
                        <br>
                        <?php echo $_SESSION['NIP']; ?>
                        <hr>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="Dashboard.php">
                            <i class="fa-solid fa-gauge"></i>&nbsp;
                            Dashboard</a>
                        <hr class="bg-secondary" />
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="Absensi.php">
                            <i class="fa-solid fa-book"></i>&nbsp;
                            Absensi</a>
                        <hr class="bg-secondary" />
                    </li>

                    <li class="nav-item">
                        <div id="item-side">
                            <a class="menu-link active-menu nav-link text-white" data-bs-toggle="collapse"
                                href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <i class="fa-solid fa-user-graduate"></i>&nbsp;
                                Data
                            </a>
                            <div class="mt-3 ms-3 collapse text-white" id="collapseExample">
                                <a href="Guru.php" class="text-decoration-none nav-link">
                                    <div class="menu-item text-white">
                                        Data Guru
                                    </div>
                                </a>
                                <!-- <hr class="bg-secondary" />
                                <a href="Siswa.php" class="text-decoration-none nav-link">
                                    <div class="menu-item text-white">
                                        Data Siswa
                                    </div>
                                </a> -->
                                <hr class="bg-secondary" />
                                <a href="Mapel.php" class="text-decoration-none nav-link">
                                    <div class="menu-item text-white">
                                        Mata Pelajaran
                                    </div>
                                </a>
                                <hr class="bg-secondary" />
                                <a href="Pertemuan.php" class="text-decoration-none nav-link">
                                    <div class="menu-item text-white">
                                        Data Pertemuan
                                    </div>
                                </a>
                            </div>
                        </div>
                        <hr class="bg-secondary" />
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="Rekap.php">
                            <i class="fa-solid fa-book"></i>&nbsp;
                            Data Rekap</a>
                        <hr class="bg-secondary" />
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link text-white" href="user.php">
                            <i class="fa-solid fa-user-graduate"></i>&nbsp;
                            Data User</a>
                        <hr class="bg-secondary" />
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link text-white" href="../Logout.php">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;
                            Logout
                        </a>
                        <hr class="bg-secondary" />
                    </li>
                </ul>
            </div>

            <!-- bagian content -->
            <div class="col-md-10 p-5">
                <h3><i class="fa-solid fa-user-graduate"></i>&nbsp; Absen <?= $_GET['Pertemuan'] ??''?></h3>
                <hr />
                <form action="TambahAbsen.php" method="get">
                    <div class="mb-3">
                        <select class="form-select" name="Pertemuan" onchange="toAbsen(this)">
                            <option selected>Pilih Pertemuan</option>
                            <option value="Pertemuan 1">Pertemuan 1</option>
                            <option value="Pertemuan 2">Pertemuan 2</option>
                            <option value="Pertemuan 3">Pertemuan 3</option>
                            <option value="Pertemuan 4">Pertemuan 4</option>
                            <option value="Pertemuan 5">Pertemuan 5</option>
                            <option value="Pertemuan 6">Pertemuan 6</option>
                            <option value="Pertemuan UTS">Pertemuan UTS</option>
                            <option value="Pertemuan 7">Pertemuan 7</option>
                            <option value="Pertemuan 8">Pertemuan 8</option>
                            <option value="Pertemuan 9">Pertemuan 9</option>
                            <option value="Pertemuan 10">Pertemuan 10</option>
                            <option value="Pertemuan 11">Pertemuan 11</option>
                            <option value="Pertemuan 12">Pertemuan 12</option>
                            <option value="Pertemuan UAS">Pertemuan UAS</option>
                        </select>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama Siswa</th>
                                    <th>Kode Mapel</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Pertemuan</th>
                                    <th>Kelas</th>
                                    <th>Periode</th>
                                    <th>Kehadiran</th>
                                </tr>
                            </thead>

                            <tbody>
                                <input type="hidden" value="<?= count($mapel)?>" name="Total">
                                <?php
                                $no = 0;
                                foreach($mapel as $value) {
                                $Mapel = $value['Mapel'];
                                $NISN = $value['NISN'];
                                $dbkehadiran = mysqli_query($conn, " SELECT Kehadiran FROM absen WHERE NISN='$NISN' AND 
                                Pertemuan='$pertemuanGET' AND Mapel='$Mapel'");
                                $kehadiran = mysqli_fetch_assoc($dbkehadiran);
                                $kehadiran = $kehadiran['Kehadiran']??"";
                                ?>
                                <tr>
                                    <th><?= $value["NISN"] ?></th>
                                    <td><?= $value["Nama_Siswa"] ?></td>
                                    <td><?= $value["Kode_Mapel"] ?></td>
                                    <td><?= $value["Mapel"] ?></td>
                                    <td><?= $pertemuanGET ?></td>
                                    <td><?= $value["Kelas"] ?></td>
                                    <td><?= $periodeGET ?></td>
                                    <td><?= $kehadiran ?></td>
                                </tr>

                                <?php $no++;} ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="Absensi.php" class="btn btn-secondary">Kembali</button></a>
                </form>
            </div>
        </div>
    </div>

    <script>
    function toAbsen(e) {
        console.log(e);
        window.location.href = `DetailAbsen.php?Mapel=<?= $Mapel ?>&Kelas=<?= $kelasGET ?>&Periode=<?= $periodeGET ?>&Pertemuan=${e.value}`
    }
    </script>

</body>

</html>