<?php
  include 'koneksi.php';
  include 'CekSesi.php';
function query($query){
 
   global $conn;
 
   $result = mysqli_query($conn, $query);
 
   $datas = [];
 
   while($data = mysqli_fetch_assoc($result)) {
 
     $datas[] = $data;
 
   }
   return $datas;
}

  $guru = query("SELECT * FROM guru Order By NIP ASC");

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
    <link rel="stylesheet" type="text/css" href="css/Dashboard.css" />

    <link rel="stylesheet" href="fontawesome/css/all.min.css" />

    <!-- script manggil font-awesome -->
    <script src="https://kit.fontawesome.com/5abd65a6aa.js" crossorigin="anonymous">
    </script>

    <title>Guru</title>
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

    <script type="text/javascript" src="js/Dashboard.js"></script>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="img/logo_smp.png" alt="" width="65px" height="50px"
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
                        <img src="img/user.png" alt="" width="100"><br><br> 
                        <?php echo $_SESSION['Nama_User']; ?>
                        <br>
                        <?php echo $_SESSION['Level']; ?>
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
                                <hr class="bg-secondary" />
                                <a href="Siswa.php" class="text-decoration-none nav-link">
                                    <div class="menu-item text-white">
                                        Data Siswa
                                    </div>
                                </a>
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

                    <li class="nav-item">
                        <a class="nav-link text-white" href="User.php">
                            <i class="fa-solid fa-user-graduate"></i>&nbsp;
                            Data User</a>
                        <hr class="bg-secondary" />
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="Logout.php">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;
                            Logout
                        </a>
                        <hr class="bg-secondary" />
                    </li>
                </ul>
            </div>

            <!-- bagian content -->
            <div class="col-md-10 p-5">
                <h3><i class="fa-solid fa-user-graduate"></i>&nbsp; Data Guru</h3>
                <hr />

                <!-- Button trigger modal tambah user-->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="fa-solid fa-plus"></i> Tambah Data Guru
                </button>

                <!-- Modal tambah user -->
                <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Guru</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="TambahGuru.php" method="get">
                                    <div class="mb-3">
                                        <label for="NIP" class="form-label">NIP</label>
                                        <input type="text" class="form-control" name="NIP"
                                            placeholder="Panjang 18 Digit" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="Nama_Guru" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Nomor_Telp" class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" name="Nomor_Telp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="Alamat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Agama" class="form-label">Agama</label>
                                        <select class="form-select" name="Agama">
                                            <option selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Kristen Katolik">Kristen Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="TTL" class="form-label">Tempat/Tanggal Lahir</label>
                                        <input type="text" class="form-control" name="TTL">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select" name="Jenis_Kelamin">
                                            <option selected>Pilih Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Status" class="form-label">Status</label>
                                        <select class="form-select" name="Status">
                                            <option selected>Pilih Status</option>
                                            <option value="PNS">PNS</option>
                                            <option value="TKK">TKK</option>
                                            <option value="Honorer">Honorer</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Tugas" class="form-label">Tugas</label>
                                        <input type="text" class="form-control" name="Tugas" required>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- end modal tambah user -->

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Telepon</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Tempat/Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Tugas</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM guru");
                            $no = 1;
                            $ID_Guru = '';
                            foreach($guru as $value) {
                                $ID_Guru = $value['ID_Guru'];
                            ?>
                            <tr>
                                <th><?= $value["NIP"] ?></th>
                                <td><?= $value["Nama_Guru"] ?></td>
                                <td><?= $value["Nomor_Telp"] ?></td>
                                <td><?= $value["Alamat"] ?></td>
                                <td><?= $value["Agama"] ?></td>
                                <td><?= $value["TTL"] ?></td>
                                <td><?= $value["Jenis_Kelamin"] ?></td>
                                <td><?= $value["Status"] ?></td>
                                <td><?= $value["Tugas"] ?></td>
                                <td>
                                    <a href="#" type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                        data-bs-target="#editModal-<?= $ID_Guru ?>">
                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="#" type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal-<?= $ID_Guru ?>">
                                        <i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>

                            <!-- isi modal edit  -->
                            <div class="modal fade" id="editModal-<?= $ID_Guru ?>" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" action="EditGuru.php" method="get">
                                                <!--  -->
                                                <?php
                                                $query_edit = mysqli_query($conn, "SELECT * FROM guru WHERE ID_Guru =$ID_Guru");
                                                while ($row = mysqli_fetch_assoc($query_edit)) {
                                                ?>

                                                <input type="hidden" name="ID_Guru" value="<?= $row['ID_Guru']?>">

                                                <!--  -->
                                                <div class="mb-3">
                                                    <label for="NIP" class="form-label">NIP</label>
                                                    <input type="text" class="form-control" name="NIP"
                                                        placeholder="Panjang 18 Digit" value="<?= $row['NIP']?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="Nama_Guru"
                                                        value="<?= $row['Nama_Guru']?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Nomor_Telp" class="form-label">Nomor Telepon</label>
                                                    <input type="text" class="form-control" name="Nomor_Telp"
                                                        value="<?= $row['Nomor_Telp']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Alamat" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" name="Alamat"
                                                        value="<?= $row['Alamat']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Agama" class="form-label">Agama</label>
                                                    <select class="form-select" name="Agama">
                                                        <option selected><?= $row['Agama']?></option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Buddha">Buddha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="TTL" class="form-label">Tempat/Tanggal Lahir</label>
                                                    <input type="text" class="form-control" name="TTL"
                                                        value="<?= $row['TTL']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                                                    <select class="form-select" name="Jenis_Kelamin">
                                                        <option selected><?= $row['Jenis_Kelamin']?></option>
                                                        <option value="Laki-Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Status" class="form-label">Status</label>
                                                    <select class="form-select" name="Status">
                                                        <option selected><?= $row['Status']?></option>
                                                        <option value="PNS">PNS</option>
                                                        <option value="TKK">TKK</option>
                                                        <option value="Honorer">Honorer</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Tugas" class="form-label">Tugas</label>
                                                    <input type="text" class="form-control" name="Tugas"
                                                        value="<?= $row['Tugas']?>" required>
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
                <div class="modal fade" id="hapusModal-<?= $ID_Guru ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel">Hapus Data Guru</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="HapusGuru.php" method="get">
                                    <!--  -->
                                    <?php
                          $query_edit = mysqli_query($conn, "SELECT * FROM guru WHERE ID_Guru =$ID_Guru");
                          while ($row = mysqli_fetch_array($query_edit)) {
                          ?>

                                    <input type="hidden" name="ID_Guru" value="<?php echo $row['ID_Guru']; ?>">
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
</body>

</html>