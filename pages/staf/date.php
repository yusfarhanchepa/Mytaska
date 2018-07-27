<?php

include "../../lib/db/conn.php";
include "../../lib/db/auth.php";



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


</head>

<body class="theme-red">
   


                 
               



        </aside>
        <!-- #END# Left Sidebar -->
       
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            
            </div>

            <div class="card">
                        <div class="header bg-red">
                            <h2 align="center">
                            MAKLUMAT BAYARAN 
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
                                        <input name="salinan_resit1" type="file" id="salinan_resit1" /><br />
                                    <input name="salinan_resit2" type="file" id="salinan_resit2" /><br />
                                    <input name="salinan_resit3" type="file" id="salinan_resit3" />
                                    <input type="hidden" name="status"  value="In Processing"  />
                                </td>
                                </tr>
                                <tr>
                                    <td height="100">Perakuan <span class="red">*</span></td>
                                    <td><label class="blue"><input name="perakuan" type="checkbox" id="perakuan" value="1" />
                                    Saya mengaku maklumat pembayaran yang saya masukkan di atas adalah benar dan tepat</label></td>
                                </tr>
                                <tr>
                                    <td height="50">(<span class="red">*</span> The Informations needs to be filled in)</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                    <button type="submit" class="btn bg-orange waves-effect" name="btnSimpan" id="btnSimpan" onClick="return Validate()"><i class="material-icons">save</i><span>Bayar</span>   </button>    </td>
                                </tr>
                                </table>
                                </form>
                               
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