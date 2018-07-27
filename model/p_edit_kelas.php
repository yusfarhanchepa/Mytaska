<?php

include "../lib/db/conn.php";

if(isset($_GET['id_kelas'])){

    $id_kelas = $_GET['id_kelas'];


    $query= "UPDATE kelas SET nama_kelas =?,nama_guru=?,sesi=?,integrasi=?,kapasiti=?,catatan=? WHERE id_kelas ='$id_kelas'";

    if ($statement= $conn->prepare($query)) {




        $statement ->bind_param(
            "ssssss", $_POST['nama_kelas'], $_POST['nama_guru'], $_POST['sesi'], $_POST['integrasi'], $_POST['kapasiti'], $_POST['catatan']
        );
    
        if($statement -> execute()){
    
         
    
    
            echo '<script>window.alert( "Berhasil ubah!"); window.location=("../pages/kelas/senarai_kelas.php"); </script>';
       }
      else{
        echo '<script>window.alert( "gagal ubah!"); window.location=("../pages/kelas/senarai_kelas.php"); </script>';
      }
    }
}
else{
    echo '<script>window.location=("../pages/kelas/senarai_kelas.php"); </script>';
}


?>