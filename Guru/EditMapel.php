<?php
include('../koneksi.php');

$ID_Mapel = $_GET['ID_Mapel'];
$Kode_Mapel = $_GET['Kode_Mapel'];
$Mapel = $_GET['Mapel'];
$Pengajar = $_GET['Pengajar'];
$NIP = $_GET['NIP'];
$Kelas = $_GET['Kelas'];
$Periode = $_GET['Periode'];

//query update
$query = mysqli_query($conn,"UPDATE mapel SET Kode_Mapel='$Kode_Mapel', Mapel='$Mapel', Pengajar='$Pengajar', 
NIP='$NIP', Kelas='$Kelas', Periode='$Periode' WHERE ID_Mapel='$ID_Mapel'");

if ($query) {
 # redirect ke page index
 header("location:Mapel.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);