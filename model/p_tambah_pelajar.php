<?php

include "../lib/db/conn.php";


//masuk data dlm database
// ada 7 variable pelajar nak masuk dalam database
$query = "INSERT INTO pelajar (nama_pelajar,no_sijil,tarikh_lahir,tempat_lahir,umur,jantina,agama,tempat_taska_sebelum,alahan,penyakit_lain,
nama_bapa,phone_bapa,pekerjaan_bapa,alamat_p_bapa,email_bapa,gaji_bapa,
nama_ibu,phone_ibu,pekerjaan_ibu,alamat_p_ibu,email_ibu,gaji_ibu,alamat_rumah
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

if($statement = $conn ->prepare($query)){


    $statement ->bind_param(
        "sssssssssssssssssssssss",
         $_POST['nama_pelajar'], $_POST['no_sijil'],  $_POST['tarikh_lahir'] ,  $_POST['tempat_lahir'] ,  $_POST['umur'] ,$_POST['jantina'], $_POST['agama'],  $_POST['tempat_taska_sebelum'] ,$_POST['alahan'], $_POST['penyakit_lain'], 
          $_POST['nama_bapa'] , $_POST['phone_bapa'] , $_POST['pekerjaan_bapa'] , $_POST['alamat_p_bapa'] , $_POST['email_bapa'] , $_POST['gaji_bapa'] , 
          $_POST['nama_ibu'] , $_POST['phone_ibu'] , $_POST['pekerjaan_ibu'] , $_POST['alamat_p_ibu'] , $_POST['email_ibu'] , $_POST['gaji_ibu'] , $_POST['alamat_rumah']
    );

    if($statement -> execute()){

        //kalau berjaya redirect kpd page tambah pelajar tadi
        echo '<script>window.alert( "Berhasil simpan!"); window.location=("../pages/pelajar/tambah_pelajar.php"); </script>';

        $statement ->close();

    }

    else{

// kalautk berjaya simpan database..keluar pop out
        echo '<script>window.alert( "Gagal simpan!"); window.location=("../pages/pelajar/tambah_pelajar.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














