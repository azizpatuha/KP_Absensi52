<?php
include('koneksi.php');

$ID_Siswa = $_GET['ID_Siswa'];

//query update
$query = mysqli_query($conn,"DELETE FROM `siswa` WHERE ID_Siswa = '$ID_Siswa'");

if ($query) {
 # credirect ke page index
 header("location:Siswa.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}