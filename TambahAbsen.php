<?php
include('koneksi.php');

if (isset($_GET['btn1'])) {

$Total = $_GET['Total'];

for($i = 0; $i < (int)$Total; $i++) {
    $NISN = $_GET['NISN'.$i];
    $Nama_Siswa = $_GET['Nama_Siswa'.$i];
    $Kode_Mapel = $_GET['Kode_Mapel'.$i];
    $Mapel = $_GET['Mapel'.$i];
    $Kelas = $_GET['Kelas'.$i];
    $Periode = $_GET['Periode'.$i];
    $Kehadiran = $_GET['Kehadiran'.$i];
    $Pertemuan = $_GET['Pertemuan'.$i];
    // $Hadir = $_GET['Hadir'.$i];

    $query = mysqli_query ($conn, "SELECT * FROM absen WHERE NISN = '$NISN' AND Mapel='$Mapel'");
    $result = mysqli_fetch_assoc($query);
    if (strlen($result['NISN']) !=0) 
    {
        if(isset($_GET['btn-submit'])) {
            // $Kehadiran = $Hadir;
            $Kehadiran = $Kehadiran;
        }
        $query = mysqli_query ($conn, "SELECT * FROM absen WHERE Pertemuan = '$Pertemuan' AND NISN = '$NISN'
        AND Mapel='$Mapel' AND Kode_Mapel='$Kode_Mapel'");
        $resultpertemuan = mysqli_fetch_assoc($query);
        if (strlen($resultpertemuan['Pertemuan']) ==0) 
        {
            $query =  mysqli_query($conn, "INSERT INTO `absen` 
            VALUES('', '$NISN', '$Nama_Siswa', '$Kode_Mapel', '$Mapel', '$Pertemuan', '$Kelas', '$Periode', 
            '$Kehadiran')");
            
        }else{ 
            $ID_Absen = $resultpertemuan['ID_Absen'];
            // $Pertemuan = $result['Pertemuan'];
            mysqli_query($conn," UPDATE absen SET NISN='$NISN' , Nama_Siswa='$Nama_Siswa', 
            Kode_Mapel='$Kode_Mapel', Mapel='$Mapel', Kelas='$Kelas', Kehadiran='$Kehadiran',
            Periode='$Periode' WHERE ID_Absen='$ID_Absen' ");

        }

    }else{
        if(isset($_GET['btn-submit'])) {
            $Kehadiran = $Hadir;
        }
        $query =  mysqli_query($conn, "INSERT INTO `absen` 
        VALUES('', '$NISN', '$Nama_Siswa', '$Kode_Mapel', '$Mapel', '$Pertemuan', '$Kelas', '$Periode', 
        '$Kehadiran')");
    }
    
   }
}

if ($query) {
 # redirect ke page index
 header("location:Absensi.php"); 
}
else{
 echo "ERROR, data gagal ditambah". mysqli_error($conn);
}

//mysql_close($host);