<?php

include "../../lib/db/conn.php";
include("../../lib/db/auth.php"); //include auth.php file on all secure pages 

  //invoice.php  


  $statement = $connect->prepare("
    SELECT * FROM tbl_order 
    ORDER BY order_id DESC
  ");

  $statement->execute();

  $all_result = $statement->fetchAll();

  $total_rows = $statement->rowCount();

  if(isset($_POST["create_invoice"]))
  { 
    $order_total_before_tax = 0;
    $order_total_tax1 = 0;
    $order_total_tax2 = 0;
    $order_total_tax3 = 0;
    $order_total_tax = 0;
    $order_total_after_tax = 0;
    $statement = $connect->prepare("
      INSERT INTO tbl_order 
        (order_no, order_date, order_receiver_name, order_receiver_address, order_total_before_tax, order_total_tax1, order_total_tax2, order_total_tax3, order_total_tax, order_total_after_tax, order_datetime)
        VALUES (:order_no, :order_date, :order_receiver_name, :order_receiver_address, :order_total_before_tax, :order_total_tax1, :order_total_tax2, :order_total_tax3, :order_total_tax, :order_total_after_tax, :order_datetime)
    ");
    $statement->execute(
      array(
          ':order_no'               =>  trim($_POST["order_no"]),
          ':order_date'             =>  trim($_POST["order_date"]),
          ':order_receiver_name'          =>  trim($_POST["order_receiver_name"]),
          ':order_receiver_address'       =>  trim($_POST["order_receiver_address"]),
          ':order_total_before_tax'       =>  $order_total_before_tax,
          ':order_total_tax1'           =>  $order_total_tax1,
          ':order_total_tax2'           =>  $order_total_tax2,
          ':order_total_tax3'           =>  $order_total_tax3,
          ':order_total_tax'            =>  $order_total_tax,
          ':order_total_after_tax'        =>  $order_total_after_tax,
          ':order_datetime'           =>  date("Y-m-d")
      )
    );

      $statement = $connect->query("SELECT LAST_INSERT_ID()");
      $order_id = $statement->fetchColumn();

      for($count=0; $count<$_POST["total_item"]; $count++)
      {
        $order_total_before_tax = $order_total_before_tax + floatval(trim($_POST["order_item_actual_amount"][$count]));

        $order_total_tax1 = $order_total_tax1 + floatval(trim($_POST["order_item_tax1_amount"][$count]));

        $order_total_tax2 = $order_total_tax2 + floatval(trim($_POST["order_item_tax2_amount"][$count]));

        $order_total_tax3 = $order_total_tax3 + floatval(trim($_POST["order_item_tax3_amount"][$count]));

        $order_total_after_tax = $order_total_after_tax + floatval(trim($_POST["order_item_final_amount"][$count]));

        $statement = $connect->prepare("
          INSERT INTO tbl_order_item 
          (order_id, item_name, order_item_quantity, order_item_price, order_item_actual_amount, order_item_tax1_rate, order_item_tax1_amount, order_item_tax2_rate, order_item_tax2_amount, order_item_tax3_rate, order_item_tax3_amount, order_item_final_amount)
          VALUES (:order_id, :item_name, :order_item_quantity, :order_item_price, :order_item_actual_amount, :order_item_tax1_rate, :order_item_tax1_amount, :order_item_tax2_rate, :order_item_tax2_amount, :order_item_tax3_rate, :order_item_tax3_amount, :order_item_final_amount)
        ");

        $statement->execute(
          array(
            ':order_id'               =>  $order_id,
            ':item_name'              =>  trim($_POST["item_name"][$count]),
            ':order_item_quantity'          =>  trim($_POST["order_item_quantity"][$count]),
            ':order_item_price'           =>  trim($_POST["order_item_price"][$count]),
            ':order_item_actual_amount'       =>  trim($_POST["order_item_actual_amount"][$count]),
            ':order_item_tax1_rate'         =>  trim($_POST["order_item_tax1_rate"][$count]),
            ':order_item_tax1_amount'       =>  trim($_POST["order_item_tax1_amount"][$count]),
            ':order_item_tax2_rate'         =>  trim($_POST["order_item_tax2_rate"][$count]),
            ':order_item_tax2_amount'       =>  trim($_POST["order_item_tax2_amount"][$count]),
            ':order_item_tax3_rate'         =>  trim($_POST["order_item_tax3_rate"][$count]),
            ':order_item_tax3_amount'       =>  trim($_POST["order_item_tax3_amount"][$count]),
            ':order_item_final_amount'        =>  trim($_POST["order_item_final_amount"][$count])
          )
        );
      }
      $order_total_tax = $order_total_tax1 + $order_total_tax2 + $order_total_tax3;

      $statement = $connect->prepare("
        UPDATE tbl_order 
        SET order_total_before_tax = :order_total_before_tax, 
        order_total_tax1 = :order_total_tax1, 
        order_total_tax2 = :order_total_tax2, 
        order_total_tax3 = :order_total_tax3, 
        order_total_tax = :order_total_tax, 
        order_total_after_tax = :order_total_after_tax 
        WHERE order_id = :order_id 
      ");
      $statement->execute(
        array(
          ':order_total_before_tax'     =>  $order_total_before_tax,
          ':order_total_tax1'         =>  $order_total_tax1,
          ':order_total_tax2'         =>  $order_total_tax2,
          ':order_total_tax3'         =>  $order_total_tax3,
          ':order_total_tax'          =>  $order_total_tax,
          ':order_total_after_tax'      =>  $order_total_after_tax,
          ':order_id'             =>  $order_id
        )
      );
      header("location:invoice.php");
  }

  if(isset($_POST["update_invoice"]))
  {
    $order_total_before_tax = 0;
      $order_total_tax1 = 0;
      $order_total_tax2 = 0;
      $order_total_tax3 = 0;
      $order_total_tax = 0;
      $order_total_after_tax = 0;
      
      $order_id = $_POST["order_id"];
      
      
      
      $statement = $connect->prepare("
                DELETE FROM tbl_order_item WHERE order_id = :order_id
            ");
            $statement->execute(
                array(
                    ':order_id'       =>      $order_id
                )
            );
      
      for($count=0; $count<$_POST["total_item"]; $count++)
      {
        $order_total_before_tax = $order_total_before_tax + floatval(trim($_POST["order_item_actual_amount"][$count]));
        $order_total_tax1 = $order_total_tax1 + floatval(trim($_POST["order_item_tax1_amount"][$count]));
        $order_total_tax2 = $order_total_tax2 + floatval(trim($_POST["order_item_tax2_amount"][$count]));
        $order_total_tax3 = $order_total_tax3 + floatval(trim($_POST["order_item_tax3_amount"][$count]));
        $order_total_after_tax = $order_total_after_tax + floatval(trim($_POST["order_item_final_amount"][$count]));
        $statement = $connect->prepare("
          INSERT INTO tbl_order_item 
          (order_id, item_name, order_item_quantity, order_item_price, order_item_actual_amount, order_item_tax1_rate, order_item_tax1_amount, order_item_tax2_rate, order_item_tax2_amount, order_item_tax3_rate, order_item_tax3_amount, order_item_final_amount) 
          VALUES (:order_id, :item_name, :order_item_quantity, :order_item_price, :order_item_actual_amount, :order_item_tax1_rate, :order_item_tax1_amount, :order_item_tax2_rate, :order_item_tax2_amount, :order_item_tax3_rate, :order_item_tax3_amount, :order_item_final_amount)
        ");
        $statement->execute(
          array(
            ':order_id'                 =>  $order_id,
            ':item_name'                =>  trim($_POST["item_name"][$count]),
            ':order_item_quantity'          =>  trim($_POST["order_item_quantity"][$count]),
            ':order_item_price'            =>  trim($_POST["order_item_price"][$count]),
            ':order_item_actual_amount'     =>  trim($_POST["order_item_actual_amount"][$count]),
            ':order_item_tax1_rate'         =>  trim($_POST["order_item_tax1_rate"][$count]),
            ':order_item_tax1_amount'       =>  trim($_POST["order_item_tax1_amount"][$count]),
            ':order_item_tax2_rate'         =>  trim($_POST["order_item_tax2_rate"][$count]),
            ':order_item_tax2_amount'       =>  trim($_POST["order_item_tax2_amount"][$count]),
            ':order_item_tax3_rate'         =>  trim($_POST["order_item_tax3_rate"][$count]),
            ':order_item_tax3_amount'       =>  trim($_POST["order_item_tax3_amount"][$count]),
            ':order_item_final_amount'      =>  trim($_POST["order_item_final_amount"][$count])
          )
        );
        $result = $statement->fetchAll();
      }
      $order_total_tax = $order_total_tax1 + $order_total_tax2 + $order_total_tax3;
      
      $statement = $connect->prepare("
        UPDATE tbl_order 
        SET order_no = :order_no, 
        order_date = :order_date, 
        order_receiver_name = :order_receiver_name, 
        order_receiver_address = :order_receiver_address, 
        order_total_before_tax = :order_total_before_tax, 
        order_total_tax1 = :order_total_tax1, 
        order_total_tax2 = :order_total_tax2, 
        order_total_tax3 = :order_total_tax3, 
        order_total_tax = :order_total_tax, 
        order_total_after_tax = :order_total_after_tax 
        WHERE order_id = :order_id 
      ");
      
      $statement->execute(
        array(
          ':order_no'               =>  trim($_POST["order_no"]),
          ':order_date'             =>  trim($_POST["order_date"]),
          ':order_receiver_name'        =>  trim($_POST["order_receiver_name"]),
          ':order_receiver_address'     =>  trim($_POST["order_receiver_address"]),
          ':order_total_before_tax'     =>  $order_total_before_tax,
          ':order_total_tax1'          =>  $order_total_tax1,
          ':order_total_tax2'          =>  $order_total_tax2,
          ':order_total_tax3'          =>  $order_total_tax3,
          ':order_total_tax'           =>  $order_total_tax,
          ':order_total_after_tax'      =>  $order_total_after_tax,
          ':order_id'               =>  $order_id
        )
      );
      
      $result = $statement->fetchAll();
            
      header("location:invoice.php");
  }

  if(isset($_GET["delete"]) && isset($_GET["id"]))
  {
    $statement = $connect->prepare("DELETE FROM tbl_order WHERE order_id = :id");
    $statement->execute(
      array(
        ':id'       =>      $_GET["id"]
      )
    );
    $statement = $connect->prepare(
      "DELETE FROM tbl_order_item WHERE order_id = :id");
    $statement->execute(
      array(
        ':id'       =>      $_GET["id"]
      )
    );
    header("location:invoice.php");
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


        <link rel="stylesheet" href="css/datepicker.css">
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

        <script src="../../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

        <script src="js/bootstrap.min.js"></script>

        <script src="js/jquery.dataTables.min.js"></script>

        <script src="js/dataTables.bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

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

        <script src="js/bootstrap-datepicker1.js"></script>
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
                        <!-- Notifications -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>12 new members joined</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-cyan">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>4 sales made</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 22 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-red">
                                                    <i class="material-icons">delete_forever</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-orange">
                                                    <i class="material-icons">mode_edit</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy</b> changed name</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 2 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-blue-grey">
                                                    <i class="material-icons">comment</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> commented your post</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 4 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">cached</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> updated status</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-purple">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>Settings updated</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> Yesterday
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Notifications -->
                        <!-- Tasks -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">flag</i>
                                <span class="label-count">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">TASKS</li>
                                <li class="body">
                                    <ul class="menu tasks">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Footer display issue
                                                    <small>32%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Make new buttons
                                                    <small>45%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Create new dashboard
                                                    <small>54%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Solve transition issue
                                                    <small>65%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Answer GitHub questions
                                                    <small>92%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Tasks</a>
                                </li>
                            </ul>
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
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
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

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">widgets</i>
                                <span>Class</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <li>
                                        <a href="../../pages/kelas/tambah_kelas.php">Add Class</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/kelas/senarai_kelas.php">List Of Class</a>
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
                                        <a href="../../pages/pelajar/tambah_pelajar.php">Add Student</a>
                                    </li>
                                    <li>
                                        <a href="../../pages/pelajar/senarai_pelajar.php">List Of Student</a>
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
                                    <a href="../../pages/staf/senarai_staf.php">List Of Teachers</a>
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

                        <li class="active">
                            <a href="../../pages/kewangan/invoice.php">
                                <i class="material-icons">text_fields</i>
                                <span>Invoice</span>
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
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <?php
      if(isset($_GET["add"]))
      {
      ?>
                                <form method="post" id="invoice_form">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td colspan="2" align="center">
                                                    <h2 style="margin-top:10.5px">Create Invoice</h2>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            To,<br />
                                                            <b>RECEIVER (BILL TO)</b><br />
                                                            <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm" placeholder="Enter Receiver Name" />
                                                            <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" placeholder="Enter Billing Address"></textarea>
                                                        </div>
                                                        <div class="col-md-4">
                                                            Reverse Charge<br />
                                                            <input type="text" name="order_no" id="order_no" class="form-control input-sm" placeholder="Enter Invoice No." />
                                                            <input type="text" name="order_date" id="order_date" class="form-control input-sm" readonly placeholder="Select Invoice Date" />
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="body table-responsive">
                                                    <table id="invoice-item-table" class="table table-bordered">
                                                        <tr>
                                                            <th width="7%">Sr No.</th>
                                                            <th width="20%">Item Name</th>
                                                            <th width="5%">Quantity</th>
                                                            <th width="10%">Price</th>
                                                            <th width="10%">Actual Amt.</th>
                                                            <th width="20.5%" colspan="2">Tax1 (%)</th>
                                                            <th width="20.5%" colspan="2">Tax2 (%)</th>
                                                            <th width="18.5%" colspan="2">Tax3 (%)</th>
                                                            <th width="12.5%" rowspan="2">Total</th>
                                                            <th width="3%" rowspan="2"></th>
                                                        </tr>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>Rate</th>
                                                            <th>Amt.</th>
                                                            <th>Rate</th>
                                                            <th>Amt.</th>
                                                            <th>Rate</th>
                                                            <th>Amt.</th>
                                                        </tr>
                                                        <tr>
                                                            <td><span id="sr_no">1</span></td>
                                                            <td><input type="text" name="item_name[]" id="item_name1" class="form-control input-sm" /></td>
                                                            <td><input type="text" name="order_item_quantity[]" id="order_item_quantity1" data-srno="1" class="form-control input-sm order_item_quantity" /></td>
                                                            <td><input type="text" name="order_item_price[]" id="order_item_price1" data-srno="1" class="form-control input-sm number_only order_item_price" /></td>
                                                            <td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount1" data-srno="1" class="form-control input-sm order_item_actual_amount" readonly /></td>
                                                            <td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax1_rate" /></td>
                                                            <td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax1_amount" /></td>
                                                            <td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax2_rate" /></td>
                                                            <td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax2_amount" /></td>
                                                            <td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate1" data-srno="1" class="form-control input-sm number_only order_item_tax3_rate" /></td>
                                                            <td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount1" data-srno="1" readonly class="form-control input-sm order_item_tax3_amount" /></td>
                                                            <td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount1" data-srno="1" readonly class="form-control input-sm order_item_final_amount" /></td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                    
                                                    <div align="right">
                                                        <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right"><b>Total</td>
                <td align="right"><b><span id="final_total_amt"></span></b></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="center">
                                                    <input type="hidden" name="total_item" id="total_item" value="1" />
                                                    <input type="submit" name="create_invoice" id="create_invoice" class="btn btn-info" value="Create" />
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </form>
                                <script>
                                    $(document).ready(function() {
                                        var final_total_amt = $('#final_total_amt').text();
                                        var count = 1;

                                        $(document).on('click', '#add_row', function() {
                                            count++;
                                            $('#total_item').val(count);
                                            var html_code = '';
                                            html_code += '<tr id="row_id_' + count + '">';
                                            html_code += '<td><span id="sr_no">' + count + '</span></td>';

                                            html_code += '<td><input type="text" name="item_name[]" id="item_name' + count + '" class="form-control input-sm" /></td>';

                                            html_code += '<td><input type="text" name="order_item_quantity[]" id="order_item_quantity' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_quantity" /></td>';
                                            html_code += '<td><input type="text" name="order_item_price[]" id="order_item_price' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_price" /></td>';
                                            html_code += '<td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount' + count + '" data-srno="' + count + '" class="form-control input-sm order_item_actual_amount" readonly /></td>';

                                            html_code += '<td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_tax1_rate" /></td>';
                                            html_code += '<td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm order_item_tax1_amount" /></td>';
                                            html_code += '<td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_tax2_rate" /></td>';
                                            html_code += '<td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm order_item_tax2_amount" /></td>';
                                            html_code += '<td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_tax3_rate" /></td>';
                                            html_code += '<td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm order_item_tax3_amount" /></td>';
                                            html_code += '<td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm order_item_final_amount" /></td>';
                                            html_code += '<td><button type="button" name="remove_row" id="' + count + '" class="btn btn-danger btn-xs remove_row">X</button></td>';
                                            html_code += '</tr>';
                                            $('#invoice-item-table').append(html_code);
                                        });

                                        $(document).on('click', '.remove_row', function() {
                                            var row_id = $(this).attr("id");
                                            var total_item_amount = $('#order_item_final_amount' + row_id).val();
                                            var final_amount = $('#final_total_amt').text();
                                            var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
                                            $('#final_total_amt').text(result_amount);
                                            $('#row_id_' + row_id).remove();
                                            count--;
                                            $('#total_item').val(count);
                                        });

                                        function cal_final_total(count) {
                                            var final_item_total = 0;
                                            for (j = 1; j <= count; j++) {
                                                var quantity = 0;
                                                var price = 0;
                                                var actual_amount = 0;
                                                var tax1_rate = 0;
                                                var tax1_amount = 0;
                                                var tax2_rate = 0;
                                                var tax2_amount = 0;
                                                var tax3_rate = 0;
                                                var tax3_amount = 0;
                                                var item_total = 0;
                                                quantity = $('#order_item_quantity' + j).val();
                                                if (quantity > 0) {
                                                    price = $('#order_item_price' + j).val();
                                                    if (price > 0) {
                                                        actual_amount = parseFloat(quantity) * parseFloat(price);
                                                        $('#order_item_actual_amount' + j).val(actual_amount);
                                                        tax1_rate = $('#order_item_tax1_rate' + j).val();
                                                        if (tax1_rate > 0) {
                                                            tax1_amount = parseFloat(actual_amount) * parseFloat(tax1_rate) / 100;
                                                            $('#order_item_tax1_amount' + j).val(tax1_amount);
                                                        }
                                                        tax2_rate = $('#order_item_tax2_rate' + j).val();
                                                        if (tax2_rate > 0) {
                                                            tax2_amount = parseFloat(actual_amount) * parseFloat(tax2_rate) / 100;
                                                            $('#order_item_tax2_amount' + j).val(tax2_amount);
                                                        }
                                                        tax3_rate = $('#order_item_tax3_rate' + j).val();
                                                        if (tax3_rate > 0) {
                                                            tax3_amount = parseFloat(actual_amount) * parseFloat(tax3_rate) / 100;
                                                            $('#order_item_tax3_amount' + j).val(tax3_amount);
                                                        }
                                                        item_total = parseFloat(actual_amount) + parseFloat(tax1_amount) + parseFloat(tax2_amount) + parseFloat(tax3_amount);
                                                        final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                                                        $('#order_item_final_amount' + j).val(item_total);
                                                    }
                                                }
                                            }
                                            $('#final_total_amt').text(final_item_total);
                                        }



                                        $(document).on('blur', '.order_item_price', function() {
                                            cal_final_total(count);
                                        });

                                        $(document).on('blur', '.order_item_tax1_rate', function() {
                                            cal_final_total(count);
                                        });

                                        $(document).on('blur', '.order_item_tax2_rate', function() {
                                            cal_final_total(count);
                                        });

                                        $(document).on('blur', '.order_item_tax3_rate', function() {
                                            cal_final_total(count);
                                        });




                                        $('#create_invoice').click(function() {
                                            if ($.trim($('#order_receiver_name').val()).length == 0) {
                                                alert("Please Enter Reciever Name");
                                                return false;
                                            }

                                            if ($.trim($('#order_no').val()).length == 0) {
                                                alert("Please Enter Invoice Number");
                                                return false;
                                            }

                                            if ($.trim($('#order_date').val()).length == 0) {
                                                alert("Please Select Invoice Date");
                                                return false;
                                            }

                                            for (var no = 1; no <= count; no++) {
                                                if ($.trim($('#item_name' + no).val()).length == 0) {
                                                    alert("Please Enter Item Name");
                                                    $('#item_name' + no).focus();
                                                    return false;
                                                }

                                                if ($.trim($('#order_item_quantity' + no).val()).length == 0) {
                                                    alert("Please Enter Quantity");
                                                    $('#order_item_quantity' + no).focus();
                                                    return false;
                                                }

                                                if ($.trim($('#order_item_price' + no).val()).length == 0) {
                                                    alert("Please Enter Price");
                                                    $('#order_item_price' + no).focus();
                                                    return false;
                                                }

                                            }

                                            $('#invoice_form').submit();

                                        });





                                    });
                                </script>
                                <?php
      }
      elseif(isset($_GET["update"]) && isset($_GET["id"]))
      {
        $statement = $connect->prepare("
          SELECT * FROM tbl_order 
            WHERE order_id = :order_id
            LIMIT 1
        ");
        $statement->execute(
          array(
            ':order_id'       =>  $_GET["id"]
            )
          );
        $result = $statement->fetchAll();
        foreach($result as $row)
        {
        ?>
                                    <script>
                                        $(document).ready(function() {
                                            $('#order_no').val("<?php echo $row["
                                                order_no "]; ?>");
                                            $('#order_date').val("<?php echo $row["
                                                order_date "]; ?>");
                                            $('#order_receiver_name').val("<?php echo $row["
                                                order_receiver_name "]; ?>");
                                            $('#order_receiver_address').val("<?php echo $row["
                                                order_receiver_address "]; ?>");
                                        });
                                    </script>








                                    <form method="post" id="invoice_form">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td colspan="2" align="center">
                                                        <h2 style="margin-top:10.5px">Edit Invoice</h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                To,<br />
                                                                <b>RECEIVER (BILL TO)</b><br />
                                                                <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm" placeholder="Enter Receiver Name" />
                                                                <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" placeholder="Enter Billing Address"></textarea>
                                                            </div>
                                                            <div class="col-md-4">
                                                                Reverse Charge<br />
                                                                <input type="text" name="order_no" id="order_no" class="form-control input-sm" placeholder="Enter Invoice No." />
                                                                <input type="text" name="order_date" id="order_date" class="form-control input-sm" readonly placeholder="Select Invoice Date" />
                                                            </div>
                                                        </div>
                                                        <br />
                                                        <table id="invoice-item-table" class="table table-bordered">
                                                            <tr>
                                                                <th width="7%">Sr No.</th>
                                                                <th width="20%">Item Name</th>
                                                                <th width="5%">Quantity</th>
                                                                <th width="10%">Price</th>
                                                                <th width="10%">Actual Amt.</th>
                                                                <th width="12.5%" colspan="2">Tax1 (%)</th>
                                                                <th width="12.5%" colspan="2">Tax2 (%)</th>
                                                                <th width="12.5%" colspan="2">Tax3 (%)</th>
                                                                <th width="12.5%" rowspan="2">Total</th>
                                                                <th width="3%" rowspan="2"></th>
                                                            </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Rate</th>
                                                                <th>Amt.</th>
                                                                <th>Rate</th>
                                                                <th>Amt.</th>
                                                                <th>Rate</th>
                                                                <th>Amt.</th>
                                                            </tr>
                                                            <?php
                    $statement = $connect->prepare("
                      SELECT * FROM tbl_order_item 
                      WHERE order_id = :order_id
                    ");
                    $statement->execute(
                      array(
                        ':order_id'       =>  $_GET["id"]
                      )
                    );
                    $item_result = $statement->fetchAll();
                    $m = 0;
                    foreach($item_result as $sub_row)
                    {
                      $m = $m + 1;
                    ?>
                                                                <tr>
                                                                    <td><span id="sr_no"><?php echo $m; ?></span></td>
                                                                    <td><input type="text" name="item_name[]" id="item_name<?php echo $m; ?>" class="form-control input-sm" value="<?php echo $sub_row[" item_name "]; ?>" /></td>
                                                                    <td><input type="text" name="order_item_quantity[]" id="order_item_quantity<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm order_item_quantity" value="{{{PHP14}}}"
                                                                        /></td>
                                                                    <td><input type="text" name="order_item_price[]" id="order_item_price<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm number_only order_item_price" value="<?php echo $sub_row["
                                                                            order_item_price "]; ?>" /></td>
                                                                    <td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm order_item_actual_amount"
                                                                            value="<?php echo $sub_row[" order_item_actual_amount "];?>" readonly /></td>
                                                                    <td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm number_only order_item_tax1_rate"
                                                                            value="<?php echo $sub_row[" order_item_tax1_rate "]; ?>" /></td>
                                                                    <td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" readonly class="form-control input-sm order_item_tax1_amount"
                                                                            value="<?php echo $sub_row[" order_item_tax1_amount "];?>" /></td>
                                                                    <td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm number_only order_item_tax2_rate"
                                                                            value="<?php echo $sub_row[" order_item_tax2_rate "];?>" /></td>
                                                                    <td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" readonly class="form-control input-sm order_item_tax2_amount"
                                                                            value="<?php echo $sub_row[" order_item_tax2_amount "]; ?>" /></td>
                                                                    <td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm number_only order_item_tax3_rate"
                                                                            value="<?php echo $sub_row[" order_item_tax3_rate "]; ?>" /></td>
                                                                    <td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" readonly class="form-control input-sm order_item_tax3_amount"
                                                                            value="<?php echo $sub_row[" order_item_tax3_amount "]; ?>" /></td>
                                                                    <td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" readonly class="form-control input-sm order_item_final_amount"
                                                                            value="<?php echo $sub_row[" order_item_final_amount "]; ?>" /></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php
                    }
                    ?>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right"><b>Total</td>
                <td align="right"><b><span id="final_total_amt"><?php echo $row["order_total_after_tax"]; ?></span></b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="center">
                                                        <input type="hidden" name="total_item" id="total_item" value="<?php echo $m; ?>" />
                                                        <input type="hidden" name="order_id" id="order_id" value="<?php echo $row[" order_id "]; ?>" />
                                                        <input type="submit" name="update_invoice" id="create_invoice" class="btn btn-info" value="Edit" />
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>




                                    <script>
                                        $(document).ready(function() {
                                            var final_total_amt = $('#final_total_amt').text();
                                            var count = "<?php echo $m; ?>";

                                            $(document).on('click', '#add_row', function() {
                                                count++;
                                                $('#total_item').val(count);
                                                var html_code = '';
                                                html_code += '<tr id="row_id_' + count + '">';
                                                html_code += '<td><span id="sr_no">' + count + '</span></td>';

                                                html_code += '<td><input type="text" name="item_name[]" id="item_name' + count + '" class="form-control input-sm" /></td>';

                                                html_code += '<td><input type="text" name="order_item_quantity[]" id="order_item_quantity' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_quantity" /></td>';
                                                html_code += '<td><input type="text" name="order_item_price[]" id="order_item_price' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_price" /></td>';
                                                html_code += '<td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount' + count + '" data-srno="' + count + '" class="form-control input-sm order_item_actual_amount" readonly /></td>';

                                                html_code += '<td><input type="text" name="order_item_tax1_rate[]" id="order_item_tax1_rate' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_tax1_rate" /></td>';
                                                html_code += '<td><input type="text" name="order_item_tax1_amount[]" id="order_item_tax1_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm order_item_tax1_amount" /></td>';
                                                html_code += '<td><input type="text" name="order_item_tax2_rate[]" id="order_item_tax2_rate' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_tax2_rate" /></td>';
                                                html_code += '<td><input type="text" name="order_item_tax2_amount[]" id="order_item_tax2_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm order_item_tax2_amount" /></td>';
                                                html_code += '<td><input type="text" name="order_item_tax3_rate[]" id="order_item_tax3_rate' + count + '" data-srno="' + count + '" class="form-control input-sm number_only order_item_tax3_rate" /></td>';
                                                html_code += '<td><input type="text" name="order_item_tax3_amount[]" id="order_item_tax3_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm order_item_tax3_amount" /></td>';
                                                html_code += '<td><input type="text" name="order_item_final_amount[]" id="order_item_final_amount' + count + '" data-srno="' + count + '" readonly class="form-control input-sm order_item_final_amount" /></td>';
                                                html_code += '<td><button type="button" name="remove_row" id="' + count + '" class="btn btn-danger btn-xs remove_row">X</button></td>';
                                                html_code += '</tr>';
                                                $('#invoice-item-table').append(html_code);
                                            });

                                            $(document).on('click', '.remove_row', function() {
                                                var row_id = $(this).attr("id");
                                                var total_item_amount = $('#order_item_final_amount' + row_id).val();
                                                var final_amount = $('#final_total_amt').text();
                                                var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
                                                $('#final_total_amt').text(result_amount);
                                                $('#row_id_' + row_id).remove();
                                                count--;
                                                $('#total_item').val(count);
                                            });

                                            function cal_final_total(count) {
                                                var final_item_total = 0;
                                                for (j = 1; j <= count; j++) {
                                                    var quantity = 0;
                                                    var price = 0;
                                                    var actual_amount = 0;
                                                    var tax1_rate = 0;
                                                    var tax1_amount = 0;
                                                    var tax2_rate = 0;
                                                    var tax2_amount = 0;
                                                    var tax3_rate = 0;
                                                    var tax3_amount = 0;
                                                    var item_total = 0;
                                                    quantity = $('#order_item_quantity' + j).val();
                                                    if (quantity > 0) {
                                                        price = $('#order_item_price' + j).val();
                                                        if (price > 0) {
                                                            actual_amount = parseFloat(quantity) * parseFloat(price);
                                                            $('#order_item_actual_amount' + j).val(actual_amount);
                                                            tax1_rate = $('#order_item_tax1_rate' + j).val();
                                                            if (tax1_rate > 0) {
                                                                tax1_amount = parseFloat(actual_amount) * parseFloat(tax1_rate) / 100;
                                                                $('#order_item_tax1_amount' + j).val(tax1_amount);
                                                            }
                                                            tax2_rate = $('#order_item_tax2_rate' + j).val();
                                                            if (tax2_rate > 0) {
                                                                tax2_amount = parseFloat(actual_amount) * parseFloat(tax2_rate) / 100;
                                                                $('#order_item_tax2_amount' + j).val(tax2_amount);
                                                            }
                                                            tax3_rate = $('#order_item_tax3_rate' + j).val();
                                                            if (tax3_rate > 0) {
                                                                tax3_amount = parseFloat(actual_amount) * parseFloat(tax3_rate) / 100;
                                                                $('#order_item_tax3_amount' + j).val(tax3_amount);
                                                            }
                                                            item_total = parseFloat(actual_amount) + parseFloat(tax1_amount) + parseFloat(tax2_amount) + parseFloat(tax3_amount);
                                                            final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
                                                            $('#order_item_final_amount' + j).val(item_total);
                                                        }
                                                    }
                                                }
                                                $('#final_total_amt').text(final_item_total);
                                            }

                                            $(document).on('blur', '.order_item_price', function() {
                                                cal_final_total(count);
                                            });

                                            $(document).on('blur', '.order_item_tax1_rate', function() {
                                                cal_final_total(count);
                                            });

                                            $(document).on('blur', '.order_item_tax2_rate', function() {
                                                cal_final_total(count);
                                            });

                                            $(document).on('blur', '.order_item_tax3_rate', function() {
                                                cal_final_total(count);
                                            });

                                            $('#create_invoice').click(function() {
                                                if ($.trim($('#order_receiver_name').val()).length == 0) {
                                                    alert("Please Enter Reciever Name");
                                                    return false;
                                                }

                                                if ($.trim($('#order_no').val()).length == 0) {
                                                    alert("Please Enter Invoice Number");
                                                    return false;
                                                }

                                                if ($.trim($('#order_date').val()).length == 0) {
                                                    alert("Please Select Invoice Date");
                                                    return false;
                                                }

                                                for (var no = 1; no <= count; no++) {
                                                    if ($.trim($('#item_name' + no).val()).length == 0) {
                                                        alert("Please Enter Item Name");
                                                        $('#item_name' + no).focus();
                                                        return false;
                                                    }

                                                    if ($.trim($('#order_item_quantity' + no).val()).length == 0) {
                                                        alert("Please Enter Quantity");
                                                        $('#order_item_quantity' + no).focus();
                                                        return false;
                                                    }

                                                    if ($.trim($('#order_item_price' + no).val()).length == 0) {
                                                        alert("Please Enter Price");
                                                        $('#order_item_price' + no).focus();
                                                        return false;
                                                    }

                                                }

                                                $('#invoice_form').submit();

                                            });

                                        });
                                    </script>





                                    <?php 
        }
      }
      else
      {
      ?>
      </br>
                                    <h3 align="center">Invoice System </h3>

                                    <br />
                                    <div class="align-right">
                                        <a href="invoice.php?add=1" class="btn btn-info">Create</a>
                                    </div>
                                    <br />
                                    <div class="body table-responsive">
                                        <table id="data-table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Invoice No.</th>
                                                    <th>Invoice Date</th>
                                                    <th>Receiver Name</th>
                                                    <th>Invoice Total</th>
                                                    <th>PDF</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <?php
        if($total_rows > 0)
        {
          foreach($all_result as $row)
          {
            echo '
              <tr>
                <td>'.$row["order_no"].'</td>
                <td>'.$row["order_date"].'</td>
                <td>'.$row["order_receiver_name"].'</td>
                <td>'.$row["order_total_after_tax"].'</td>
                <td><a href="print_invoice.php?pdf=1&id='.$row["order_id"].'">PDF</a></td>
                <td><a href="invoice.php?update=1&id='.$row["order_id"].'"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="#" id="'.$row["order_id"].'" class="delete"><span class="glyphicon glyphicon-remove"></span></a></td>
              </tr>
            ';
          }
        }
        ?>
                                        </table>
                                    </div>
                                    <?php
      }
      ?>




                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#data-table').DataTable({
                    "order": [],
                    "columnDefs": [{
                        "targets": [4, 5, 6],
                        "orderable": false,
                    }, ],
                    "pageLength": 25
                });
                $(document).on('click', '.delete', function() {
                    var id = $(this).attr("id");
                    if (confirm("Are you sure you want to remove this?")) {
                        window.location.href = "invoice.php?delete=1&id=" + id;
                    } else {
                        return false;
                    }
                });
            });
        </script>


        <script>
            $(document).ready(function() {
                $('.number_only').keypress(function(e) {
                    return isNumbers(e, this);
                });

                function isNumbers(evt, element) {
                    var charCode = (evt.which) ? evt.which : event.keyCode;
                    if (
                        (charCode != 46 || $(element).val().indexOf('.') != -1) && // “.” CHECK DOT, AND ONLY ONE.
                        (charCode < 48 || charCode > 57))
                        return false;
                    return true;
                }
            });
        </script>
        <!-- Jquery Core Js -->


        <script>
            $(document).ready(function() {
                $('#order_date').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose: true
                });
            });
        </script>

    </body>

    </html>