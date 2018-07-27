<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: pages/examples/sign-in.php");
$id= $_SESSION['id'];
$nama_taska= $_SESSION['nama_taska'];
exit(); }

include("lib/db/conn.php"); //include auth.php file on all secure pages 


   

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

      <!-- sweetalert-->
      <link rel="stylesheet" href="plugins/sweetalert/sweetalert2.css" />
<script src="plugins/sweetalert/sweetalert2.js"></script>



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
                <a class="navbar-brand" href="index.php"><?php echo $_SESSION['nama_taska']; ?></a>
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
             <!-- #END# Tssasks -->
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
         <div class="email"><?php echo $_SESSION['email']; ?></div>
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
                        <a href="index.php">
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
                                    <a href="pages/news.php">News</a>
                                </li>
                                <li >
                                    <a href="pages/new.php">Teaching Material</a>
                                </li>
                                <li >
                                    <a href="pages/activity.php">Activity</a>
                                </li>
                                <li >
                                    <a href="pages/task.php">Task</a>
                                </li>
                                <li >
                                    <a href="pages/announcement.php">Announcement</a>
                                </li>
                                <li >
                                    <a href="pages/video.php">Video</a>
                                </li>
                            </li>

                        </ul>
                    </li>
                   

                    <li>    
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Class</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <li>
                                    <a href="pages/kelas/tambah_kelas.php">Add Class</a>
                                </li>
                                <li>
                                    <a href="pages/kelas/senarai_kelas.php">List Of Class</a>
                                </li>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Student</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                              
                                <li>
                                    <a href="pages/pelajar/senarai_pelajar.php">Students' List</a>
                                </li>
                                <li >
                                <a href="pages/pelajar/showAttendance.php">Students' Attendance</a>
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
                                <a href="pages/staf/tambah_staf.php">Add Teacher</a>
                            </li>
                            <li>
                                <a href="pages/staf/senarai_staf.php">Teachers' List</a>
                            </li>
                            <li>
                                <a href="pages/staf/teacher_leave.php">Teacher Leave</a>
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
                                <a href="pages/yuran/process_yuran.php">Pending</a>
                            </li>
                            <li>
                                <a href="pages/yuran/verified_yuran.php">Verified</a>
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
                            <a href="pages/kewangan/keluar_duit.php">Add Invoice </a>
                        </li>
                        <li >
                            <a href="pages/kewangan/senarai_kewangan.php">List Money Out</a>
                        </li>

                    </ul>
                </li>

                <li >
                        <a href="pages/calendar.php">
                            <i class="material-icons">home</i>
                            <span>Calendar</span>
                        </a>
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
            <a href="#"> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink  hover-expand-effect  hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">TASKS</div>
                            <div class="number count-to" data-from="0" data-to="<?php


                            include("lib/db/conn.php"); //include auth.php file on all secure pages 

                            $id_taska= $_SESSION['id_taska'];
                            $result = $conn->query("SELECT COUNT(*) AS taskCount FROM cuti where id_taska=$id_taska and status='Pending';");
                            $row = $result->fetch_assoc();
                            echo $row['taskCount']." ";

                            $result->close();
                                
                            

                            ?>
                            " data-speed="15" data-fresh-interval="20"></div>
                        </div>
                        
                    </div>
                </div>
                </a>
                <a href="pages/yuran/process_yuran.php"> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue hover-expand-effect   hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">PENDING PAYMENT</div>
                            <div class="number count-to" data-from="0" data-to="

                           <?php
                            include("lib/db/conn.php"); //include auth.php file on all secure pages 
                            $id_taska= $_SESSION['id_taska'];
                                
                            $result = $conn->query("SELECT COUNT(*) AS bayaranCount FROM bayaran  where id_taska=$id_taska AND status='In Processing' ;");
                            $row = $result->fetch_assoc();
                            echo $row['bayaranCount']." ";

                            $result->close();
                             ?>

                             
                            " data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                </a>
                <a href="pages/new.php"> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect   hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text"> Teaching Material</div>
                            <div class="number count-to" data-from="0" data-to="<?php


                            include("lib/db/conn.php"); //include auth.php file on all secure pages 
                            $id_taska= $_SESSION['id_taska'];
                                
                            $result = $conn->query("SELECT COUNT(*) AS materialCount FROM material    where id_taska=$id_taska;");
                            $row = $result->fetch_assoc();
                            echo $row['materialCount']." ";

                            $result->close();
                                
                            

                            ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                </a>
                <a href="pages/pelajar/senarai_pelajar.php"> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect  hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">PELAJAR</div>
                            <div class="number count-to" data-from="0" data-to="<?php


                            include("lib/db/conn.php"); //include auth.php file on all secure pages 

                            $id_taska= $_SESSION['id_taska']; 
                            $result = $conn->query("SELECT COUNT(*) AS pelajarCount FROM pelajar  where id_taska=$id_taska;");
                            $row = $result->fetch_assoc();
                            echo $row['pelajarCount']." ";

                            $result->close();
                                
                            

                            ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage 
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
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
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
             #END# CPU Usage -->


            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header bg-pink align-center">
                            <h2>TASK INFOS</h2>
                          
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Manager</th>
                                            <th>Progress</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    


                                            <?php
                                            $nama_taska= $_SESSION['nama_taska'];

                                            include("lib/db/conn.php"); 
                                            $id_taska= $_SESSION['id_taska'];

                                            $count=1;
                                            $query="Select * from tasks where id_taska=$id_taska;";

                                            $hasil = $conn->query($query);

                                            $hitung = $hasil->num_rows;

                                            if($hitung){

                                            while ($cetak=$hasil->fetch_assoc()) { 

                                                extract($cetak);

                                                                        
                                                Print "<tr>";
                                                Print '<td>' .$count . "</td>";
                                                Print '<td>'. $cetak['task'] . "</td>";
                                                Print '<td><span class="label bg-'. $cetak['colour'] .'">'. $cetak['status'] .'</span></td>';
                                                Print '<td>'. $cetak['manager'] . "</td>";
                                                Print '<td><div class="progress">
                                                <div class="progress-bar bg-'. $cetak['colour'] .'" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width:' . $cetak['progress'] .'%"></div>
                                                </div> </td>';
                                                Print '<td>  <a href="#"  onclick="hapus_task('.$cetak['id_task'].')" class="btn btn-danger" role="button">delete</a>
                                                </td>';
                                                Print "</tr>";
                                            
                                              $count++;
                                              }
                                            }
                                            
                                            ?>

                                                            <script>
                                                                
                                                                function hapus_task(id_task) {
                                                                
                                                                    swal({
                                                                                title: 'Are you sure?',
                                                                                text: "You won't be able to revert this!",
                                                                                type: 'warning',
                                                                                showCancelButton: true,
                                                                                confirmButtonColor: '#3085d6',
                                                                                cancelButtonColor: '#d33',
                                                                                confirmButtonText: 'Yes, delete it!'
                                                                            }).then(function () {
                                                                                swal(
                                                                                'Deleted!',
                                                                                'Your file has been deleted.',
                                                                                'success'
                                                                                )
                                                                                window.location = "model/p_hapus_task.php?id_task=" +id_task;

                                                                            })

                                                                }
                                                                </script>
                                   
                                    </tbody>
                                </table>
                                            
                                        
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
     
                                    <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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

        
            $query2="Select * from announcement  where id_taska=$id_taska  order by id_announcement desc  limit 3 ;";

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
            </div>
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff" data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)" data-fill-Color="rgba(0, 188, 212, 0)">
                                Kewangan Semasa
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>1200</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>3 872</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>26 582</b> <small>USERS</small></span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Visitors -->
                <!-- Latest Social Trends -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              
                <div class="card">
                    <div class="body bg-light-blue">
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
                <!-- #END# Latest Social Trends -->
                <!-- Answered Tickets -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">ANSWERED TICKETS</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>12</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>15</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>90</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b>342</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST YEAR
                                    <span class="pull-right"><b>4 225</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    ALL
                                    <span class="pull-right"><b>8 752</b> <small>TICKETS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
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

<!-- <script>
  

  
        swal({
  title: 'Sweet!',
  text: 'Have a greet day.',
  imageUrl: 'images/welcome.png',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
  animation: false
})

    

  
    </script> -->
</html>


        

                                        