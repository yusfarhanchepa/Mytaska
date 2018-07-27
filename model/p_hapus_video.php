<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM video where id_video=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_video']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/video.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/video.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


