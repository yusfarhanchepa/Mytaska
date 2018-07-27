<?php

include "../lib/db/conn.php";

if(isset($_GET['id_pelajar'])){

    $id_pelajar = $_GET['id_pelajar'];


    $query= "UPDATE pelajar SET nama_pelajar =?,no_sijil =?,umur=?,jantina=?,tempat_taska_sebelum=?,alahan=?,penyakit_lain=? WHERE id_pelajar ='$id_pelajar'";

    if ($statement= $conn->prepare($query)) {




        $statement ->bind_param(
            "sssssss", $_POST['nama_pelajar'], $_POST['no_sijil'], $_POST['umur'], $_POST['jantina'], $_POST['tempat_taska_sebelum'], $_POST['alahan']
            , $_POST['penyakit_lain']
        );
    
        if($statement -> execute()){
    
         
    
    
            echo '<script>window.alert( "Berhasil ubah!"); window.location=("../pages/anak/senarai_anak.php"); </script>';
       }
      else{
        echo '<script>window.alert( "gagal ubah!"); window.location=("../pages/anak/senarai_anak.php"); </script>';
      }
    }
}
else{
    echo '<script>window.location=("../pages/anak/senarai_anak.php"); </script>';
}


?>