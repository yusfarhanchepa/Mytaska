<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
include "../../lib/db/conn.php";
include("../../lib/db/auth.php"); //include auth.php file on all secure pages 

        if(isset($_POST['submit']))
        {

            $date=date("Y-m-d");

            $checking="Select * from attendance_records where dates='$date';";

            $hasil = $conn->query($checking);

            $num = $hasil->num_rows;

            if ($num) {

                foreach($_POST['attendance_status'] as $id=>$attendance_status)
                {
    
                    $student_name=$_POST['nama_pelajar'][$id];
                    
    
                    $query = "UPDATE attendance_records SET nama_pelajar=?, attendance_status=?, dates=? WHERE dates=? AND nama_pelajar=?";
    
                    if($statement = $conn ->prepare($query)){
                        
                        
                            $statement ->bind_param(
                                "sssss", $student_name, $attendance_status, $date, $date, $student_name
                            );
                        
                            if($statement -> execute()){
                        
                        
                                echo '<script>window.alert( "Berhasil Update!"); window.location=("../attendance/studentAttendance.php"); </script>';
                        
                                $statement ->close();
                        
                            }
                        
                            else{
                        
                        
                                echo '<script>window.alert( "Gagal Update!"); window.location=("../attendance/studentAttendance.php"); </script>';
                            }
                        
                        }
    
                    }
            }

            else {

            foreach($_POST['attendance_status'] as $id=>$attendance_status)
            {

                $student_name=$_POST['nama_pelajar'][$id];
                

                $query = "INSERT INTO attendance_records (nama_pelajar,attendance_status,dates) VALUES (?,?,?)";

                if($statement = $conn ->prepare($query)){
                    
                    
                        $statement ->bind_param(
                            "sss", $student_name, $attendance_status, $date
                        );
                    
                        if($statement -> execute()){
                    
                    
                            echo '<script>window.alert( "Berhasil simpan!"); window.location=("../attendance/studentAttendance.php"); </script>';
                    
                            $statement ->close();
                    
                        }
                    
                        else{
                    
                    
                            echo '<script>window.alert( "Gagal simpan!"); window.location=("../attendance/studentAttendance.php"); </script>';
                        }
                    
                    }

                }

            }
        }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>MyTaska - Kindergarten System</title>
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

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="../../plugins/DataTables/datatables.min.css" />

    <!-- sweetalert-->
    <link rel="stylesheet" href="../../plugins/sweetalert/sweetalert2.css" />
    <script src="../../plugins/sweetalert/sweetalert2.js"></script>
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
             <a href="../../pages/examples/logout.php" >
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
                 <li><a href="../../pages/examples/logout.php"><i class="material-icons">input</i>Sign Out</a></li>
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
                    <a href="../../indexteacher.php">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="../../pages/applycuti/applyCuti.php">
                        <i class="material-icons">text_fields</i>
                        <span>Apply for Leave</span>
                    </a>
                </li>
                <li class="active">
                    <a href="../../pages/attendance/studentAttendance.php">
                        <i class="material-icons">text_fields</i>
                        <span>Students' Attendance</span>
                    </a>
                </li>
                <li>
                    <a href="../../pages/materials/teaching-material.php">
                        <i class="material-icons">text_fields</i>
                        <span>Teaching Materials & Plans</span>
                    </a>
                </li>
                <li>
                    <a href="../../pages/calendar/calender.php">
                        <i class="material-icons">text_fields</i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>News</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <li>
                                <a href="../../pages/news/tambah_news.php">Add News</a>
                            </li>
                            <li>
                                <a href="../../pages/news/edit_news.php">Update/Delete News</a>
                            </li>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="../../pages/progress/addProgress.php">
                        <i class="material-icons">widgets</i>
                        <span>Students' Progress</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="javascript:void(0);">MyTaska - Kindergarten System</a>.
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
               
            </div>
            

                           <!-- Striped Rows -->
                           <div class="row clearfix">
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="card">
                                   <div class="header">
                                       <h3 align="center">Attendance List</h3>
                                       <h2><div class="well text-center">Date : <?php echo date("d-m-Y"); ?> </div></h2>
                                   </div>
                                   <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3><a class="btn btn-info pull-right" href="../../pages/attendance/viewAllAttendance.php"> View All Attendance </a><h3>
                                        </div>
                                   </div>
                                   <div class="body table-responsive">
                                   <form class="form-horizontal" name="form" action="../../pages/attendance/studentAttendance.php" method="post">
                                       <table id="employee_data" class="table table-striped table-bordered">
                                           <thead>
                                               <tr>
                                                   <th>#</th>
                                                   <th>Name</th>
                                                   <th>Student ID</th>
                                                   <th>Attendance Status</th>

   
                                               </tr>
                                           </thead>
                                           <tbody>
   
                                    <?php 
                                    
                                    $count=1;
                                    $yes=1;
                                    $counter=0;
                                    $no=2;
                                    $query="Select * from pelajar;";

                                    $hasil = $conn->query($query);

                                    $hitung = $hasil->num_rows;

                                    if($hitung){

                                    while ($cetak=$hasil->fetch_assoc()) { 

                                        extract($cetak);

                                        Print "<tr>";
                                        Print '<td>' .$count . "</td>";
                                        Print '<td>'. $cetak['nama_pelajar'] . "<input type='hidden' value='".$cetak['nama_pelajar']."' name='nama_pelajar[]'></td>";
                                        Print '<td>'. $cetak['no_sijil'] . "</td>";
                                        echo '<td><input name="attendance_status['.$counter.']" id="radio_'.$yes.'" type="radio" class="with-gap radio-col-red"',(isset($_POST['attendance_status'][$counter]) && $_POST['attendance_status'][$counter]=='Present' ? ' checked="checked"' : ''),' value="Present"  />
                                        <label for="radio_'.$yes.'">Present</label>
                                        <input name="attendance_status['.$counter.']" id="radio_'.$no.'" type="radio" class="with-gap radio-col-red"',(isset($_POST['attendance_status'][$counter]) && $_POST['attendance_status'][$counter]=='Absent' ? ' checked="checked"' : ''),' value="Absent" />
                                        <label for="radio_'.$no.'">Absent</label></td>';
                                    

                                    
                                        
                                    Print "</tr>";

                                    $count++;
                                    $counter++;
                                    $yes++;
                                    $yes++;
                                    $no++;
                                    $no++;
                                    
                                    
                                    }
                                    }
                                    ?>
   
   
   
                                       </table>
                                       <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" type='submit' value='submit' name='submit' class='btn bg-red waves-effect' >Submit</button>
                                        </div>
                                       </div>
                                </form>
                                   </div>
                               </div>
                           </div>
                       </div>
            <!-- #END# Striped Rows -->

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

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>

    <!-- DataTable Core Js -->
    <script type="text/javascript" src="../../plugins/DataTables/datatables.min.js"></script>

</body>

</html>

<script type="text/javascript">
        $(document).ready(function() {
            $('#employee_data').DataTable({
               
                
            });
        });
    </script>
