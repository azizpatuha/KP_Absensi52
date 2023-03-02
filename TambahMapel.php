<?php
include('koneksi.php');

$Kode_Mapel = $_GET['Kode_Mapel'];
$Mapel = $_GET['Mapel'];
$Pengajar = $_GET['Pengajar'];
$NIP = $_GET['NIP'];
$Kelas = $_GET['Kelas'];
$Periode = $_GET['Periode'];

//query update
$query = mysqli_query($conn,"INSERT INTO `mapel` VALUES ('','$Kode_Mapel', '$Mapel', '$Pengajar','$NIP',
 '$Kelas', '$Periode')");

if ($query) {
 # redirect ke page index
 header("location:Mapel.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);