<?php

include "../../lib/db/conn.php";
include "../../lib/db/auth.php";
include_once("config.php");

$id_taska=$_SESSION['id_taska'];

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Welcome To | MyTaska Kindergarten System</title>

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

<!-- Colorpicker Css -->
<link href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

<!-- Dropzone Css -->
<link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">

<!-- Multi Select Css -->
<link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">

<!-- Bootstrap Spinner Css -->
<link href="../../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

<!-- Bootstrap Tagsinput Css -->
<link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

<!-- Bootstrap Select Css -->
<link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<!-- noUISlider Css -->
<link href="../../plugins/nouislider/nouislider.min.css" rel="stylesheet" />

<!-- Custom Css -->
<link href="../../css/style.css" rel="stylesheet">

  <!-- Bootstrap Material Datetime Picker Css -->
  <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

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
               <li >
                   <a href="../../indexparent.php">
                       <i class="material-icons">home</i>
                       <span>Home</span>
                   </a>
               </li>
               <li>
                   <a href="../../pages/newparent.php">
                       <i class="material-icons">text_fields</i>
                       <span>News </span>
                   </a>
               </li>
               <li>
                   <a href="../../pages/ibubapa/bapa.php">
                       <i class="material-icons">text_fields</i>
                       <span>Father's Information</span>
                       </a>
               </li>
               <li>
                   <a href="../../pages/ibubapa/ibu.php">
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
                               <a href="../../pages/anak/tambah_anak.php">Add Child</a>
                           </li>
                           <li>
                               <a href="../../pages/anak/senarai_anak.php">List of Children</a>
                           </li>
                       </li>
                   </ul>
               </li>

               <li class="active">
                   <a href="javascript:void(0);" class="menu-toggle">
                       <i class="material-icons">widgets</i>
                       <span>Payment For Fee</span>
                   </a>
                   <ul class="ml-menu">
                       <li>
                           <li class="active">
                               <a href="../../pages/bayar/bayar.php">Pay Fee</a>
                           </li>
                           <li>
                               <a href="../../pages/bayar/rekod_bayaran.php">Record of Payment</a>
                           </li>
                       </li>

                   </ul>
               </li>


           </ul>
       </div>
       <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy;  2017 <a href="javascript:void(0);">MyTaska - Kindergarten System</a>
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

                <!-- Latest Social Trends -->
                <div class="col-md-6">
                <div class="card">
             
                    <div class="body">
                    <table> 
             <tr><td>
                    <img align="centre" src="../../images/paypal1.png" width="210" height="150" alt="User" />
             
                    </td>
                  
              
                   <td align="right">
             
     
    <form method="POST" action="process.php?paypal=checkout&id_taska=<?php echo $_SESSION['id_bapa']; ?>">
	<input type="hidden" name="itemname" value="Fee Kindergarten" /> 
	<input type="hidden" name="itemnumber" value="10000" /> 
    <input type="hidden" name="itemdesc" value="Yuran Tadika." /> 
	<input type="hidden" name="itemprice" value="150.00" />
    <input type="hidden" name="id_taska"  value="<?php echo $_SESSION['id_taska']; ?>"  />
    <input type="hidden" name="nama_bapa"  value="<?php echo $_SESSION['nama_bapa']; ?>"  />
    <input type="hidden" name="id_bapa"  value="<?php echo $_SESSION['id_bapa']; ?>"  />
    Total Kid : <select name="itemQty"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select> 
    <input class="btn bg-orange waves-effect "  type="submit" name="submitbutt" value="Pay (150.00 <?php echo PPL_CURRENCY_CODE; ?>)" />
    </form>
    </td> 
    </tr>
    </table> 
 
                    </div>
                </div>
            </div>
                <!-- #END# Latest Social Trends -->
                <div class="col-md-6">
                <div class="card">
                 
                    <div class="body">
                    <table>
                    <img align="centre" src="../../images/cimb1.png" width="200" height="150" alt="User" />
                    <img align="centre" src="../../images/comingsoon.png" width="200" height="150" alt="User" />
                 </table>

                    </div>
                </div>
            </div>
                <!-- #END# Latest Social Trends -->
              
            </div>
           

            <div class="card">
                        <div class="header bg-red">
                            <h2 align="center">
                           Pay via Screenshot
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">mic</i>
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

                                <p class="blue">Fees should be paid out on a monthly <strong class="red">at least 3 hb</strong> per month.</p>

                                <form action="../../model/p_bayar.php" method="post" enctype="multipart/form-data" name="frmCendekiawan">
                               
                              
                                <p>
                                </p>
                                <table table-striped table-bordered table-hover table-bordered >
                                <tr>
                                    <td width="183" height="50">Total payments<strong>
                                    <input name="hid_bayaran" type="hidden" id="hid_bayaran" />
                                    </strong></td>
                                    <td>RM  
                                    <input type="hidden" name="id_bapa"  value="<?php echo $_SESSION['id_bapa']; ?>"  />
                                    <input type="hidden" name="nama_bapa"  value="<?php echo $_SESSION['nama_bapa']; ?>"  />
                                    <input type="hidden" name="phone_bapa"  value="<?php echo $_SESSION['phone_bapa']; ?>"  />
                                    <input type="hidden" name="id_taska"  value="<?php echo $_SESSION['id_taska']; ?>"  />
                                    
                                    <input type="text" name="jumlah_bayaran" id="jum_bayaran" value=""  />
                                    </td>
                                </tr>
                                <tr>
                                    <td height="50">Payment Method <span class="red">*</span></td>
                                    <td><select name="kaedah_bayaran" id="sel_kaedah_bayaran">
                                        <option value="">Select</option>
                                        <option value='On-line Banking' >On-line Banking</option>
                                        <option value='Cash Deposit Machine' >Cash Deposit Machine</option>
                                        <option value='Cheque Deposit Machine' >Cheque Deposit Machine</option>
                                        <option value='Pindahan Wang Dari Mesin Bank' >Pindahan Wang Dari Mesin Bank</option>
                                        <option value='Bayaran Melalui Kaunter Bank' >Bayaran Melalui Kaunter Bank</option>
                                        <option value='Cek' >Cek</option>     
                                     </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="50">Bank Account<span class="red">*</span></td>
                                    <td><select name="akaun_bank" id="sel_bank">
                                    <option value="">Select</option>
                                    <option value='MALAYAN BANKING BERHAD  (5660201000030)' >MALAYAN BANKING BERHAD  (5660201000030)</option>
                                    <option value='RHB BANK BERHAD (26670008001)' >RHB BANK BERHAD (26670008001)</option> 
                                   </select>
                                </td>
                                </tr>
                                <tr>
                                    <td height="50">Reference Information <span class="red">*<br />
                                        <small><em>Please enter No reference, time, no check etc.</em></small></span></td>
                                    <td><textarea name="no_rujukan" cols="30" rows="3" id="no_rujukan"></textarea></td>
                                </tr>
                                <tr>
                                    <td height="50">Payment Date<span class="red">*</span></td>
                                    <td width="397">
                                        
                                    <input type="text" name="t_bayaran" class="datepicker form-control" >
                                    </td>
                                </tr>
                                <tr>
                                    <td height="90">Proof of Payment  <span class="red">*</span><br />
                                    <small><em class="red">jpg, PDF, .doc & .docx format only & size less than 2 MB. Make sure the attachment name does not have a symbol like: </em></small></td>
                                    <td>
                                        <input name="file" type="file" id="salinan_resit1" /><br />
                                    <input name="salinan_resit2" type="file" id="salinan_resit2" /><br />
                                    <input name="salinan_resit3" type="file" id="salinan_resit3" />
                                    <input type="hidden" name="status"  value="In Processing"  />
                                </td>
                                </tr>
                             
                           
                                <tr>
                                    <td > </td>
                                    <td align="right">     
                                    <button type="submit" class="btn bg-orange waves-effect " name='submit'  id="btnSimpan" onClick="return Validate()"><i class="material-icons">save</i><span>Pay</span>   </button>    </td>
                                </tr>
                                </table>
                                </form>
                                <script type="text/javascript">
                                function Validate(){
                                    if(window.document.getElementById('jum_bayaran').value == '' || window.document.getElementById('jum_bayaran').value == '0.00'){
                                        alert("Sila PILIH/TANDAKAN yuran hendak dibayar!");
                                        return false;
                                    }
                                    else if(window.document.getElementById('sel_kaedah_bayaran').value == ''){
                                        alert("Sila pilih kaedah pembayaran anda!");
                                        window.document.getElementById('sel_kaedah_bayaran').focus();
                                        return false;
                                    }
                                    else if(window.document.getElementById('sel_bank').value == ''){
                                        alert("Sila pilih akaun bank!");
                                        window.document.getElementById('sel_bank').focus();
                                        return false;
                                    }
                                    else if(window.document.getElementById('no_rujukan').value == ''){
                                        alert("Sila masukkan maklumat rujukan pembayaran anda!");
                                        window.document.getElementById('no_rujukan').focus();
                                        return false;
                                    }
                                    else if(window.document.getElementById('tarikh_pembayaran').value == ''){
                                        alert("Sila masukkan tarikh pembayaran anda!");
                                        window.document.getElementById('tarikh_pembayaran').focus();
                                        return false;
                                    }
                                    else if(window.document.getElementById('salinan_resit1').value == '' && window.document.getElementById('salinan_resit2').value == '' && window.document.getElementById('salinan_resit3').value == ''){
                                        alert("Sila masukkan bukti bayaran anda!");
                                        return false;
                                    }
                                    else if(window.document.getElementById('perakuan').checked != true){
                                        alert("Sila tandakan perakuan anda!");
                                        window.document.getElementById('perakuan').focus();
                                        return false;
                                    }
                                    else
                                        return true;
                                }


                                $(function () {

                                    $('.tbayar').keyup(function () {
                                    
                                        updateTotal();

                                    });

                                    $('.cbayar').click(function() {
                                    
                                        updateTotal();

                                    });

                                    function updateTotal() {
                                        // initialize the sum (total price) to zero
                                        var sum = 0;
                                        var jumlah_bayaran = 0;
                                        
                                        // we use jQuery each() to loop through all the textbox with 'price' class
                                        // and compute the sum for each loop
                                        $('.tbayar').each(function() {
                                            
                                            if(!isNaN($(this).val())){
                                                sum += Number($(this).val());
                                            }else
                                                alert("Hanya masukkan nombor sahaja. Pastikan anda tidak memasukkan tanda ',' atau RM ");
                                        });

                                        $('.cbayar').each(function() {
                                            
                                            if ($(this).is(":checked")){
                                                sum += Number($(this).val());
                                            }
                                        });
                                        
                                        // set the computed value to 'totalPrice' textbox
                                        $('#jum_bayaran').val(sum.toFixed(2));
                                    
                                    }
                                });

                                </script></td>
                                    <td>&nbsp;</td>
                                </tr>
                                </table>
                        </div>
                    </div>
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

   <!-- Autosize Plugin Js -->
   <script src="../../plugins/autosize/autosize.js"></script>
   
        <!-- Moment Plugin Js -->
        <script src="../../plugins/momentjs/moment.js"></script>
        
            <!-- Bootstrap Material Datetime Picker Plugin Js -->
            <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
        
            <!-- Custom Js -->
            <script src="../../js/admin.js"></script>
            <script src="../../js/pages/forms/basic-form-elements.js"></script>
        
            <!-- Demo Js -->
            <script src="../../js/demo.js"></script>
</body>

</html>