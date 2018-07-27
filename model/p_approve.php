<?php

include "../lib/db/conn.php";

if(isset($_GET['id_staf']) && ($_GET['cuti'])&& ($_GET['no_of_days'])){

    $id_staf = $_GET['id_staf'];
    $cuti = $_GET['cuti'];
    $no_of_days = $_GET['no_of_days'];

    $remaining_day = $cuti-$no_of_days;


    $query= "UPDATE cuti join staf  SET cuti.status ='Approved', staf.cuti='$remaining_day' WHERE staf.id_staf ='$id_staf' and cuti.id_staf ='$id_staf'";

    if ($statement= $conn->prepare($query)) {

    
        if($statement -> execute()){
    
                 // Authorisation details.
                 

    
     
            echo '<script> window.location=("../pages/staf/teacher_leave.php"); </script>';
       }
      else{
        echo '<script>window.alert( "Cannot Verified!"); window.location=("../pages/yuran/process_yuran.php"); </script>';
      }
    }
}
else{
    echo '<script>window.alert( "Check Phone Number!");window.location=("../pages/yuran/process_yuran.php"); </script>';
}


?>