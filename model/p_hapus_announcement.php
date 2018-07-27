<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM announcement where id_announcement=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_announcement']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/announcement.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/announcement.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


