<?php
include('koneksi.php');

$ID_User = $_GET['ID_User'];

//query update
$query = mysqli_query($conn,"DELETE FROM `user` WHERE ID_User = '$ID_User'");

if ($query) {
 # credirect ke page index
 header("location:User.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}