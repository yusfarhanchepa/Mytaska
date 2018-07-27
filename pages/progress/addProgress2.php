<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
include "../../lib/db/conn.php";
include("../../lib/db/auth.php"); //include auth.php file on all secure pages 


if(isset($_GET['id_pelajar'])){
    
        $id_pelajar = $_GET['id_pelajar'];
    
        $query22= "SELECT * FROM  pelajar  WHERE id_pelajar = '$id_pelajar' ";
    
        $hasil22 = $conn->query($query22);
    
        $cetak22 = $hasil22->fetch_assoc();
    
        extract ($cetak22);
    
        $hasil22->free();
        $conn ->close();
    
    
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
            <a class="navbar-brand" href="../../indexparent.php"><?php echo $_SESSION['nama_taska']; ?></a>
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
            <div class="email"><?php echo $_SESSION['email_bapa']; ?></div>
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
                <li>
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

                <li class="active">
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



                <!-- Striped Rows -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h3 align="center">Perkembangan Kanak-Kanak
                                </h3>
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
                            <div class="body ">

                                <div class="row">
                                    <div class="col-md-1 col-md-offset-1" style="padding:0px;">Name:</div>
                                    <div class="col-md-9"><input type="text" class="form-control" value="<?php echo $nama_pelajar; ?>" readonly></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-1" style="padding:0px;">Date Of Birth:</div>
                                    <div class="col-md-4"><input type="text" class="form-control" value="<?php echo $tarikh_lahir; ?>" readonly></div>
                                </div>

                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                    <li role="presentation" class="active"><a href="#1" data-toggle="tab">BAHASA</a></li>
                                    <li role="presentation"><a href="#2" data-toggle="tab">DERIA</a></li>
                                    <li role="presentation"><a href="#3" data-toggle="tab">FIZIKAL</a></li>
                                    <li role="presentation"><a href="#4" data-toggle="tab">KREATIVITI</a></li>
                                    <li role="presentation"><a href="#5" data-toggle="tab">LOGIK</a></li>
                                    <li role="presentation"><a href="#6" data-toggle="tab">SAHSIAH</a></li>
                                    <li role="presentation"><a href="#7" data-toggle="tab">KESIMPULAN</a></li>


                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated fadeInRight active" id="1">
                                        <b>PERKEMBANGAN BAHASA, KOMUNIKASI & LITERASI AWAL</b>
                                        <p>

                                            <table class="table table-hover dashboard-task-infos">
                                                <thead>
                                                    <tr class="tbl_head">
                                                        <th width="30px">Bil</th>
                                                        <th>Perkara</th>
                                                        <th width="1%">&nbsp;</th>
                                                        <th width="80px" class="text-center">Capai</th>
                                                        <th width="135px" class="text-center">Tarikh</th>
                                                        <th width="25%" class="text-left">Catatan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                include "../../lib/db/conn.php";

                                $id=$_SESSION['id'];
                                        $sum_bahasa=0;
                                        $count=1;
                                      
                                        $yes=1;
                                        $counter=0;
                                        $no=2;
                                        $query="Select * from progress Oders WHERE id_pelajar=$id_pelajar   LIMIT 6  ;";

                                        $hasil = $conn->query($query);

                                        $hitung = $hasil->num_rows;

                                        if($hitung){

                                        while ($cetak=$hasil->fetch_assoc()) { 
                                            $total = $cetak['total'];
                                            
                                            $sum_bahasa += $total;
                                            

                                            extract($cetak);


                                            Print       '<tr>';
                                            Print '<td>' .$count . "</td>";
                                            Print    '<td>
                                            
                                            <form class="form-horizontal" name="form"  action="../../model/p_edit_progress.php?id_progress='. $cetak['id_progress'] .'&id_pelajar='. $id_pelajar .'" method="POST">
                                            
                                            <font size="3">'. $cetak['nama'] .'</font> </td>';
                                                        
                                            Print    '<td> <br></td>';
                                            echo '<td><input name="capai" id="radio_'.$yes.'" type="radio" class="with-gap radio-col-red" value="ok"  ',($capai=='ok' ? ' checked="checked"' : ''),'  />
                                            <label for="radio_'.$yes.'">Ya</label>
                                            <input name="capai" id="radio_'.$no.'" type="radio" class="with-gap radio-col-red" value="remove" ',($capai=='remove' ? ' checked="checked"' : ''),'  />
                                            <label for="radio_'.$no.'">Tidak</label></td>';
                                                          
                                                       
                                             Print   '<td class="text-center" style="position:relative;">
                                                            <input type="text" class="form-control date" name="tarikh"  value="'. $cetak['tarikh'] .'" >
                                                        </td>';
                                             Print           '<td>
                                                            <textarea type="text" name="catatan" class="form-control" >'. $cetak['catatan'] .'</textarea>
                                                        </td>';
                                             Print           '<td>
                                             <button type="submit" class="btn btn-info">Save </button>
                                             </form>
                                                    </td>';

                                            Print        '</tr>';
                         

                                            $count++;
                                            $counter++;
                                            $yes++;
                                            $yes++;
                                            $no++;
                                            $no++;
                                        }
                                        }

                                

                                        ?>
                                                </tbody>
                                            </table>




                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="2">
                                        <b>PERKEMBANGAN DERIA DAN PEMAHAMAN DUNIA PERSEKITARAN</b>
                                        <p>
                                            <table class="table table-hover" id="addChildTbl">
                                                <thead>
                                                    <tr class="tbl_head">
                                                        <th width="30px">Bil</th>
                                                        <th>Perkara</th>
                                                        <th width="1%">&nbsp;</th>
                                                        <th width="80px" class="text-center">Capai</th>
                                                        <th width="135px" class="text-center">Tarikh</th>
                                                        <th width="25%" class="text-left">Catatan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                                                                        <?php

                                                                                                include "../../lib/db/conn.php";

                                                                                            $sum_deria=0;


                                                        
                                                                                                 $id=$_SESSION['id'];
                                                        
                                                                                                $count=1;
                                                                                                
                                                                                                $query="Select * from progress Oders WHERE  id_pelajar=$id_pelajar   LIMIT 8 OFFSET 6 ;";
                                                        
                                                                                                $hasil = $conn->query($query);
                                                        
                                                                                                $hitung = $hasil->num_rows;
                                                        
                                                                                                if($hitung){
                                                        
                                                                                                    while ($cetak=$hasil->fetch_assoc()) { 
                                                                                                        $total = $cetak['total'];
                                                                                                        
                                                                                                        $sum_deria += $total;
                                                                                                        
                                                            
                                                                                                        extract($cetak);
                                                            
                                                            
                                                                                                        Print       '<tr>';
                                                                                                        Print '<td>' .$count . "</td>";
                                                                                                        Print    '<td>
                                                                                                        
                                                                                                        <form class="form-horizontal" name="form"  action="../../model/p_edit_progress.php?id_progress='. $cetak['id_progress'] .'&id_pelajar='. $id_pelajar .'" method="POST">
                                                                                                        
                                                                                                        <font size="3">'. $cetak['nama'] .'</font> </td>';
                                                                                                                    
                                                                                                        Print    '<td> <br></td>';
                                                                                                        echo '<td><input name="capai" id="radio_'.$yes.'" type="radio" class="with-gap radio-col-red" value="ok"  ',($capai=='ok' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$yes.'">Ya</label>
                                                                                                        <input name="capai" id="radio_'.$no.'" type="radio" class="with-gap radio-col-red" value="remove" ',($capai=='remove' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$no.'">Tidak</label></td>';
                                                                                                                      
                                                                                                                   
                                                                                                         Print   '<td class="text-center" style="position:relative;">
                                                                                                                        <input type="text" class="form-control date" name="tarikh"  value="'. $cetak['tarikh'] .'" >
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                                        <textarea type="text" name="catatan" class="form-control" >'. $cetak['catatan'] .'</textarea>
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                         <button type="submit" class="btn btn-info">Save </button>
                                                                                                         </form>
                                                                                                                </td>';
                                                            
                                                                                                        Print        '</tr>';
                                                                                     
                                                            
                                                                                                        $count++;
                                                                                                        $counter++;
                                                                                                        $yes++;
                                                                                                        $yes++;
                                                                                                        $no++;
                                                                                                        $no++;
                                                                                                    }
                                                                                                    }
                                                            
                                                                                            
                                                            
                                                                                                    ?>
                                                                                                            </tbody>
                                                                                                        </table>
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="3">
                                        <b>PERKEMBANGAN FIZIKAL</b>
                                        <p>
                                            <table class="table table-hover" id="addChildTbl">
                                                <thead>
                                                    <tr class="tbl_head">
                                                        <th width="30px">Bil</th>
                                                        <th>Perkara</th>
                                                        <th width="1%">&nbsp;</th>
                                                        <th width="80px" class="text-center">Capai</th>
                                                        <th width="135px" class="text-center">Tarikh</th>
                                                        <th width="25%" class="text-left">Catatan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                                                                        <?php

                                                                                        include "../../lib/db/conn.php";
                                                        
                                                                                        $id=$_SESSION['id'];

                                                                                        $sum_fizikal=0;
                                                        
                                                                                                $count=1;
                                                                                                $query="Select * from progress Oders where id_pelajar=$id_pelajar LIMIT 6 OFFSET 14  ;";
                                                        
                                                                                                $hasil = $conn->query($query);
                                                        
                                                                                                $hitung = $hasil->num_rows;
                                                        
                                                                                                if($hitung){
                                                        
                                                                                                    while ($cetak=$hasil->fetch_assoc()) { 
                                                                                                        $total = $cetak['total'];
                                                                                                        
                                                                                                        $sum_fizikal += $total;
                                                                                                        
                                                            
                                                                                                        extract($cetak);
                                                            
                                                            
                                                                                                        Print       '<tr>';
                                                                                                        Print '<td>' .$count . "</td>";
                                                                                                        Print    '<td>
                                                                                                        
                                                                                                        <form class="form-horizontal" name="form"  action="../../model/p_edit_progress.php?id_progress='. $cetak['id_progress'] .'&id_pelajar='. $id_pelajar .'" method="POST">
                                                                                                        
                                                                                                        <font size="3">'. $cetak['nama'] .'</font> </td>';
                                                                                                                    
                                                                                                        Print    '<td> <br></td>';
                                                                                                        echo '<td><input name="capai" id="radio_'.$yes.'" type="radio" class="with-gap radio-col-red" value="ok"  ',($capai=='ok' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$yes.'">Ya</label>
                                                                                                        <input name="capai" id="radio_'.$no.'" type="radio" class="with-gap radio-col-red" value="remove" ',($capai=='remove' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$no.'">Tidak</label></td>';
                                                                                                                      
                                                                                                                   
                                                                                                         Print   '<td class="text-center" style="position:relative;">
                                                                                                                        <input type="text" class="form-control date" name="tarikh"  value="'. $cetak['tarikh'] .'" >
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                                        <textarea type="text" name="catatan" class="form-control" >'. $cetak['catatan'] .'</textarea>
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                         <button type="submit" class="btn btn-info">Save </button>
                                                                                                         </form>
                                                                                                                </td>';
                                                            
                                                                                                        Print        '</tr>';
                                                                                     
                                                            
                                                                                                        $count++;
                                                                                                        $counter++;
                                                                                                        $yes++;
                                                                                                        $yes++;
                                                                                                        $no++;
                                                                                                        $no++;
                                                                                                    }
                                                                                                    }
                                                            
                                                                                            
                                                            
                                                                                                    ?>
                                                                                                            </tbody>
                                                                                                        </table>
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="4">
                                        <b>PERKEMBANGAN KREATIVITI DAN ESTETIKA</b>
                                        <p>
                                            <table class="table table-hover" id="addChildTbl">
                                                <thead>
                                                    <tr class="tbl_head">
                                                        <th width="30px">Bil</th>
                                                        <th>Perkara</th>
                                                        <th width="1%">&nbsp;</th>
                                                        <th width="80px" class="text-center">Capai</th>
                                                        <th width="135px" class="text-center">Tarikh</th>
                                                        <th width="25%" class="text-left">Catatan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                                                                        <?php
                                                                                                include "../../lib/db/conn.php";
                                                                                                        
                                                        
                                                                                        $id=$_SESSION['id'];
                                                                                        $sum_kreativiti=0;
                                                        
                                                                                                $count=1;
                                                                                                $query="Select * from progress Oders WHERE id_pelajar=$id_pelajar   LIMIT 3 OFFSET 20 ;";
                                                        
                                                                                                $hasil = $conn->query($query);
                                                        
                                                                                                $hitung = $hasil->num_rows;
                                                        
                                                                                                if($hitung){
                                                        
                                                                                                    while ($cetak=$hasil->fetch_assoc()) { 
                                                                                                        $total = $cetak['total'];
                                                                                                        
                                                                                                        $sum_kreativiti += $total;
                                                                                                        
                                                            
                                                                                                        extract($cetak);
                                                            
                                                            
                                                                                                        Print       '<tr>';
                                                                                                        Print '<td>' .$count . "</td>";
                                                                                                        Print    '<td>
                                                                                                        
                                                                                                        <form class="form-horizontal" name="form"  action="../../model/p_edit_progress.php?id_progress='. $cetak['id_progress'] .'&id_pelajar='. $id_pelajar .'" method="POST">
                                                                                                        
                                                                                                        <font size="3">'. $cetak['nama'] .'</font> </td>';
                                                                                                                    
                                                                                                        Print    '<td> <br></td>';
                                                                                                        echo '<td><input name="capai" id="radio_'.$yes.'" type="radio" class="with-gap radio-col-red" value="ok"  ',($capai=='ok' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$yes.'">Ya</label>
                                                                                                        <input name="capai" id="radio_'.$no.'" type="radio" class="with-gap radio-col-red" value="remove" ',($capai=='remove' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$no.'">Tidak</label></td>';
                                                                                                                      
                                                                                                                   
                                                                                                         Print   '<td class="text-center" style="position:relative;">
                                                                                                                        <input type="text" class="form-control date" name="tarikh"  value="'. $cetak['tarikh'] .'" >
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                                        <textarea type="text" name="catatan" class="form-control" >'. $cetak['catatan'] .'</textarea>
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                         <button type="submit" class="btn btn-info">Save </button>
                                                                                                         </form>
                                                                                                                </td>';
                                                            
                                                                                                        Print        '</tr>';
                                                                                     
                                                            
                                                                                                        $count++;
                                                                                                        $counter++;
                                                                                                        $yes++;
                                                                                                        $yes++;
                                                                                                        $no++;
                                                                                                        $no++;
                                                                                                    }
                                                                                                    }
                                                            
                                                                                            
                                                            
                                                                                                    ?>
                                                                                                            </tbody>
                                                                                                        </table>
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="5">
                                        <b>PERKEMBANGAN AWAL MATEMATIK DAN PEMIKIRAN LOGIK</b>
                                        <p>
                                            <table class="table table-hover" id="addChildTbl">
                                                <thead>
                                                    <tr class="tbl_head">
                                                        <th width="30px">Bil</th>
                                                        <th>Perkara</th>
                                                        <th width="1%">&nbsp;</th>
                                                        <th width="80px" class="text-center">Capai</th>
                                                        <th width="135px" class="text-center">Tarikh</th>
                                                        <th width="25%" class="text-left">Catatan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                                                                        <?php
                                                                                                 include "../../lib/db/conn.php";                                                       
                                                                                        $id=$_SESSION['id'];
                                                                                        $sum_logik=0;
                                                        
                                                                                                $count=1;
                                                                                                $query="Select * from progress  Oders WHERE id_pelajar=$id_pelajar   LIMIT 7 OFFSET 23 ;";
                                                        
                                                                                                $hasil = $conn->query($query);
                                                        
                                                                                                $hitung = $hasil->num_rows;
                                                        
                                                                                                if($hitung){
                                                        
                                                                                                    while ($cetak=$hasil->fetch_assoc()) { 
                                                                                                        $total = $cetak['total'];
                                                                                                        
                                                                                                        $sum_logik += $total;
                                                                                                        
                                                            
                                                                                                        extract($cetak);
                                                            
                                                            
                                                                                                        Print       '<tr>';
                                                                                                        Print '<td>' .$count . "</td>";
                                                                                                        Print    '<td>
                                                                                                        
                                                                                                        <form class="form-horizontal" name="form"  action="../../model/p_edit_progress.php?id_progress='. $cetak['id_progress'] .'&id_pelajar='. $id_pelajar .'" method="POST">
                                                                                                        
                                                                                                        <font size="3">'. $cetak['nama'] .'</font> </td>';
                                                                                                                    
                                                                                                        Print    '<td> <br></td>';
                                                                                                        echo '<td><input name="capai" id="radio_'.$yes.'" type="radio" class="with-gap radio-col-red" value="ok"  ',($capai=='ok' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$yes.'">Ya</label>
                                                                                                        <input name="capai" id="radio_'.$no.'" type="radio" class="with-gap radio-col-red" value="remove" ',($capai=='remove' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$no.'">Tidak</label></td>';
                                                                                                                      
                                                                                                                   
                                                                                                         Print   '<td class="text-center" style="position:relative;">
                                                                                                                        <input type="text" class="form-control date" name="tarikh"  value="'. $cetak['tarikh'] .'" >
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                                        <textarea type="text" name="catatan" class="form-control" >'. $cetak['catatan'] .'</textarea>
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                         <button type="submit" class="btn btn-info">Save </button>
                                                                                                         </form>
                                                                                                                </td>';
                                                            
                                                                                                        Print        '</tr>';
                                                                                     
                                                            
                                                                                                        $count++;
                                                                                                        $counter++;
                                                                                                        $yes++;
                                                                                                        $yes++;
                                                                                                        $no++;
                                                                                                        $no++;
                                                                                                    }
                                                                                                    }
                                                            
                                                                                            
                                                            
                                                                                                    ?>
                                                                                                            </tbody>
                                                                                                        </table>
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="6">
                                        <b>PERKEMBANGAN SAHSIAH SOSIOEMOSI DAN KEROHANIAN</b>
                                        <p>
                                            <table class="table table-hover" id="addChildTbl">
                                                <thead>
                                                    <tr class="tbl_head">
                                                        <th width="30px">Bil</th>
                                                        <th>Perkara</th>

                                                        <th width="80px" class="text-center">Capai</th>
                                                        <th width="135px" class="text-center">Tarikh</th>
                                                        <th width="25%" class="text-left">Catatan</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        
                                                                                                        <?php
                                                                                                include "../../lib/db/conn.php";                                                        
                                                                                        $id=$_SESSION['id'];
                                                                                        $sum_sahsiah=0;
                                                        
                                                                                                $count=1;
                                                                                                $query="Select * from progress Oders WHERE id_pelajar=$id_pelajar   LIMIT 3 OFFSET 30 ;";
                                                        
                                                                                                $hasil = $conn->query($query);
                                                        
                                                                                                $hitung = $hasil->num_rows;
                                                        
                                                                                                if($hitung){
                                                        
                                                                                                    while ($cetak=$hasil->fetch_assoc()) { 
                                                                                                        $total = $cetak['total'];
                                                                                                        
                                                                                                        $sum_sahsiah += $total;
                                                                                                        
                                                            
                                                                                                        extract($cetak);
                                                            
                                                            
                                                                                                        Print       '<tr>';
                                                                                                        Print '<td>' .$count . "</td>";
                                                                                                        Print    '<td>
                                                                                                        
                                                                                                        <form class="form-horizontal" name="form"  action="../../model/p_edit_progress.php?id_progress='. $cetak['id_progress'] .'&id_pelajar='. $id_pelajar .'" method="POST">
                                                                                                        
                                                                                                        <font size="3">'. $cetak['nama'] .'</font> </td>';
                                                                                                                    
                                                                                                        Print    '<td> <br></td>';
                                                                                                        echo '<td><input name="capai" id="radio_'.$yes.'" type="radio" class="with-gap radio-col-red" value="ok"  ',($capai=='ok' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$yes.'">Ya</label>
                                                                                                        <input name="capai" id="radio_'.$no.'" type="radio" class="with-gap radio-col-red" value="remove" ',($capai=='remove' ? ' checked="checked"' : ''),'  />
                                                                                                        <label for="radio_'.$no.'">Tidak</label></td>';
                                                                                                                      
                                                                                                                   
                                                                                                         Print   '<td class="text-center" style="position:relative;">
                                                                                                                        <input type="text" class="form-control date" name="tarikh"  value="'. $cetak['tarikh'] .'" >
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                                        <textarea type="text" name="catatan" class="form-control" >'. $cetak['catatan'] .'</textarea>
                                                                                                                    </td>';
                                                                                                         Print           '<td>
                                                                                                         <button type="submit" class="btn btn-info">Save </button>
                                                                                                         </form>
                                                                                                                </td>';
                                                            
                                                                                                        Print        '</tr>';
                                                                                     
                                                            
                                                                                                        $count++;
                                                                                                        $counter++;
                                                                                                        $yes++;
                                                                                                        $yes++;
                                                                                                        $no++;
                                                                                                        $no++;
                                                                                                    }
                                                                                                    }
                                                            
                                                                                            
                                                            
                                                                                                    ?>
                                                                                                            </tbody>
                                                                                                        </table>
                                        </p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated fadeInRight" id="7">
                                        <b>Kesimpulan</b>
                                        <p>
                                            <table class="table table-hover" id="addChildTbl">
                                                <thead>
                                                    <tr class="tbl_head">
                                                        <th>Bil</th>
                                                        <th>Kod</th>

                                                        <th>Kategori</th>
                                                        <th>Pencapaian</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                      
                                                <tr>
                                                    <td>1</td>
                                                    <td>Bahasa</td>
                                                    <td>PERKEMBANGAN BAHASA, KOMUNIKASI & LITERASI AWAL</td>
                                                    <td>  <?php echo $sum_bahasa;  ?>/6</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Deria</td>
                                                    <td>PERKEMBANGAN DERIA DAN PEMAHAMAN DUNIA PERSEKITARAN</td>
                                                    <td> <?php echo $sum_deria;   ?>/8</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Fizikal</td>
                                                    <td>PERKEMBANGAN FIZIKAL</td>
                                                    <td> <?php echo $sum_fizikal;  ?>/6</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Kreativit</td>
                                                    <td>PERKEMBANGAN KREATIVITI DAN ESTETIKA</td>
                                                    <td> <?php echo $sum_kreativiti;   ?>/3</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Logik</td>
                                                    <td>PERKEMBANGAN AWAL MATEMATIK DAN PEMIKIRAN LOGIK</td>
                                                    <td> <?php echo $sum_logik;   ?>/7</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Sahsiah</td>
                                                    <td>PERKEMBANGAN SAHSIAH SOSIOEMOSI DAN KEROHANIAN</td>
                                                    <td> <?php echo $sum_sahsiah;   ?>/3</td>
                                                </tr>
                                                                                                     
                                                    </tbody>
                                            </table>
                                        </p>
                                    </div>

                                </div>


                                <p class="align-right">
                                <a  align="left" href="senarai_anak.php" class="btn btn-info" role="button">BACK</a>
                                   </p>
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
    </body>

    </html>