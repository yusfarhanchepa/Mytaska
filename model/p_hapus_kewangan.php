<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM kewangan where id_kewangan=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_kewangan']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/kewangan/senarai_kewangan.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/kewangan/senarai_kewangan.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


