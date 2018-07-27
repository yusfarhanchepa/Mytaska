<?php

include "../lib/db/conn.php";

if(isset($_GET['id_bayar']) && ($_GET['phone_bapa'])){

    $id_bayar = $_GET['id_bayar'];
    $phone_bapa = $_GET['phone_bapa'];


    $query= "UPDATE bayaran SET status ='Verified' WHERE id_bayar ='$id_bayar'";

    if ($statement= $conn->prepare($query)) {

    
        if($statement -> execute()){
    
                 // Authorisation details.
                 
                 $username = "hrafaelnmesquital@mail2000.ml";
                 $hash = "8892aa9f5fb19b761955a8d9c2f13fa0d8f721b1bdc35e221ea1cbf579ee505c";
// Config variables. Consult http://api.txtlocal.com/docs for more info.
$test = "0";

// Data for text message. This is the text message data.
$sender = "API Test"; // This is who the message appears to be from.
$numbers = $phone_bapa; // A single number or a comma-seperated list of numbers
$message = "MyTaska: Bayaran anda telah disahkan.";
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
$ch = curl_init('http://api.txtlocal.com/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch); // This is the result from the API
curl_close($ch);

    
    
            echo '<script>window.alert( "Sucess Verified!"); window.location=("../pages/yuran/verified_yuran.php"); </script>';
       }
      else{
        echo '<script>window.alert( "Cannot Verified!"); window.location=("../pages/yuran/process_yuran.php"); </script>';
      }
    }
}
else{
    echo '<script>window.alert( "Check Phone Number!");window.location=("../pages/yuran/process_yuran.php"); </script>';
}


?>