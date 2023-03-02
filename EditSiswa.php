<?php
include('koneksi.php');

$ID_Siswa = $_GET['ID_Siswa'];
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

$query = mysqli_query($conn,"UPDATE siswa SET NISN='$NISN' , Nama_Siswa='$Nama_Siswa', 
Nomor_Telp='$Nomor_Telp', Alamat='$Alamat', Agama='$Agama', TTL='$TTL', 
Jenis_Kelamin='$Jenis_Kelamin', Kelas='$Kelas', Periode='$Periode' WHERE ID_Siswa='$ID_Siswa'");

if ($query) {
 # redirect ke page index
 header("location:Siswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);