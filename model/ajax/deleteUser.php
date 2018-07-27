<?php
// check request
if(isset($_POST['id_kelas']) && isset($_POST['id_kelas']) != "")
{
    // include Database connection file
	include("../../lib/db/conn.php");

    // get user id
    $id_kelas = $_POST['id_kelas'];

    // delete User
    $query = "DELETE FROM kelas WHERE id_kelas = '$id_kelas'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
}
?>