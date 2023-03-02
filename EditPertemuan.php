<?php
include('koneksi.php');

$ID_Pertemuan = $_GET['ID_Pertemuan'];
$Pertemuan = $_GET['Pertemuan'];

//query update
$query = mysqli_query($conn,"UPDATE pertemuan SET Pertemuan='$Pertemuan' WHERE ID_Pertemuan='$ID_Pertemuan'");

if ($query) {
 # redirect ke page index
 header("location:Pertemuan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

//mysql_close($host);