<?php
include('koneksi.php');

    $NISN = $_GET['NISN'];
    $Nama_Siswa = $_GET['Nama_Siswa'];
    $Mapel = $_GET['Mapel'];
    $Kelas = $_GET['Kelas'];
    $Kehadiran = $_GET['Kehadiran'];
    $Pertemuan = $_GET['Pertemuan'];

    $query = mysqli_query ($conn, "SELECT * FROM absen WHERE NISN = '$NISN'");
    $result = mysqli_fetch_assoc($query);
    if (strlen($result['NISN']) !=0) 
    {
        $ID_Absen = $result['ID_Absen'];
        mysqli_query($conn," UPDATE absen SET NISN='$NISN' , Nama_Siswa='$Nama_Siswa', 
        Mapel='$Mapel', Kelas='$Kelas', Kehadiran='$Kehadiran', Pertemuan='$Pertemuan' 
        WHERE ID_Absen='$ID_Absen'");
    }else{
        $query =  mysqli_query($conn, "INSERT INTO `absen` 
        VALUES('', '$NISN', '$Nama_Siswa', '$Mapel', '$Pertemuan', '$Kelas', '$Kehadiran')");
    }
    

if ($query) {
 # redirect ke page index
 header("location:Absensi.php"); 
}
else{
 echo "ERROR, data gagal ditambah". mysqli_error($conn);
}

//mysql_close($host);