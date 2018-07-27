<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM tasks where id_task=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_task']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/task.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/task.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


