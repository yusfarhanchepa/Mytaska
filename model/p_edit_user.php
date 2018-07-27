<?php

include "../lib/db/conn.php";

if(isset($_GET['id_user'])){

    $id_user = $_GET['id_user'];


    $query= "UPDATE user SET username =?,password=?,nama_lengkap=?,foto=? WHERE id_user ='$id_user'";

    if ($statement= $conn->prepare($query)) {


        $folder="upload/";

        $foto=$folder. basename($_FILES['foto']['name']);


        $statement ->bind_param(
            "ssss", $_POST['nama_kelas'], $_POST['nama_guru'],  $_POST['nama_ppm'] , $foto
        );
    
        if($statement -> execute()){
    
            $upload = move_uploaded_file($_FILES['sesi']['tmp_name'], $foto );
    
    
            echo '<script>window.alert( "Berhasil ubah!"); window.location("../view/tambah_kelas.php"); </script>';
       }
      else{
        echo '<script>window.alert( "Berhasil ubah!"); window.location("../view/tambah_kelas.php"); </script>';
      }
    }
}
else{
    echo '<script>window.location=("../view/tambah_kelas.php"); </script>';
}


?>