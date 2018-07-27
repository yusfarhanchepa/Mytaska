<?php

include "../lib/db/conn.php";


if(isset($_GET['id_news'])){
    
$id_news = $_GET['id_news'];

$query = "UPDATE news SET title=?,details=?,dates=?,picture=? WHERE id_news = '$id_news'";

if($statement = $conn ->prepare($query)){


    $folder = "upload/";
    
    $foto = $folder . basename ($_FILES['picture']['name']);

    $statement ->bind_param(
        "ssss", $_POST['title'], $_POST['details'],$_POST['dates'], $foto
    );

    if($statement -> execute()){

        $upload = move_uploaded_file($_FILES['picture']['tmp_name'], $foto );

        echo '<script>window.alert( "Edit Success!"); window.location=("../pages/news/edit_news.php"); </script>';

        $statement ->close();

    }

    else{


        echo '<script>window.alert( "Fail to Edit!"); window.location=("../pages/news/edit_news.php");</script>';
    }

}


else{
    die("Unable to save");
}

}
else{
    echo '<script>window.location=("../pages/news/edit_news.php"); </script>';
}

$conn->close();

?>














