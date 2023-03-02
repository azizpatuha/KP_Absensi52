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
function queryrekap($query){
 
    global $conn;
  
    $result = mysqli_query($conn, $query);
    $datas = [];
    $datastemp = [];
    $datastempstr = [];
    $count = 0;
    while($data = mysqli_fetch_assoc($result)) {
        $datas[$data["Mapel"]."-".$count] = $data;
        $count++;
    }
 
    return $datas;
 }
  $NISN = $_GET['NISN'];
  $Kelas = $_GET['Kelas'];
  $Periode = $_GET['Periode'];
//   $Mapel = $_GET['Mapel'];
  $pertemuan = query("SELECT * FROM pertemuan");
  $siswa = query("SELECT * FROM siswa");
  $absen = query("SELECT * FROM absen");
  $rekap1 = queryrekap("SELECT Kehadiran, Kode_Mapel, Mapel FROM absen 
  WHERE NISN='$NISN' AND Kelas='$Kelas' AND Periode='$Periode'");
  ksort($rekap1);
  if (isset($_GET['Kelas'])) {
    // $pertemuanGET = $_GET['Pertemuan'];
    $kelasGET = $_GET['Kelas'];
    $mapelGET = $_GET['Mapel'];
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
                <h3><i class="fa-solid fa-user-graduate"></i>&nbsp; Rekap</h3>
                <hr />
                <?php
                                    // $ID_Absen = $_GET['ID_Absen'];
                                    $NISN = $_GET['NISN'];
                                    $Kelas = $_GET['Kelas'];
                                    $Periode = $_GET['Periode'];
                                    $dbkehadiran = mysqli_query($conn, " SELECT * FROM absen WHERE NISN='$NISN' AND Kelas='$Kelas' 
                                    AND Periode='$Periode' group by NISN='$NISN' ");
                                    while($data = mysqli_fetch_array($dbkehadiran)){
                                        $NISN = $data['NISN'];
                                        $Nama_Siswa = $data['Nama_Siswa'];
                                        $Kelas = $data['Kelas'];
                                        $Kode_Mapel = $data['Kode_Mapel'];
                                        $Mapel = $data['Mapel'];
                                        $Periode = $data['Periode'];
                                    ?>
                <form action="TambahAbsen.php" method="get">
                    <div align="center">
                        <div style="width:800px">
                            <div align="center">
                                <div class="title">
                                    <font size="4">STATUS PRESENSI SISWA</font>
                                    <br>
                                    Tahun Akademik : <?= $data['Periode']?>
                                    <br><br><br>
                                </div>

                                <div class="div_subhead"></div>
                                <table class="tb_head" width="800px">
                                    <tbody>
                                        
                                        <tr valign="top">
                                            <td width="120">NISN</td>
                                            <td align="center" width="10">:</td>
                                            <td colspan="4"><?= $data['NISN']?></td>
                                            <td width="100"></td>
                                            <td align="center" width="10"></td>
                                            <td></td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="120">Nama Siswa</td>
                                            <td align="center" width="10">:</td>
                                            <td colspan="4"><?= $data['Nama_Siswa']?></td>
                                        </tr>

                                        <tr valign="top">
                                            <td width="120">Kelas</td>
                                            <td align="center" width="10">:</td>
                                            <td colspan="4"><?= $data['Kelas']?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            
                                            <tr>
                                                <th rowspan="2"><br>Kode Mapel</th>
                                                <th rowspan="2"><br>Mata Pelajaran</th>
                                                <th colspan="30">PERTEMUAN KE-</th>
                                            </tr>
                                            <tr>
                                            <?php 
                                            $pattern = "/Pertemuan /";
                                            foreach ($pertemuan as $value) :?>
                                            <th value="<?=$value['Pertemuan']?>"> <?= preg_replace($pattern, "", $value['Pertemuan']);?>
                                            </th>
                                            <?php endforeach?>
                                            </tr>

                                            <?php 
                                            $mapelTmp = '';
                                            foreach($rekap1 as $i=> $rekap):
                                                $mapelKey = explode("-", $i)[0];
                                            ?>
                                            
                                                <?php if ($mapelKey != $mapelTmp || $mapelTmp == '') : ?>
                                                    <tr>
                                                        
                                                    <td>
                                                    <?= $rekap['Kode_Mapel'] ?>
                                                    </td>
                                                    <td>
                                                    <?= $rekap['Mapel'] ?>
                                                    </td>
                                                    
                                                <?php endif ; ?>

                                                    <?php 
                                                        foreach ($rekap as $key => $rekap2) {
                                                            if ($key == "Kehadiran" ){ 
                                                                echo "<td>{$rekap2}</td>";
                                                            } else {
                                                                continue;
                                                            }
                                                        }
                                                    ?>

                                                <?php 
                                                $mapelTmp = $mapelKey;
                                                if ($mapelKey != $mapelTmp || $mapelTmp == '') : ?>
                                                    </tr>
                                                <?php endif ; ?>

                                            <?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="Rekap.php" class="btn btn-secondary">Kembali</button></a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>