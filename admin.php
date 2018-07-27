<?php

session_start;

if (!isset($_SESSION['id_user'])){
    echo '<script>window.alert( "login dahulu!"); window.location=("../view/admin.php"); </script>';
    
}

else {
    # code.


    include "../lib/db/conn.php";

    $id_user=$_SESSION['id_user'];

    $iv_user=$_SESSION['iv_user'];

    $query= "SELECET *FROM user WHERE id_user = '$id_user'";

    $hasil = $conn->query($query);

    $cetak = $hasil->fetch_assoc();

    extract($hasil);

}

?>

<html>
    <body>
       
        <h2>hello <?php echo $username ; ?></h2>
    </body>
</html>