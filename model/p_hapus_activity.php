<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM activity where id_activity=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_activity']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/activity.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/activity.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


