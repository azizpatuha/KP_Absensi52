	<!-- cek apakah sudah login -->
	<?php
	session_start();
	include 'koneksi.php';
	if ($_SESSION['status'] != "login") {
		header("location:index.php?pesan=Login Terlebih Dahulu");
	}
	?>