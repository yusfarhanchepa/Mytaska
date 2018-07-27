<?php

include "../lib/db/conn.php";

$query = "INSERT INTO news (id_taska,title,details,dates,link,pictures) VALUES (?,?,?,?,?,?)";

if($statement = $conn ->prepare($query)){


    $folder = "upload/";

    $foto = $folder . basename ($_FILES['pictures']['name']);
    

    $statement ->bind_param(
        "ssssss",$_POST['id_taska'], $_POST['title'], $_POST['details'], $_POST['dates'], $_POST['link']
         , $foto
    );
 

    if($statement -> execute()){

        $upload = move_uploaded_file($_FILES['pictures']['tmp_name'], $foto );


        echo '<script>window.alert( "Successful added!");window.location=("../pages/news.php"); </script>';



        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Failed to Saved!"); window.location("../pages/news.php"); </script>';
    }

}

else{
    die("Unable to save");
}

$conn->close();

?>














