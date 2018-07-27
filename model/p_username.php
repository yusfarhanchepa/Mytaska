<header>
<link rel="stylesheet" type="text/css" href="../plugins/sweetalert/sweetalert2.css">
<script type="text/javascript" src="../plugins/sweetalert/sweetalert2.js"></script>
<script type="text/javascript">

function myFn(){
        swal({ 
              title: "opps",
              text: "Username not available",
              type: "error" 
        })
        .then(function () {
           
            window.location=("../pages/examples/sign-up.php");
        });
}
</script>

</header>

<?php

include "../lib/db/conn.php";

session_start();

//Get a user's name from a form
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];


if(isset($_POST['username']))
{
 $username=$_POST['username'];

 $checkdata=" SELECT username FROM users WHERE username='$username' ";

 $query = $conn->query($checkdata);


 if(mysqli_num_rows($query)>0)
 {
     
    echo '<script type="text/javascript">
    myFn();
   </script>';
  
 }
 else
 {
    echo '<script> window.location=("../pages/examples/register.php"); </script>';
 }
 exit();
}

?>