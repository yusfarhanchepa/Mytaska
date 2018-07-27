<?php
// include Database connection file
include("../../lib/db/conn.php");

// check request
if(isset($_POST['id_kelas']) && isset($_POST['id_kelas']) != "")
{
    // get User ID
    $id_kelas = $_POST['id_kelas'];

    // Get User Details
    $query = "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";
    if (!$result = mysqli_query($conn, $query)) {
        exit(mysqli_error($conn));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}