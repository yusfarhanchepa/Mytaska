<?php

include "../lib/db/conn.php";

$query = "INSERT INTO tasks (id_taska,task,status,manager,progress,colour ) VALUES (?,?,?,?,?,?)";

if($statement = $conn ->prepare($query)){


    $statement ->bind_param(
        "ssssss",$_POST['id_taska'], $_POST['task'], $_POST['status'],   $_POST['manager'] ,  $_POST['progress'] ,  $_POST['colour']  
    );

    if($statement -> execute()){


        echo '<script>window.alert( "Task Added!"); window.location=("../pages/task.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Failed to add!"); window.location=("../pages/task.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














