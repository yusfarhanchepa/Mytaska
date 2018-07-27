<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM pelajar where id_pelajar=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_pelajar']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/anak/senarai_anak.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/anak/senarai_anak.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


