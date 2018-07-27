<?php
 include "../../lib/db/conn.php";
//Setup your connection stuff here
  session_start();

//Get a user's name from a form



// Perform your query




?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ezTASKA Sistem Pengurusan Taska dan Tadika">
    <meta name="author" content="">

		<title>MyTaska</title>


    <link href="../../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body >
<body>
<div class="container">
	<div class="col-sm-8 col-md-offset-2">

		<h2 class="text-center text-primary">MyTaska- New User Registration</h2>
		<h3 class="text-center text-primary"></h3>
		<link rel="stylesheet" href="../themes/flick/jquery-ui-1.8.18.custom.css">
<script src="../jquery/jquery-1.7.1.min.js"></script>
<form method="post" enctype="multipart/form-data" action="../../model/p_register.php"  name="frmPendaftaran" class="form-horizontal">
<p class="text-danger">Red-colored and marked * articles need to be filled in completely</p>
<h3 class="text-primary">Father / Guardian information</h3>

<div class="form-group">
	<label class="col-sm-4 control-label">Username</label>
	<div class="col-sm-6">
	<p class="form-control-static"><?php echo $_SESSION['username'];  ?></p>
  <input  name="username" value="<?php echo $_SESSION['username'];  ?>" class="form-control"  type="hidden" required >
	</div>
</div>
  <input  name="password" value="<?php echo $_SESSION['password'];  ?>" class="form-control"  type="hidden" required >

<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Name Kindergarten</label>
	<div class="col-sm-6">
						<select name="id_taska" class="form-control show-tick">
					<option value="">-- Please select --</option>
						<?php 

					$query ="SELECT * FROM taskauser ";  
					$result = mysqli_query($conn, $query);  
				
					while($row = mysqli_fetch_array($result))  
					{  
					
						echo '<option value="'.$row['id_taska'].'">'.$row['nama_taska'].'</option>';

					}

    ?>
																				
                                        
                                     
                                    </select>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* No. Identification card</label>
	<div class="col-sm-6">
  <input  name="ic_bapa"  class="form-control"  type="text" required >
	</div>
</div>

<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Name</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="nama_penjaga" name="nama_bapa" placeholder="Name Father/Guardian " value="" maxlength="80">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label">Age</label>
	<div class="col-sm-6">
		<div class="input-group">
	  		<input type="text" class="form-control" id="umur_penjaga" name="umur_bapa" placeholder="Age Father/Guardian " value="" maxlength="2" onkeypress="return isNumberKey(event)">
	  		<div class="input-group-addon">Tahun</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Address</span></label>
	<div class="col-sm-8">
	  <textarea class="form-control" id="alamat_penjaga" name="alamat_bapa" placeholder="Address Father/Guardian " rows="3"></textarea>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Email</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" name="email_bapa" id="emel_penjaga" placeholder="Email Father/Guardian " value="" maxlength="50">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* No. Phone</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="hp_penjaga" name="phone_bapa" placeholder="No. Phone Father/Guardian" value="" onkeypress="return isNumberKey(event)" maxlength="12">
      <span class="help-block">Tanpa tanda - .Contoh : 60191234567</span>
	  <span class="help-block"><strong>IMPORTANT:</strong>SMS The offer information will be sent to this number</span>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label">Occupation</label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="pekerjaan_penjaga" name="pekerjaan_bapa" placeholder="Occupation Father/Guardian " value="" maxlength="80">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label">Salary</label>
	<div class="col-sm-6">
		<div class="input-group">
	  		<div class="input-group-addon">RM</div>
	  		<input type="text" class="form-control" id="pendapatan_penjaga" name="gaji_bapa" placeholder="Salary Father/Guardian " value="" maxlength="12">
		</div>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label">Name &amp;Address of Employer</label>
	<div class="col-sm-8">
	  <textarea id="majikan_penjaga" class="form-control" name="alamat_p_bapa" placeholder="Name &amp; Address Majikan Father/Guardian " rows="3"></textarea>
	</div>
</div>

<h3 class="text-primary">Mother Information</h3>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* No. Identification card</label>
	<div class="col-sm-6">

  <input  name="ic_ibu"  class="form-control"  type="text" required >
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Name</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Name Mother" value="" maxlength="80">
    </div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label">Age</label>
	<div class="col-sm-6">
		<div class="input-group">
	  		<input type="text" class="form-control" id="umur_ibu" name="umur_ibu" placeholder="Age Mother" value="" maxlength="2" onkeypress="return isNumberKey(event)">
	  		<div class="input-group-addon">Tahun</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Address</span></label>
	<div class="col-sm-8">
	  
	  <div class="checkbox">
	  	<label><input name="sama" type="checkbox" id="sama" value="1" onchange="SalinAlamat()"> Just like the address of the father / guardian</label>
	  </div>
	  
	  <textarea class="form-control" id="alamat_ibu" name="alamat_ibu" placeholder="Address  " rows="3"></textarea>
    </div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* Email</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" name="email_ibu" id="emel_ibu" placeholder="Email Mother" value="" maxlength="50">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label"><span class="text-danger">* No. Phone</span></label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="hp_ibu" name="phone_ibu" placeholder="No. Phone Mother" value="" onkeypress="return isNumberKey(event)" maxlength="12">
      <span class="help-block">No Sign - .Example : 60191234567</span>

	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label">Occupation</label>
	<div class="col-sm-8">
	  <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Occupation Mother" value="" maxlength="80">
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label">Salary</label>
	<div class="col-sm-6">
		<div class="input-group">
	  		<div class="input-group-addon">RM</div>
	  		<input type="text" class="form-control" id="pendapatan_ibu" name="gaji_ibu" placeholder="Salary Mother" value="" maxlength="12">
		</div>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-4 control-label">Name &amp;Address of Employer</label>
	<div class="col-sm-8">
	  <textarea class="form-control" id="majikan_ibu" name="alamat_p_ibu" placeholder="Name &amp; Address Mother" rows="3"></textarea>
	</div>
</div>


<div class="form-group">
	<label class="col-sm-4 control-label">&nbsp;</label>
	<div class="col-sm-8">
		<p class="text-danger">Red-colored and marked * articles need to be filled in completely</p>
		<button type='submit' value='Save' name='submit' id="btnSimpan" onclick="return Validate()" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-right"></span> Teruskan</button>
		<button name="btnKembali" type="button" id="btnKembali" onclick="window.location.href='sign-up.php'" class="btn btn-warning"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</button>
	</div>
</div>
</form>
<script type="text/javascript">
function SalinAlamat(){
	window.document.getElementById('alamat_ibu').value = window.document.getElementById('alamat_penjaga').value;
}
function isNumberKey(evt){
	 var charCode = (evt.which) ? evt.which : event.keyCode
	 if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;

	 return true;
}
function Validate(){
	if(window.document.getElementById('nama_penjaga').value == ''){
		alert("Sila masukkan nama bapa/penjaga!");
		document.getElementById('nama_penjaga').focus();
		return false;
	}
	else if(window.document.getElementById('alamat_penjaga').value == ''){
		alert("Sila masukkan alamat bapa/penjaga!");
		document.getElementById('alamat_penjaga').focus();
		return false;
	}
	else if(window.document.getElementById('emel_penjaga').value == ''){
		alert("Sila masukkan alamat email bapa/penjaga!");
		document.getElementById('emel_penjaga').focus();
		return false;
	}
	else if(window.document.getElementById('hp_penjaga').value == ''){
		alert("Sila masukkan nombor telefon bimbit bapa/penjaga!");
		document.getElementById('hp_penjaga').focus();
		return false;
	}
	else if(window.document.getElementById('nama_ibu').value == ''){
		alert("Sila masukkan nama Mother!");
		document.getElementById('nama_ibu').focus();
		return false;
	}
	else if(window.document.getElementById('alamat_ibu').value == ''){
		alert("Sila masukkan alamat Mother!");
		document.getElementById('alamat_ibu').focus();
		return false;
	}
	else if(window.document.getElementById('emel_ibu').value == ''){
		alert("Sila masukkan alamat email Mother!");
		document.getElementById('emel_ibu').focus();
		return false;
	}
	else if(window.document.getElementById('hp_ibu').value == ''){
		alert("Sila masukkan nombor telefon bimbit Mother!");
		document.getElementById('hp_ibu').focus();
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
<script type="text/javascript">

</script>
</body>
</html>



