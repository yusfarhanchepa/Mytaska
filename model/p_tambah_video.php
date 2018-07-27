<?php

include "../lib/db/conn.php";

$query = "INSERT INTO video (id_taska,name,link ) VALUES (?,?,?)";

if($statement = $conn ->prepare($query)){


    $statement ->bind_param(
        "sss", $_POST['id_taska'], $_POST['name'], $_POST['link']
    );

    if($statement -> execute()){


        echo '<script>window.alert( "Data Added!"); window.location=("../pages/video.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Failed to Save!"); window.location=("../pages/video.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














