<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM staf where id_staf=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_staf']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/staf/senarai_staf.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/staf/senarai_staf.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


