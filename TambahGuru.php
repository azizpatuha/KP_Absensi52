<?php
include('koneksi.php');

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
$query = mysqli_query($conn,"INSERT INTO `guru` 
VALUES ('','$NIP', '$Nama_Guru','$Nomor_Telp','$Alamat','$Agama','$TTL','$Jenis_Kelamin','$Status','$Tugas')");

if ($query) {
 # redirect ke page index
 header("location:Guru.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);