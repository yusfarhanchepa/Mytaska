<?php

include "../lib/db/conn.php";

$query = "INSERT INTO kelas (nama_kelas,nama_guru,nama_ppm,sesi ) VALUES (?,?,?,?)";

if($statement = $conn ->prepare($query)){


    $folder = "upload/";

    $foto = $folder . basename ($_FILES['sesi']['name']);

    $statement ->bind_param(
        "ssss", $_POST['nama_kelas'], $_POST['nama_guru'],  $_POST['nama_ppm'] , $foto
    );

    if($statement -> execute()){

        $upload = move_uploaded_file($_FILES['sesi']['tmp_name'], $foto );


        echo '<script>window.alert( "Berhasil simpan!"); window.location("../view/tambah_kelas.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal simpan!"); window.location("../view/tambah_kelas.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














