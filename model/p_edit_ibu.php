<?php

include "../lib/db/conn.php";

if(isset($_GET['id_bapa'])){

    $id_bapa = $_GET['id_bapa'];


    $query= "UPDATE bapa SET ic_ibu =?,nama_ibu =?,umur_ibu=?,phone_ibu=?,alamat_ibu=?,email_ibu=?,pekerjaan_ibu=?,alamat_p_ibu=?,gaji_ibu=? WHERE id_bapa ='$id_bapa'";

    if ($statement= $conn->prepare($query)) {




        $statement ->bind_param(
            "sssssssss", $_POST['ic_ibu'], $_POST['nama_ibu'], $_POST['umur_ibu'], $_POST['phone_ibu'], $_POST['alamat_ibu'], $_POST['email_ibu']
            , $_POST['pekerjaan_ibu'], $_POST['alamat_p_ibu'], $_POST['gaji_ibu']
        );
    
        if($statement -> execute()){
    
         
    
    
            echo '<script>window.alert( "Berhasil ubah!"); window.location=("../pages/ibubapa/ibu.php"); </script>';
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