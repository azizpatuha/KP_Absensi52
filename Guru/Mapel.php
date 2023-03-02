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
    $NIP = $_SESSION['NIP'];
    $mapel = query("SELECT * FROM mapel WHERE NIP=$NIP");
    $guru = query("SELECT * FROM guru");
    $kelas = query("SELECT * FROM kelas");
    if (isset($_GET['kelas'])) {
        $kelasGET = $_GET['kelas'];
        $mapel = query("SELECT * FROM mapel WHERE Kelas='$kelasGET' AND NIP='$NIP' Order By Kelas ASC");
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

    <title>Mata Pelajaran</title>
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
                <h3><i class="fa-solid fa-user-graduate"></i>&nbsp; Data Mata Pelajaran</h3>
                <hr />

                <!-- Button trigger modal tambah user-->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="fa-solid fa-plus"></i> Tambah Data Mapel
                </button>

                <!-- Modal tambah user -->
                <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Mata Pelajaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="TambahMapel.php" method="get">
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control" name="ID_Mapel">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Kode Mapel" class="form-label">Kode Mata Pelajaran</label>
                                        <input type="text" class="form-control" name="Kode_Mapel" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Mapel" class="form-label">Mata Pelajaran</label>
                                        <input type="text" class="form-control" name="Mapel" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Pengajar" class="form-label">Pengajar</label>
                                        <input type="text" readonly class="form-control" name="Pengajar"
                                            <?php foreach($mapel as $value):?>
                                            <?php endforeach?>
                                            value="<?php echo $_SESSION['Nama_User']; ?>">  
                                    </div>
                                    <div class="mb-3">
                                        <label for="NIP" class="form-label">NIP</label>
                                        <input type="text" readonly class="form-control" name="NIP" 
                                            value="<?php echo $_SESSION['NIP']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Kelas" class="form-label">Kelas</label>
                                        <select class="form-select" name="Kelas">
                                            <option selected>Pilih Kelas</option>
                                            <?php foreach ($kelas as $value) :?>
                                            <option value="<?=$value['Kelas']?>"> <?= $value['Kelas']?>
                                            </option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Periode" class="form-label">Periode</label>
                                        <input type="text" class="form-control" name="Periode" required>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end modal tambah user -->

                <div class="mb-3">
                    <select class="form-select" name="Kelas" onchange="toMapel(this)">
                        <option selected>Pilih Kelas</option>
                        <?php foreach ($kelas as $value) :?>
                        <option value="<?=$value['Kelas']?>"> <?= $value['Kelas']?>
                        </option>
                        <?php endforeach?>
                    </select>
                </div>

                <!-- isi tabel -->

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Kode Mapel</th>
                                <th>Mata Pelajaran</th>
                                <th>Pengajar</th>
                                <th>NIP</th>
                                <th>Kelas</th>
                                <th>Periode</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM mapel WHERE NIP='$NIP'");
                            $ID_Mapel = '';
                            foreach($mapel as $value) {
                                $ID_Mapel = $value['ID_Mapel'];
                            ?>
                            <tr>
                                <th><?= $value["Kode_Mapel"] ?></th>
                                <td><?= $value["Mapel"] ?></td>
                                <td><?= $value["Pengajar"] ?></td>
                                <td><?= $value["NIP"] ?></td>
                                <td><?= $value["Kelas"] ?></td>
                                <td><?= $value["Periode"] ?></td>
                                <td>
                                    <a href="#" type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                        data-bs-target="#editModal-<?= $ID_Mapel ?>">
                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="#" type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal-<?= $ID_Mapel ?>">
                                        <i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>

                            <!-- Modal Edit  -->
                            <div class="modal fade" id="editModal-<?= $ID_Mapel ?>" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" action="EditMapel.php" method="get">
                                                <!--  -->
                                                <?php
                                                $query_edit = mysqli_query($conn, "SELECT * FROM mapel WHERE ID_Mapel =$ID_Mapel");
                                                while ($row = mysqli_fetch_assoc($query_edit)) {
                                                ?>

                                                <input type="hidden" name="ID_Mapel" value="<?= $row['ID_Mapel']?>">

                                                <!--  -->
                                                <div class="mb-3">
                                                    <input type="hidden" class="form-control" name="ID_Mapel"
                                                        value="<?= $row['ID_Mapel']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Kode_Mapel" class="form-label">Kode Mata Pelajaran</label>
                                                    <input type="text" class="form-control" name="Kode_Mapel" required
                                                        value="<?= $row['Kode_Mapel']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Mapel" class="form-label">Mata Pelajaran</label>
                                                    <input type="text" class="form-control" name="Mapel" required
                                                        value="<?= $row['Mapel']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Pengajar" class="form-label">Pengajar</label>
                                                    <input type="text" readonly class="form-control" name="Pengajar"
                                                        value="<?= $row['Pengajar']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="NIP" class="form-label">NIP</label>
                                                    <input type="text" readonly class="form-control" name="NIP"
                                                        value="<?= $row['NIP']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Kelas" class="form-label">Kelas</label>
                                                    <select class="form-select" name="Kelas">
                                                        <option><?= $row['Kelas']?></option>
                                                        <?php foreach ($kelas as $value):?>
                                                        <option value="<?= $value['Kelas']?>">
                                                            <?= $value['Kelas']?>
                                                        </option>
                                                        <?php endforeach?>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Periode" class="form-label">Periode</label>
                                                    <input type="text" class="form-control" name="Periode" required
                                                        value="<?= $row['Periode']?>">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                </div>
                <!--  end modal -->
                <!-- isi hapus  -->
                <div class="modal fade" id="hapusModal-<?= $ID_Mapel ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel">Hapus Data Mapel</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="HapusMapel.php" method="get">
                                    <!--  -->
                                    <?php
                                    $query_edit = mysqli_query($conn, "SELECT * FROM mapel WHERE ID_Mapel =$ID_Mapel");
                                    while ($row = mysqli_fetch_array($query_edit)) {
                                    ?>

                                    <input type="hidden" name="ID_Mapel" value="<?php echo $row['ID_Mapel']; ?>">
                                    Yakin ingin hapus data?
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  end modal -->
                <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script>
    function toMapel(e) {
        console.log(e);
        window.location.href = `Mapel.php?kelas=${e.value}`
    }
    </script>
</body>

</html>