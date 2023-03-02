<?php
include('koneksi.php');

$NIP = $_GET['NIP'];
$NISN = $_GET['NISN'];
$Nama_User = $_GET['Nama_User'];
$Username = $_GET['Username'];
$Password = password_hash($_GET["Password"], $PASSWORD_DEFAULT);
$Level = $_GET['Level'];

//query update
$query = mysqli_query($conn,"INSERT INTO `user` 
VALUES ('', '$NIP', '$NISN', '$Nama_User', '$Username','$Password','$Level')");

if ($query) {
 # redirect ke page index
 header("location:User.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);