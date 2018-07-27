<?php
 include "../../lib/db/conn.php";
//Setup your connection stuff here
  session_start();


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// collect value of input field
			$role = $_POST['role']; 
			if ($role=="admin") {
				 
				
					
			} else {
					echo '<script>window.alert( "Please get Verification Code!"); window.location=("../examples/sign-up.php");   </script>';
			}
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Pengurusan Taska dan Tadika">
    <meta name="author" content="">

    <title>ezTASKA</title>

    <link href="../../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    </head>

<body>
<div class="container">
	<div class="col-sm-8 col-md-offset-2">
		<h3 class="text-center text-primary">PERMOHONAN PENGGUNAAN SISTEM</h3>
		<link rel="stylesheet" href="../demo/themes/flick/jquery-ui-1.8.18.custom.css">
<script src="../demo/jquery/jquery-1.7.1.min.js"></script>
<script src="../demo/jquery/ui/jquery.ui.core.js"></script>
<script src="../demo/jquery/ui/jquery.ui.widget.js"></script>
<script src="../demo/jquery/ui/jquery.ui.datepicker.js"></script>
<script>$(function() {$( "#tarikh_perlu" ).datepicker({changeMonth: true,changeYear: true,dateFormat: 'dd-mm-yy',yearRange: "C:+1"});})</script>


<form method="post" enctype="multipart/form-data" action="../../model/p_registerAdmin.php"  name="frmPendaftaran" class="form-horizontal">
<h3 class="text-default">Maklumat Organisasi</h3>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">Username</span></label>
	<div class="col-sm-8">

  <input  name="username"  class="form-control"  type="text" required >
  <input  name="role" value="<?php echo $role  ?>" class="form-control"  type="hidden" required >
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Password</span></label>
	<div class="col-sm-8">
	  <input type="password" class="form-control"  name="password"  value="" maxlength="6">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Organization Name</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="nama_organisasi" name="nama_taska" placeholder="Nama Organisasi" value="" maxlength="80">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* No Registration Company</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" name="no_pendaftaran" id="no_pendaftaran" placeholder="No Pendaftaran Syarikat" value="" maxlength="50" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">*Address </span></label>
	<div class="col-sm-8">
	  <textarea id="alamat_organisasi" class="form-control" name="alamat_organisasi" placeholder="Alamat" rows="3"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* No Telefon</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="telefon_organisasi" name="telefon_organisasi" placeholder="No Telefon" value="" maxlength="13" onkeypress="return isNumberKey(event)" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Email</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="emel_organisasi" name="email" placeholder="Emel" value="" maxlength="80"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Name of the owner</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik" value="" maxlength="80">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* No I/C Owner</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="nokp_pemilik" name="ic_pemilik" placeholder="No. K.P. Pemilik" value="" onkeypress="return isNumberKey(event)" maxlength="12">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* No. Phone. Owner</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="telefon_pemilik" name="telefon_pemilik" placeholder="No Tel Pemilik" value="" onkeypress="return isNumberKey(event)" maxlength="13"/>
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 control-label">Do you need SMS Notification Service ?</label>
	<div class="col-sm-8">
		<label><input name="sms" type="radio" value="YES" CHECKED /> YES</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <label><input name="sms" type="radio" value="NO"  /> NO</label>
		<span class="help-block">Payment is based on <em>SMS Service Provider</em></span>
    </div>
</div>


<div class="form-group">
	<label class="col-sm-4 control-label">&nbsp;</label>
	<div class="col-sm-8">
		<p class="text-danger">
Red-colored and marked * articles need to be filled in completely</p>
		<button type='submit' value='Save' name='submit' id="btnSimpan" onclick="return Validate()"class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Apply</button>
		<button name="btnKembali" type="button" id="btnKembali" onclick="window.location.href='../examples/sign-up.php'"class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span> Back</button>
	</div>
</div>
</form>
<script type="text/javascript">
function isNumberKey(evt){
	 var charCode = (evt.which) ? evt.which : event.keyCode
	 if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;

	 return true;
}
function Validate(){
	if(window.document.getElementById('nama_organisasi').value == ''){
		alert("Sila masukkan nama organisasi!");
		document.getElementById('nama_organisasi').focus();
		return false;
	}
	else if(window.document.getElementById('nama_ringkas_organisasi').value == ''){
		alert("Sila masukkan nama ringkas lokasi!");
		document.getElementById('nama_ringkas_organisasi').focus();
		return false;
	}
	else if(window.document.getElementById('alamat_organisasi').value == ''){
		alert("Sila masukkan alamat organisasi!");
		document.getElementById('alamat_organisasi').focus();
		return false;
	}
	else if(window.document.getElementById('telefon_organisasi').value == ''){
		alert("Sila masukkan nombor telefon organisasi!");
		document.getElementById('telefon_organisasi').focus();
		return false;
	}
	else if(window.document.getElementById('emel_organisasi').value == ''){
		alert("Sila masukkan emel organisasi!");
		document.getElementById('emel_organisasi').focus();
		return false;
	}
	else if(window.document.getElementById('nama_pemilik').value == ''){
		alert("Sila masukkan nama pemilik!");
		document.getElementById('nama_pemilik').focus();
		return false;
	}
	else if(window.document.getElementById('nokp_pemilik').value == ''){
		alert("Sila masukkan nombor kad pengenalan pemilik!");
		document.getElementById('nokp_pemilik').focus();
		return false;
	}
	else if(window.document.getElementById('telefon_pemilik').value == ''){
		alert("Sila masukkan nombor telefon pemilik!");
		document.getElementById('telefon_pemilik').focus();
		return false;
	}
	else if(window.document.getElementById('url_sistem').value == ''){
		alert("Sila masukkan url sistem!");
		document.getElementById('url_sistem').focus();
		return false;
	}
	else if(window.document.getElementById('tarikh_perlu').value == ''){
		alert("Sila masukkan tarikh sistem diperlukan!");
		document.getElementById('tarikh_perlu').focus();
		return false;
	}
	else if(window.document.getElementById('captcha-form').value == ''){
		alert("Sila masukkan kod pengesahan yang dipaparkan!");
		document.getElementById('captcha-form').focus();
		return false;
	}
	else
		return true;
}
</script>
	</div>
</div>
<!---.containers -->
</body>
</html>