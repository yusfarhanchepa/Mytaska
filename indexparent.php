<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
session_start();
if(!isset($_SESSION["username"])){
header("Location: pages/examples/sign-in.php");
exit(); }


include("lib/db/conn.php"); //include auth.php file on all secure pages 
if(isset($_SESSION['id'])){
    
        $id = $_SESSION['id'];
    
        $query= "SELECT * FROM  users join bapa on  users.id=bapa.id_bapa WHERE users.id = '$id' ";
    
        $hasil = $conn->query($query);
    
        $cetak = $hasil->fetch_assoc();
    
        extract ($cetak);
    
        $hasil->free();

        $_SESSION['email_bapa']=$email_bapa;
        $_SESSION['id_bapa']=$id_bapa;
        $_SESSION['nama_bapa']=$nama_bapa;
        $_SESSION['phone_bapa']=$phone_bapa;
      
    
    
    }
    else{
        echo '<script>window.location=("senarai_kela.php"); </script>';
    }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | MyTaska Kindergarten System</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="css/css.css" rel="stylesheet">
    <link href="css/icon.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
     <!-- Top Bar -->
     <nav class="navbar">
     <div class="container-fluid">
         <div class="navbar-header">
             <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
             <a href="javascript:void(0);" class="bars"></a>
             <a class="navbar-brand" href="../indexparent.php"><?php echo $_SESSION['nama_taska']; ?></a>
         </div>
         <div class="collapse navbar-collapse" id="navbar-collapse">
             <ul class="nav navbar-nav navbar-right">
                 <!-- Call Search -->
                 <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                 <!-- #END# Call Search -->

                 <!-- Tasks -->
                 <li class="dropdown">
                     <a href="pages/examples/logout.php" >
                     Sign Out
                     </a>
           
                 </li>
                 <!-- #END# Tasks -->
                 <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
             </ul>
         </div>
     </div>
 </nav>
 <!-- #Top Bar -->
 <section>
     <!-- Left Sidebar -->
     <aside id="leftsidebar" class="sidebar">
         <!-- User Info -->
         <div class="user-info">
             <div class="image">
                 <img src="images/user.png" width="48" height="48" alt="User" />
             </div>
             <div class="info-container">
             <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?> </div>
             <div class="email"><?php echo $_SESSION['email_bapa']; ?></div>
                 <div class="btn-group user-helper-dropdown">
                     <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                     <ul class="dropdown-menu pull-right">
                         <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>

                         <li role="seperator" class="divider"></li>
                         <li><a href="pages/examples/logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="indexparent.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/newparent.php">
                            <i class="material-icons">text_fields</i>
                            <span>News</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/ibubapa/bapa.php">
                            <i class="material-icons">text_fields</i>
                            <span>Father's Information</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/ibubapa/ibu.php">
                            <i class="material-icons">text_fields</i>
                            <span>Mother's Information</span>
                        </a>
                    </li>


                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Children</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <li>
                                    <a href="pages/anak/tambah_anak.php">Add Child</a>
                                </li>
                                <li>
                                    <a href="pages/anak/senarai_anak.php">List of Children</a>
                                </li>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Payment For Fee</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <li>
                                    <a href="pages/bayar/bayar.php">Pay Fee</a>
                                </li>
                                <li>
                                    <a href="pages/bayar/rekod_bayaran.php">Record of Payment</a>
                                </li>
                            </li>

                        </ul>
                    </li>


                </ul>
            </div>
            <!-- #Menu -->
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">MyTaska - Kindergarten System</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
            <a href="pages/bayar/bayar.php">   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect  hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text"><h3>Pay Fee</h3></div>
                           
                        </div>
                    </div>
                </div>
                </a>
                <a href="pages/newparent.php"> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect  hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">News</div>
                            <div class="number count-to" data-from="0" data-to="<?php


                            include("lib/db/conn.php"); //include auth.php file on all secure pages 

                            $id_taska= $_SESSION['id_taska'];
                            $result = $conn->query("SELECT COUNT(*) AS materialCount FROM material where id_taska=$id_taska;");
                            $row = $result->fetch_assoc();
                            echo $row['materialCount']." ";

                            $result->close();
                                
                            

                            ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                </a>
            <a href="#"> <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 feature">
              
                <div class="info-box bg-pink hover-expand-effect  hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                        
                            <div class="text">Announcement</div>
                            <div class="number count-to" data-from="0" data-to="<?php


                            include("lib/db/conn.php"); //include auth.php file on all secure pages 

                                
                            $id_taska= $_SESSION['id_taska'];
                            $result = $conn->query("SELECT COUNT(*) AS announcemntCount FROM announcement where id_taska=$id_taska;");
                            $row = $result->fetch_assoc();
                            echo $row['announcemntCount']." ";

                            $result->close();
                                
                            

                            ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                </a>
      
                <a href="#"> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect  hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Video</div>
                            <div class="number count-to" data-from="0" data-to="<?php


                            include("lib/db/conn.php"); //include auth.php file on all secure pages 

                                
                            $result = $conn->query("SELECT COUNT(*) AS videoCount FROM video  where id_taska=$id_taska;");
                            $row = $result->fetch_assoc();
                            echo $row['videoCount']." ";

                            $result->close();
                                
                            

                            ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <!-- #END# Widgets -->

            <div class="row clearfix">

                <!-- Latest Social Trends -->
                <div class="col-md-6">
                <div class="card">
                    <div class="header bg-light-blue align-center">
                        <h2>
                            ANNOUNCEMENT<small></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="timer" data-loading-color="lightBlue">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                    <ol>
                    <?php
 $id_taska= $_SESSION['id_taska'];

        
            $query2="Select * from announcement  where id_taska=$id_taska order by id_announcement desc  limit 3;";

            $hasil2 = $conn->query($query2);

            $hitung2 = $hasil2->num_rows;

            if($hitung2){

            while ($cetak2=$hasil2->fetch_assoc()) { 

                extract($cetak2);

              
                Print '<li>'.$cetak2['name'].'</li>';
                        }
                    }
                    
                    ?>
                               
                        
                            </ol>
                    </div>
                </div>
            </div>
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="font-bold align-center m-b--35" >ACTIVITY</div>
                            <ul class="dashboard-stat-list">
                            <?php
                    $id_taska= $_SESSION['id_taska'];

        
            $query2="Select * from activity  where id_taska=$id_taska;";

            $hasil2 = $conn->query($query2);

            $hitung2 = $hasil2->num_rows;

            if($hitung2){

            while ($cetak2=$hasil2->fetch_assoc()) { 

                extract($cetak2);


                Print  '<li>'.$cetak2['name_activity'].'<span class="pull-right"><b>'.$cetak2['date_activity'].'</b> </span> </li>';



                        }
                    }
                    
                    ?>
                            
                              
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Video Facebook <a href="https://www.facebook.com/TASKA-CERIA-CERDAS-1545760109010938/"><?php echo $_SESSION['nama_taska']; ?></a></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="responsive">
                            <div class="row clearfix">   
                     
             <?php

        
            $query1="Select * from video where  id_taska=$id_taska   ;";

            $hasil1 = $conn->query($query1);

            $hitung1 = $hasil1->num_rows;

            if($hitung1){

            while ($cetak1=$hasil1->fetch_assoc()) { 

                extract($cetak1);

                Print   '<div class="col-md-6 facebook-responsive" >'.$cetak1['link'].'</div>';
                        }
                    }
                    
                    ?>
                           
                            </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->

            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>