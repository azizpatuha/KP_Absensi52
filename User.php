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

  $user = query("SELECT * FROM user");

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

    <title>User</title>
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
                <h3><i class="fa-solid fa-user-graduate"></i>&nbsp; Data User</h3>
                <hr />

                <!-- Button trigger modal tambah user-->
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="fa-solid fa-plus"></i> Tambah Data User
                </button>

                <!-- Modal tambah user -->
                <div class="modal fade" id="tambahModal" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahModalLabel">Tambah Data User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="TambahUser.php" method="get">
                                    <div class="mb-3">
                                        <label for="NIP" class="form-label">NIP</label>
                                        <input type="text" class="form-control" name="NIP">
                                    </div>
                                    <div class="mb-3">
                                        <label for="NISN" class="form-label">NISN</label>
                                        <input type="text" class="form-control" name="NISN">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="Nama_User" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="Username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Password" class="form-label">Password</label>
                                        <input type="text" class="form-control" name="Password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Level" class="form-label">Level</label>
                                        <select class="form-select" name="Level">
                                            <option selected>Pilih Level</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Siswa">Siswa</option>
                                        </select>
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
                                <th>NISN</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM user");
                            $no = 1;
                            $ID_User = '';
                            foreach($user as $value) {
                                $ID_User = $value['ID_User'];
                            ?>
                            <tr>
                                <th><?= $value["NIP"] ?></th>
                                <th><?= $value["NISN"] ?></th>
                                <th><?= $value["Nama_User"] ?></th>
                                <td><?= $value["Username"] ?></td>
                                <td><?= $value["Password"] ?></td>
                                <td><?= $value["Level"] ?></td>
                                <td>
                                    <a href="#" type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                        data-bs-target="#editModal-<?= $ID_User ?>">
                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="#" type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal-<?= $ID_User ?>">
                                        <i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>

                            <!-- isi modal edit  -->
                            <div class="modal fade" id="editModal-<?= $ID_User ?>" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" action="EditUser.php" method="get">
                                                <!--  -->
                                                <?php
                                                $query_edit = mysqli_query($conn, "SELECT * FROM user WHERE ID_User =$ID_User");
                                                while ($row = mysqli_fetch_assoc($query_edit)) {
                                                ?>

                                                <input type="hidden" name="ID_User" value="<?= $row['ID_User']?>">

                                                <!--  -->
                                                <div class="mb-3">
                                                    <label for="NIP" class="form-label">NIP</label>
                                                    <input type="text" class="form-control" name="NIP"
                                                        value="<?= $row['NIP']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="NISN" class="form-label">NISN</label>
                                                    <input type="text" class="form-control" name="NISN"
                                                        value="<?= $row['NISN']?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="Nama_User"
                                                        value="<?= $row['Nama_User']?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" name="Username"
                                                        value="<?= $row['Username']?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Password" class="form-label">Password</label>
                                                    <input type="text" class="form-control" name="Password"
                                                        value="<?= $row['Password']?>" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Level" class="form-label">Level</label>
                                                    <select class="form-select" name="Level">
                                                        <option selected><?= $row['Level']?></option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Guru">Guru</option>
                                                        <option value="Siswa">Siswa</option>
                                                    </select>
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
                <div class="modal fade" id="hapusModal-<?= $ID_User ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hapusModalLabel">Hapus Data User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form role="form" action="HapusUser.php" method="get">
                                    <!--  -->
                                    <?php
                                    $query_edit = mysqli_query($conn, "SELECT * FROM user WHERE ID_User =$ID_User");
                                    while ($row = mysqli_fetch_array($query_edit)) {
                                    ?>

                                    <input type="hidden" name="ID_User" value="<?php echo $row['ID_User']; ?>">
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