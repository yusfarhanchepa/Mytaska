<?php

include "../lib/db/conn.php";

$query = "INSERT INTO kelas (id_taska,nama_kelas,nama_guru,sesi,integrasi,kapasiti,catatan ) VALUES (?,?,?,?,?,?,?)";

if($statement = $conn ->prepare($query)){


    $statement ->bind_param(
        "sssssss", $_POST['id_taska'],$_POST['nama_kelas'], $_POST['nama_guru'],   $_POST['sesi'] ,  $_POST['integrasi'] ,  $_POST['kapasiti'] ,  $_POST['catatan'] 
    );

    if($statement -> execute()){


        echo '<script>window.alert( "Data Added!"); window.location=("../pages/kelas/tambah_kelas.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Failed to Save!"); window.location=("../pages/kelas/tambah_kelas.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














