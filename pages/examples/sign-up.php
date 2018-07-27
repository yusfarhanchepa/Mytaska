

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Bootstrap Based Admin Template - Material Design</title>
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

      <!-- sweetalert-->
      <link rel="stylesheet" href="../../plugins/sweetalert/sweetalert2.css" />
<script src="../../plugins/sweetalert/sweetalert2.js"></script>
</head>

<body class="signup-page">


    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">My<b>Taska</b></a>
            <small>Kindergarten Management System</small>
        </div>
        <div class="card">
            <div class="body">             
             <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#home_animation_1" data-toggle="tab">Register Parents</a></li>
             <li role="presentation"><a href="#profile_animation_1" data-toggle="tab">Register Admin</a></li>

             </ul>

                                    <!-- Tab panes -->
           <div class="tab-content">
           <div role="tabpanel" class="tab-pane animated flipInX active" id="home_animation_1">
         <form id="sign_up" method="POST"  action="../../model/p_username.php">
            <div class="msg"></div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">person</i>
                </span>
                <div class="form-line">
                    <input type="text" class="form-control" name="username" placeholder="Name Surname" required autofocus>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                </span>
                <div class="form-line">
                    <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="form-group">
                <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
            </div>

            <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

            <div class="m-t-25 m-b--5 align-center">
                <a href="sign-in.php">You already have a membership?</a>
            </div>
        </form>
              </div>



             <div role="tabpanel" class="tab-pane animated flipInX" id="profile_animation_1">
                                           
             
            <div class="msg">
            <button type="button"class="btn btn-block btn-lg bg-blue waves-effect" data-toggle="modal" data-target="#defaultModal1">Read Term and Request Code</button>
                       
            </div>
            <div class="input-group">
            <span class="input-group-addon">
                    <i class="material-icons">lock</i>
                </span>
             <form action="registerAdmin.php" method="POST">
                <div class="form-line">
                    <input type="text" class="form-control" name="role" placeholder="Enter Verification code" required>
                </div>
            </div>
           

            <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">ENTER</button>
            </form>

            <div class="m-t-25 m-b--5 align-center">
                <a href="sign-in.php">You already have a membership?</a>
            </div>
     
        

                                            
          </div>
          <div class="modal fade" id="defaultModal1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel"> SYARAT-SYARAT UNTUK MENDAFTAR DALAM SISTEM INI</h4>
                        </div>
                        <div class="modal-body">
                           
                            </br>
                            1.Bayaran hanyalah pada kadar tertentu.
                            </br>
                            2.Iklan tidak dibenarkan
                            </br>
                           3.Pihak kami tidak akan bertanggungjawab terhadap kehilangan data tertentu
                            </br>
                            </br>
                            Get Verifivation Code 
                            </br>
                            </br>
                           <form action="../examples/verification_code.php" method="POST">
                               Enter Phone Number (example 601999232)
                                </br>
                            <input type="number" name="no_phone" placeholder="exp : 6019..." > ---- (SMS will sent to you) ----
                        

                           
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-default waves-effect m-r-20" >REQUEST</button>


                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

           </div>

           
            </div>
        </div>
    </div>

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
    <script src="../../js/pages/examples/sign-up.js"></script>

   
</body>

</html>