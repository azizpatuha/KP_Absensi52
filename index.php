<?php

include "koneksi.php";
session_start();

if (isset($_POST['submit'])) {				
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $dataUser = mysqli_query($conn, "SELECT * FROM user 
    WHERE Username = '$Username' ");
    $result = mysqli_fetch_array($dataUser);
    $Password1 = $result["Password"];
    if(password_verify($Password, "$Password1")){
        $cocok = 1;
    }
    else {
        $cocok = -1;
    }
if ($cocok > 0){
  if ($result['Level']=="Admin") {
    $id = $result['ID_User'];
    $id_user = $result['Nama_User'];
    $Level = $result['Level'];
    
    $_SESSION['Level'] = $Level;
    $_SESSION['Username']=$Username;
    $_SESSION['ID_User'] = $id;
    $_SESSION['Nama_User'] = $id_user;
    $_SESSION['Level']= $result['Level'];
    $_SESSION['status'] = "login";
    echo "<script type='text/javascript'>alert('Berhasil login sebagai Admin.');
    window.location.href='Dashboard.php';</script>";
  } 
  else if ($result['Level']=="Guru"){ 
    $id = $result['ID_User'];
    $id_user = $result['Nama_User'];
    $NIP = $result['NIP'];
    $queryp = mysqli_query($conn, "SELECT * FROM user WHERE ID_User = '$id'");
    $q = mysqli_fetch_assoc($queryp);
    
    $_SESSION['NIP'] = $NIP;
    $_SESSION['Username'] = $Username;
    $_SESSION['ID_User'] = $id;
    $_SESSION['Nama_User'] = $id_user;
    $_SESSION['Level'] = $result['Level'];
    $_SESSION['status'] = "login";
    echo "<script type='text/javascript'>alert('Berhasil login sebagai Guru.');
    window.location.href='Guru/Dashboard.php';</script>";
  }
  else if ($result['Level']=="Siswa"){ 
    $id = $result['ID_User'];
    $id_user = $result['Nama_User'];
    $NISN = $result['NISN'];
    $queryp = mysqli_query($conn, "SELECT * FROM user WHERE ID_User = '$id'");
    $q = mysqli_fetch_assoc($queryp);
    
    $_SESSION['NISN'] = $NISN;
    $_SESSION['Username'] = $Username;
    $_SESSION['ID_User'] = $id;
    $_SESSION['Nama_User'] = $id_user;
    $_SESSION['Level'] = $result['Level'];
    $_SESSION['status'] = "login";
    echo "<script type='text/javascript'>alert('Berhasil login sebagai Siswa.');
    window.location.href='Siswa/Rekap.php';</script>";
  }
}
else{
  $error=true;
  echo "<script type='text/javascript'>alert('Username atau password salah.');</script>";
}    
}          


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="icon" href="img/logo_smp_preview_rev_1.png" type="image/gif" sizes="16x16">
    <title>Form Login</title>
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

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5 m-5">
                    <img src="img/smpn52.jpeg" style="display: inline-block;
                        position: absolute;
                        width: 60%;
                        height: 122%;
                        transform: translate(-200px, -62%);
                        object-position: center;
                        object-fit: cover;
                        z-index: -1">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="" method="POST">
                        <div class="d-flex align-items-center mb-3 pb-1">
                            <img src="img/logo_smp_preview_rev_1.png" alt="Avatar" class="avatar" width="15%">
                            <span class="h1 fw-bold mt-4">ABSENSI<br> SMPN 52 BEKASI</span>
                        </div>
                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="Username">Username</label>
                            <input type="text" id="Username" class="form-control form-control-lg"
                                placeholder="Enter Username" name="Username" required />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="Password">Password</label>
                            <input type="password" id="Password" class="form-control form-control-lg"
                                placeholder="Enter password" name="Password" required />
                        </div>

                        <!-- Membuat Akun Jika Belum Punya -->
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2022. ABSENSI SMPN 52 BEKASI
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>
</body>

</html>