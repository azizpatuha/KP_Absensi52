<?php
include('koneksi.php');

$NIP = $_GET['NIP'];
$NISN = $_GET['NISN'];
$ID_User = $_GET['ID_User'];
$Nama_User = $_GET['Nama_User'];
$Username = $_GET['Username'];
$Password = password_hash($_GET["Password"], $PASSWORD_DEFAULT);
$Level = $_GET['Level'];

//query update

$query = mysqli_query($conn,"UPDATE user SET NIP='$NIP', NISN='$NISN', Nama_User='$Nama_User' , Username='$Username', 
Password='$Password', Level='$Level' WHERE ID_User='$ID_User'");

if ($query) {
 # redirect ke page index
 header("location:User.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);