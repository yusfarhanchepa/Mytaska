<?php

include "../lib/db/conn.php";

if(isset($_GET['id_progress'])){

    $id_progress = $_GET['id_progress'];
    $id_pelajar = $_GET['id_pelajar'];

    if($_POST['capai']=='ok'){
        $value='1';
    }
    else{
        $value='0';
    }


    $query= "UPDATE progress SET capai =?,tarikh=?,catatan=?,total=? WHERE id_progress ='$id_progress'";

    if ($statement= $conn->prepare($query)) {




        $statement ->bind_param(
            "ssss", $_POST['capai'], $_POST['tarikh'], $_POST['catatan'], $value
        );
    
        if($statement -> execute()){
    
         
    
    
            echo '<script>window.alert( "Berhasil ubah!"); window.location=("../pages/progress/addProgress2.php?id_pelajar='.$id_pelajar.'"); </script>';
       }
      else{
        echo '<script>window.alert( "gagal ubah!"); window.location=("../pages/progress/addProgress2.php"); </script>';
      }
    }
}
else{
    echo '<script>window.location=("../pages/progress/addProgress2.php"); </script>';
}


?>