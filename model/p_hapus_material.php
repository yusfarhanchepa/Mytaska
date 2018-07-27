<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM material where id_material=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_material']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/new.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/new.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


