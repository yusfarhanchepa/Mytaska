<?php

include "../lib/db/conn.php";

$query = "INSERT INTO announcement (id_taska,name) VALUES (?,?)";

if($statement = $conn ->prepare($query)){


    $statement ->bind_param(
        "ss",  $_POST['id_taska'],$_POST['name']
    );

    if($statement -> execute()){


        echo '<script>window.alert( "Data Added!"); window.location=("../pages/announcement.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Failed to Save!"); window.location=("../pages/announcement.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>












