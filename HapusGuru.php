<?php
include('koneksi.php');

$ID_Guru = $_GET['ID_Guru'];

//query update
$query = mysqli_query($conn,"DELETE FROM `guru` WHERE ID_Guru = '$ID_Guru'");

if ($query) {
 # credirect ke page index
 header("location:Guru.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}