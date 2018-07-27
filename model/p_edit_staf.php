<?php

include "../lib/db/conn.php";

if(isset($_GET['id_staf'])){

    $id_staf = $_GET['id_staf'];


    $query= "UPDATE staf SET nama_staf =?,no_ic_staf=?,no_telefon=?,kategori_staf=?,pencapaian_akademik_tertinggi=?,tarikh_mula_berkhidmat=?,gaji=? WHERE id_staf ='$id_staf'";

    if ($statement= $conn->prepare($query)) {




        $statement ->bind_param(
            "sssssss", $_POST['nama_staf'], $_POST['no_ic_staf'], $_POST['no_telefon'], $_POST['kategori_staf'], $_POST['pencapaian_akademik_tertinggi'], $_POST['tarikh_mula_berkhidmat'], $_POST['gaji']
        );
    
        if($statement -> execute()){
    
         
    
    
            echo '<script>window.alert( "Data Saved!"); window.location=("../pages/staf/senarai_staf.php"); </script>';
       }
      else{
        echo '<script>window.alert( "Failed to Saved!"); window.location=("../pages/staf/senarai_staf.php"); </script>';
      }
    }
}
else{
    echo '<script>window.location=("../pages/staf/senarai_staf.php"); </script>';
}


?>