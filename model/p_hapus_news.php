<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM news where id_news=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_news']);

    if($statement -> execute()){

      $statement->close();

      echo '<script> window.location=("../pages/news.php"); </script>';
      

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location=("../pages/news.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


