<?php

session_start();

include "../lib/db/conn.php";

$username= $conn ->real_escape_string($_POST['username']);
$password= $conn ->real_escape_string($_POST['password']);

$query = "SELECT * FROM users WHERE username ='$username' AND password='$password'";

$hasil= $conn->query($query);

$hitung=$hasil ->num_rows;

if($hitung){
    $cetak= $hasil->fetch_assoc();
    extract($cetak);

    $_SESSION["id_user"] =$id_user;

    $_SESSION["iv_user"] =$iv_user;

    echo '<script>window.alert( "oklogin!"); window.location=("../view/admin.php"); </script>';
    
}
else{
    echo '<script>window.alert( "oklogin!"); window.location=("../view/login.php"); </script>';
}

?>














