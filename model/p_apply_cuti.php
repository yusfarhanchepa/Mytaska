<?php

include "../lib/db/conn.php";

$query = "INSERT INTO cuti (id_taska,nama_staf,sebab_cuti,jenis_cuti,no_of_days,start_date,end_date,mc_picture ) VALUES (?,?,?,?,?,?,?,?)";

if($statement = $conn ->prepare($query)){


    $folder = "upload/";
    
    $foto = $folder . basename ($_FILES['mc_picture']['name']);

    $statement ->bind_param(
        "ssssssss", $_POST['id_taska'], $_POST['nama_staf'],   $_POST['sebab_cuti'] ,  $_POST['jenis_cuti'] ,  $_POST['no_of_days'] ,  $_POST['start_date'] , 
        $_POST['end_date'] , $foto );

    if($statement -> execute()){

        $upload = move_uploaded_file($_FILES['picture']['tmp_name'], $foto );
        echo '<script>window.alert( "Application Success!"); window.location=("../pages/applycuti/applyCuti.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Application Failed!"); window.location=("../pages/applycuti/applyCuti.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














