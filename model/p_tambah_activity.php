<?php

include "../lib/db/conn.php";

$query = "INSERT INTO activity (id_taska,name_activity,date_activity) VALUES (?,?,?)";

if($statement = $conn ->prepare($query)){


    $statement ->bind_param(
        "sss",  $_POST['id_taska'],$_POST['name_activity'],$_POST['date_activity']
    );

    if($statement -> execute()){


        echo '<script>window.alert( "Data Added!"); window.location=("../pages/activity.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Failed to Save!"); window.location=("../pages/activity.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>












