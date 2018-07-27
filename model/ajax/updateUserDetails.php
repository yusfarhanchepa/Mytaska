<?php
// include Database connection file
include("../../lib/db/conn.php");

// check request
if(isset($_POST))
{
    // get values
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $nama_guru = $_POST['nama_guru'];
    $nama_ppm = $_POST['nama_ppm'];
    $sesi = $_POST['sesi'];
    $kapasiti = $_POST['kapasiti'];
    $tahun_mula_operasi = $_POST['tahun_mula_operasi'];
  

    // Updaste User details
    $query = "UPDATE kelas SET nama_kelas = '$nama_kelas', nama_guru = '$nama_guru', nama_ppm = '$nama_ppm', sesi = '$sesi', kapasiti = '$kapasiti', tahun_mula_operasi = '$tahun_mula_operasi' WHERE id_kelas = '$id_kelas'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
}