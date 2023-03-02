<?php
include('koneksi.php');

$ID_Pertemuan = $_GET['ID_Pertemuan'];

//query update
$query = mysqli_query($conn,"DELETE FROM `pertemuan` WHERE ID_Pertemuan = '$ID_Pertemuan'");

if ($query) {
 # credirect ke page index
 header("location:Pertemuan.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}