<?php

include "../../lib/db/conn.php";

include("../../lib/db/auth.php"); //include auth.php file on all secure pages 

if(isset($_GET['id_kelas'])){

    $id_kelas = $_GET['id_kelas'];

    $query= "SELECT * FROM kelas WHERE id_kelas = '$id_kelas'";

    $hasil = $conn->query($query);

    $cetak = $hasil->fetch_assoc();

    extract ($cetak);

    $hasil->free();
    $conn ->close();


}
else{
    echo '<script>window.location=("senarai_kelas.php"); </script>';
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | MyTaska Kindergarten Management System</title>
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

    <!-- Sweet Alert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
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
            <a class="navbar-brand" href="../../index.php"><?php echo $_SESSION['nama_taska']; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
             <!-- Tasks -->
             <li class="dropdown">
             <a href="../examples/logout.php" >
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
         <img src="../../images/user.png" width="48" height="48" alt="User" />
     </div>
     <div class="info-container">
     <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?> </div>
     <div class="email"><?php echo $_SESSION['email']; ?></div>
         <div class="btn-group user-helper-dropdown">
             <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
             <ul class="dropdown-menu pull-right">
                 <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>

                 <li role="seperator" class="divider"></li>
                 <li><a href="../examples/logout.php"><i class="material-icons">input</i>Sign Out</a></li>
             </ul>
         </div>
     </div>
 </div>
 <!-- #User Info -->
           <!-- Menu -->
           <div class="menu">
           <ul class="list">
               <li class="header">MAIN NAVIGATION</li>
               <li>
                   <a href="../../index.php">
                       <i class="material-icons">home</i>
                       <span>Home</span>
                   </a>
               </li>
               <li >    
               
                                       <a href="javascript:void(0);" class="menu-toggle">
                                           <i class="material-icons">text_fields</i>
                                           <span>Function</span>
                                       </a>
                                       <ul class="ml-menu">
                                       <li>
                                       <li >
                                               <a href="../news.php">News</a>
                                           </li>
                                           <li >
                                               <a href="../new.php">Teaching Material</a>
                                           </li>
                                           <li >
                                               <a href="../activity.php">Activity</a>
                                           </li>
                                           <li >
                                               <a href="../task.php">Task</a>
                                           </li>
                                           <li >
                                               <a href="../announcement.php">Announcement</a>
                                           </li>
                                           <li >
                                               <a href="../video.php">Video</a>
                                           </li>
                                       </li>
           
                                   </ul>
                                   </li>
             
               <li  class="active">
                   <a href="javascript:void(0);" class="menu-toggle">
                       <i class="material-icons">widgets</i>
                       <span>Class</span>
                   </a>
                   <ul class="ml-menu">
                       <li>
                                 <li >
                                 <a href="../../pages/kelas/tambah_kelas.php">Add Class</a>
                               </li>
                               <li  class="active">
                               <a href="../../pages/kelas/senarai_kelas.php">List Of Class</a>
                               </li>            
                       </li>
                   
                   </ul>
               </li>
               <li >
                   <a href="javascript:void(0);" class="menu-toggle">
                       <i class="material-icons">widgets</i>
                       <span>Student</span>
                   </a>
                   <ul class="ml-menu">
                       <li>
                              
                               <li >
                               <a href="../../pages/pelajar/senarai_pelajar.php">Students' List</a>
                               </li> 
                               <li >
                               <a href="../../pages/pelajar/showAttendance.php">Students' Attendance</a>
                               </li>             
                       </li>
                   
                   </ul>
               </li>
               <li>
                   <a href="javascript:void(0);" class="menu-toggle">
                       <i class="material-icons">widgets</i>
                       <span>Teachers</span>
                   </a>
                   <ul class="ml-menu">
                   <li>
                   <a href="../../pages/staf/tambah_staf.php">Add Teacher</a>
               </li>
               <li>
                   <a href="../../pages/staf/senarai_staf.php">Teachers' List</a>
               </li>
               <li>
                      <a href="../../pages/staf/teacher_leave.php">Teacher Leave</a>
                 </li>
           
                   
                   </ul>
               </li>  

               <li>
                       <a href="javascript:void(0);" class="menu-toggle">
                           <i class="material-icons">widgets</i>
                           <span>Fee</span>
                       </a>
                       <ul class="ml-menu">
                           <li>
                               <a href="../../pages/yuran/process_yuran.php">Pending</a>
                           </li>
                           <li>
                               <a href="../../pages/yuran/verified_yuran.php">Verified</a>
                           </li>

                       </ul>
                   </li>

                   <li >
                   <a href="javascript:void(0);" class="menu-toggle">
                       <i class="material-icons">widgets</i>
                       <span>Invoice</span>
                   </a>
                   <ul class="ml-menu">
                       <li >
                           <a href="../../pages/kewangan/keluar_duit.php">Add Invoice </a>
                       </li>
                       <li >
                           <a href="../../pages/kewangan/senarai_kewangan.php">List Money Out</a>
                       </li>

                   </ul>
               </li>

               <li >
                       <a href="../calendar.php">
                           <i class="material-icons">home</i>
                           <span>Calendar</span>
                       </a>
                   </li>
       
           </ul>
       </div>
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
                <h2>
                
                </h2>
            </div>
                        <!-- Horizontal Layout -->
                        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Edit Class
                            </h2>
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
                            <form class="form-horizontal" name="form"  action="../../model/p_edit_kelas.php?id_kelas=<?php echo $id_kelas; ?>" method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Class Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama_kelas" class="form-control" value="<?php echo $nama_kelas; ?>" placeholder="Class Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Teacher Name </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama_guru" class="form-control" value="<?php echo $nama_guru; ?>"  placeholder="Teacher Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Session </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            
                                         <div class="demo-radio-button">
                                            <input name="sesi"   type="radio" id="radio_7" class="radio-col-red" value="Pagi"',($sesi=='Pagi' ? ' checked="checked"' : ''),'  />
                                            <label for="radio_7">Morning</label>
                                            <input name="sesi"  type="radio" id="radio_8" class="radio-col-red" value="Petang"',($sesi=='Petang' ? ' checked="checked"' : ''),'  />
                                            <label for="radio_8">Afternoon</label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Integration </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                    
                                 <div class="demo-radio-button">
                                    <input name="integrasi"   type="radio" id="radio_13" class="radio-col-red" value="Ya"',($integrasi=='Ya' ? ' checked="checked"' : ''),'  />
                                    <label for="radio_13">Yes</label>
                                    <input name="integrasi"  type="radio" id="radio_14" class="radio-col-red" value="Tidak"',($integrasi=='Tidak' ? ' checked="checked"' : ''),'  />
                                    <label for="radio_14">No</label>
                                </div>
                                </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Capacity </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="kapasiti" class="form-control" value="<?php echo $kapasiti; ?>"  placeholder="1-20">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Note </label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="catatan" class="form-control" value="<?php echo $catatan; ?>" placeholder="---------">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->


        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>