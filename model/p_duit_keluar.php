<?php

include "../lib/db/conn.php";

//$query = "INSERT INTO kewangan (id_taska,tarikh,nama,reference,duit_keluar,image) VALUES (?,?,?,?,?,?)";



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
  $query = "insert into kewangan(id_taska,tarikh,nama,reference,duit_keluar,image) values('".$_POST['id_taska']."','".$_POST['tarikh']."','".$_POST['nama']."','".$_POST['reference']."','".$_POST['duit_keluar']."','".$name."')";
  mysqli_query($conn,$query);
  
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  echo "masuk";

 }
 
}
else{
    echo "sadasd";
}
?>