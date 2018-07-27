<?php
	if(isset($_POST['nama_kelas']) && isset($_POST['nama_guru']) && isset($_POST['nama_ppm']) && isset($_POST['sesi']) && isset($_POST['kapasiti']) && isset($_POST['tahun_mula_operasi']))
	{
		// include Database connection file 
		include("../../lib/db/conn.php");

		// get values 
		$nama_kelas = $_POST['nama_kelas'];
		$nama_guru = $_POST['nama_guru'];
		$nama_ppm = $_POST['nama_ppm'];
		$sesi = $_POST['sesi'];
		$kapasiti = $_POST['kapasiti'];
		$tahun_mula_operasi = $_POST['tahun_mula_operasi'];
	
		

		$query = "INSERT INTO kelas(nama_kelas, nama_guru, nama_ppm, sesi, kapasiti, tahun_mula_operasi) VALUES('$nama_kelas', '$nama_guru', '$nama_ppm', '$sesi','$kapasiti', '$tahun_mula_operasi')";
		if (!$result = mysqli_query($conn, $query)) {
	        exit(mysqli_error($conn));
	    }
	    echo "1 Record Added!";
	}
	else{
		echo "not functiov";
	}
?>