

<?php

include "../lib/db/conn.php";



if(isset($_POST['submit'])){
 
 $name = $_FILES['file']['name'];
 $target_dir = "upload/";
 $target_file = $target_dir . basename($_FILES["file"]["name"]);

 // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
  // Insert record
  $query = "INSERT INTO bayaran (id_taska,id_bapa,nama_bapa,phone_bapa,jumlah_bayaran,kaedah_bayaran,akaun_bank,no_rujukan,t_bayaran,salinan_resit1,status ) 
   values('".$_POST['id_taska']."','".$_POST['id_bapa']."','".$_POST['nama_bapa']."','".$_POST['phone_bapa']."','".$_POST['jumlah_bayaran']."','".$_POST['kaedah_bayaran']."'
   ,'".$_POST['akaun_bank']."'
   ,'".$_POST['no_rujukan']."','".$_POST['t_bayaran']."','".$name."','".$_POST['status']."')";
  mysqli_query($conn,$query);

  $jumlah_bayaran=$_POST['jumlah_bayaran'];
  $no_rujukan=$_POST['no_rujukan'];
  $id_taska=$_POST['id_taska'];
  $nama_bapa=$_POST['nama_bapa'];
  
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
         // Authorisation details.
         $username = "hrafaelnmesquital@mail2000.ml";
         $hash = "8892aa9f5fb19b761955a8d9c2f13fa0d8f721b1bdc35e221ea1cbf579ee505c";
     
         // Config variables. Consult http://api.txtlocal.com/docs for more info.
         $test = "0";
     
         // Data for text message. This is the text message data.
         $sender = "API Test"; // This is who the message appears to be from.
         $numbers = $_POST['phone_bapa']; // A single number or a comma-seperated list of numbers
         $message = "MyTaska: Anda telah membayar RM".$jumlah_bayaran.". Sila tunggu pengesahan seterusnya dari Tadika.";
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
     
 
         $sql = "SELECT * FROM taskauser where id_taska=$id_taska";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         $telefon_organisasi=$row["telefon_organisasi"];




         $username = "0abdelkr@app-inc-vol.ml";
         $hash = "bdf549f0a14edaa2f67b79d61f02a1bc1e35d52ac8b8639e9517691f38c75a89";
     
         // Config variables. Consult http://api.txtlocal.com/docs for more info.
         $test = "0";
     
         // Data for text message. This is the text message data.
         $sender = "API Test"; // This is who the message appears to be from.
         $numbers = $telefon_organisasi; // A single number or a comma-seperated list of numbers
         $message = "MyTaska:".$nama_bapa." telah membayar yuran RM".$jumlah_bayaran.". No.Ruj.:".$no_rujukan.". Sila sahkan.";
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

         echo '<script>window.alert( "Payment Sucess!");window.location=("../pages/bayar/bayar.php"); </script>';
 

 }
 
}
else{
    echo "sadasd";
}
?>












