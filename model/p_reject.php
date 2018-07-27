<?php

include "../lib/db/conn.php";

if(isset($_GET['id_staf']) ){

    $id_staf = $_GET['id_staf'];



    $query= "UPDATE cuti   SET status ='Reject' WHERE id_staf ='$id_staf'";

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