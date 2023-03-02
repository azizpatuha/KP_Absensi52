<?php
include('../koneksi.php');

$ID_Guru =$_GET['ID_Guru'];
$NIP = $_GET['NIP'];
$Nama_Guru = $_GET['Nama_Guru'];
$Nomor_Telp = $_GET['Nomor_Telp'];
$Alamat = $_GET['Alamat'];
$Agama = $_GET['Agama'];
$TTL = $_GET['TTL'];
$Jenis_Kelamin = $_GET['Jenis_Kelamin'];
$Status = $_GET['Status'];
$Tugas = $_GET['Tugas'];

//query update

$query = mysqli_query($conn,"UPDATE guru SET NIP='$NIP' , Nama_Guru='$Nama_Guru', 
Nomor_Telp='$Nomor_Telp', Alamat='$Alamat', Agama='$Agama', TTL='$TTL', Jenis_Kelamin='$Jenis_Kelamin', 
Status='$Status', Tugas='$Tugas' WHERE ID_Guru='$ID_Guru'");

if ($query) {
 # redirect ke page index
 header("location:Guru.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);