<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM kelas where id_kelas=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_kelas']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/kelas/senarai_kelas.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/kelas/daftar_user.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


