<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Sign In | MyTaska Kindergarten System</title>
        <!-- Favicon-->
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../../plugins/sweetalert/sweetalert2.css" />
<script src="../../plugins/sweetalert/sweetalert2.js"></script>
<script type="text/javascript">

function myFn(){
        swal({ 
              title: "opps",
              text: "Username / Password invalid !",
              type: "error" 
        })
        .then(function () {
           
            window.location=("../../pages/examples/sign-in.php");
        });
}
</script>
 
    </head>
    <div id="top-image">
    <body  class="login-page">
        <?php
    include "../../lib/db/conn.php";
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);
	
	
		
	//Checking is user existing in the database or not
    $query = "SELECT * FROM  users join taskauser   ON users.id_taska=taskauser.id_taska where users.username='$username' and users.password='$password'";
		$result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        
		 
        if($rows==1){
			$result=mysqli_fetch_array($result);
			$role = $result['role'];
            $email_bapa = $result['email_bapa'];
            $email = $result['email'];
            $id_taska = $result['id_taska'];
            $id = $result['id'];
            $nama_taska = $result['nama_taska'];
           
          
            $link="";
            


			if($role =='admin'){
				$link = '../../index.php';
				}
			   elseif($role =='teacher'){
				$link = '../../indexteacher.php';
                }
                elseif($role ==''){
                    $link = '../../indexparent.php';
                    }

			$_SESSION['username'] = $username;
            $_SESSION['email_bapa'] = $email_bapa;
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id;
            $_SESSION['id_taska'] = $id_taska;
            $_session["role"] = $role;
            $_SESSION['nama_taska'] = $nama_taska;
          
			header("Location: ".$link."");
		
		//	header("Location: index.php"); // Redirect user to index.php
            }
            
            
            
            else{
              
                echo '<script type="text/javascript">
                myFn();
               </script>';
         
				}
    }else{
?>
            <div class="login-box">
                <div class="logo">
                    <a href="../guest-index.php">My<b>Taska</b></a>
                    <small>Kindergarten Management System</small>
                </div>
                <div class="card">
                    <div class="body">
                        <form id="sign_in" method="POST">
                            <div class="msg">Sign in to start your session</div>
                            <div class="input-group">
                                <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 p-t-5">
                                    <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                                    <label for="rememberme">Remember Me</label>
                                </div>
                                <div class="col-xs-4">
                                    <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                                </div>
                            </div>
                            <div class="row m-t-15 m-b--20">
                                <div class="col-xs-6">
                                    <a href="sign-up.php">Register Now!</a>
                                </div>
                                <div class="col-xs-6 align-right">
                                    <a href="forgot-password.php">Forgot Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<script>

$(document).ready(function() {
var movementStrength = 25;
var height = movementStrength / $(window).height();
var width = movementStrength / $(window).width();
$("#login-page").mousemove(function(e){
          var pageX = e.pageX - ($(window).width() / 2);
          var pageY = e.pageY - ($(window).height() / 2);
          var newvalueX = width * pageX * -1 - 25;
          var newvalueY = height * pageY * -1 - 50;
          $('#top-image').css("background-position", newvalueX+"px     "+newvalueY+"px");
});
});</script>
            <!-- Jquery Core Js -->
            <script src="../../plugins/jquery/jquery.min.js"></script>

            <!-- Bootstrap Core Js -->
            <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

            <!-- Waves Effect Plugin Js -->
            <script src="../../plugins/node-waves/waves.js"></script>

            <!-- Validation Plugin Js -->
            <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

            <!-- Custom Js -->
            <script src="../../js/admin.js"></script>
            <script src="../../js/pages/examples/sign-in.js"></script>
            <?php } ?>

           
    </body>
    </div>

    </html>