<?php

include "../lib/db/conn.php";

$query = "INSERT INTO pelajar (id_taska,nama_pelajar,id_bapa,no_sijil,tarikh_lahir,tempat_lahir,umur,jantina,agama,tempat_taska_sebelum,alahan,penyakit_lain )
 VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

if($statement = $conn ->prepare($query)){


    $statement ->bind_param(
        "ssssssssssss", $_POST['id_taska'],$_POST['nama_pelajar'], $_POST['id_bapa'], $_POST['no_sijil'], $_POST['tarikh_lahir'], $_POST['tempat_lahir'], $_POST['umur']
        , $_POST['jantina'], $_POST['agama'], $_POST['tempat_taska_sebelum'], $_POST['alahan'], $_POST['penyakit_lain']
    );

    if($statement -> execute()){


        echo '<script>window.alert( "Berhasil simpan!"); window.location=("../pages/anak/senarai_anak.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal simpan!"); window.location=("../pages/anak/tambah_anak.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














