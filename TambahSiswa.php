<?php
include('koneksi.php');

$NISN = $_GET['NISN'];
$Nama_Siswa = $_GET['Nama_Siswa'];
$Nomor_Telp = $_GET['Nomor_Telp'];
$Alamat = $_GET['Alamat'];
$Agama = $_GET['Agama'];
$TTL = $_GET['TTL'];
$Jenis_Kelamin = $_GET['Jenis_Kelamin'];
$Kelas = $_GET['Kelas'];
$Periode = $_GET['Periode'];

//query update
$query = mysqli_query($conn,"INSERT INTO `siswa` 
VALUES ('','$NISN', '$Nama_Siswa','$Nomor_Telp','$Alamat','$Agama','$TTL','$Jenis_Kelamin','$Kelas','$Periode')");

if ($query) {
 # redirect ke page index
 header("location:Siswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);