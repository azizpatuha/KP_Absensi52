<?php
include('koneksi.php');

$ID_Mapel = $_GET['ID_Mapel'];

//query update
$query = mysqli_query($conn,"DELETE FROM `mapel` WHERE ID_Mapel = '$ID_Mapel'");

if ($query) {
 # credirect ke page index
 header("location:Mapel.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}