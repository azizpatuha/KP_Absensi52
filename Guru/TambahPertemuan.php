<?php
include('koneksi.php');

$Pertemuan = $_GET['Pertemuan'];

//query update
$query = mysqli_query($conn,"INSERT INTO `pertemuan` VALUES ('','$Pertemuan')");

if ($query) {
 # redirect ke page index
 header("location:Pertemuan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);