j<?php

include "../lib/db/conn.php";

$query = "DELETE  FROM kelas where id_user=?";

if($statement = $conn ->prepare($query)){



    $statement ->bind_param(
        "i", $_GET['id_user']);

    if($statement -> execute()){

      $statement->close();


        echo '<script>window.alert( "Berhasil delete!"); window.location("../view/daftar_user.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal delete!"); window.location("../view/daftar_user.php"); </script>';
    }

}

else{
    echo " Statement delete data gagal disuapkan";
}


?>


