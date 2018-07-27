<?php

include "../lib/db/conn.php";

if(isset($_GET['id_pelajar'])){

    $id_pelajar = $_GET['id_pelajar'];


    $query= "UPDATE pelajar SET nama_pelajar =?,no_sijil=?,tarikh_lahir=?,tempat_lahir=?,umur=?,jantina=?,agama=?,tempat_taska_sebelum=?,alahan=?,penyakit_lain=?,
    nama_bapa=?,phone_bapa=?,pekerjaan_bapa=?,alamat_p_bapa=?,email_bapa=?,gaji_bapa=?,
    nama_ibu=?,phone_ibu=?,pekerjaan_ibu=?,alamat_p_ibu=?,email_ibu=?,gaji_ibu=?,alamat_rumah=?  WHERE id_pelajar ='$id_pelajar'";
    if ($statement= $conn->prepare($query)) {




        $statement ->bind_param(
            "sssssssssssssssssssssss", $_POST['nama_pelajar'], $_POST['no_sijil'], $_POST['tarikh_lahir'], $_POST['tempat_lahir'], $_POST['umur'], $_POST['jantina'], $_POST['agama'], $_POST['tempat_taska_sebelum'], $_POST['alahan'], $_POST['penyakit_lain'],
             $_POST['nama_bapa'], $_POST['phone_bapa'], $_POST['pekerjaan_bapa'] , $_POST['alamat_p_bapa'], $_POST['email_bapa'], $_POST['gaji_bapa'],
              $_POST['nama_ibu'], $_POST['phone_ibu'], $_POST['pekerjaan_ibu'], $_POST['alamat_p_ibu'], $_POST['email_ibu'], $_POST['gaji_ibu'], $_POST['alamat_rumah']
            
        );
    
        if($statement -> execute()){
    
         
    
    
            echo '<script>window.alert( "Berhasil ubah!"); window.location=("../pages/pelajar/senarai_pelajar.php"); </script>';
       }
      else{
        echo '<script>window.alert( "gagal ubah!"); window.location=("../pages/pelajar/senarai_pelajar.php"); </script>';
      }
    }
}
else{
    echo '<script>window.location=("../pages/pelajar/senarai_pelajar.php"); </script>';
}


?>