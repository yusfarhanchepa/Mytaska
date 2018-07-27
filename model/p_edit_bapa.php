<?php

include "../lib/db/conn.php";

if(isset($_GET['id_bapa'])){

    $id_bapa = $_GET['id_bapa'];


    $query= "UPDATE bapa SET ic_bapa =?,nama_bapa =?,umur_bapa=?,phone_bapa=?,alamat_bapa=?,email_bapa=?,pekerjaan_bapa=?,alamat_p_bapa=?,gaji_bapa=? WHERE id_bapa ='$id_bapa'";

    if ($statement= $conn->prepare($query)) {




        $statement ->bind_param(
            "sssssssss", $_POST['ic_bapa'], $_POST['nama_bapa'], $_POST['umur_bapa'], $_POST['phone_bapa'], $_POST['alamat_bapa'], $_POST['email_bapa']
            , $_POST['pekerjaan_bapa'], $_POST['alamat_p_bapa'], $_POST['gaji_bapa']
        );
    
        if($statement -> execute()){
    
         
    
    
            echo '<script>window.alert( "Berhasil ubah!"); window.location=("../pages/ibubapa/bapa.php"); </script>';
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