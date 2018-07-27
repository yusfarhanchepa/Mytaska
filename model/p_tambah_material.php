<?php

include "../lib/db/conn.php";

$query = "INSERT INTO material (id_taska,name_material,detail,advantage,link,picture) VALUES (?,?,?,?,?,?)";

if($statement = $conn ->prepare($query)){


    $folder = "upload/";

    $foto = $folder . basename ($_FILES['picture']['name']);
    

    $statement ->bind_param(
        "ssssss",$_POST['id_taska'], $_POST['name_material'], $_POST['detail'], $_POST['advantage'],  $_POST['link'] 
         , $foto
    );
 

    if($statement -> execute()){

        $upload = move_uploaded_file($_FILES['picture']['tmp_name'], $foto );


        echo '<script>window.alert( "Berhasil simpan!");window.location=("../pages/new.php"); </script>';



        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Gagal simpan!"); window.location("../pages/new.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














