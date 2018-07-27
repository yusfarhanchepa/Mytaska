
<?php

include "../lib/db/conn.php";
//$mysqli = new mysqli("localhost","root","","mytaska");
if($conn->connect_error)
    die("Database connection failed ".$mysql->connect_error);

if(($_POST['submit']=="Save")&&($_POST['role']=="admin")){
    $query = "insert into users(username,password,email,role) values
('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."','".$_POST['role']."');";

    if($conn->query($query)){
        $id = $conn->insert_id;
        $cquery="";

            $cquery .= "insert into taskauser(id_taska,nama_taska,no_pendaftaran,alamat_organisasi, telefon_organisasi,email,nama_pemilik,ic_pemilik,telefon_pemilik,sms) values
            (".$id.",'".$_POST['nama_taska']."','".$_POST['no_pendaftaran']."','".$_POST['alamat_organisasi']."','".$_POST['telefon_organisasi']."','".$_POST['email']."','".$_POST['nama_pemilik']."' ,'".$_POST['ic_pemilik']."','".$_POST['telefon_pemilik']."','".$_POST['sms']."');";

            $cquery .= "UPDATE users set id_taska = '$id' where id=$id;";


        
        if($conn->multi_query($cquery))
        

            echo '<script>window.alert( "Registration Success!"); window.location=("../pages/examples/sign-in.php"); </script>';
           
        else
            echo "query kedua salah";
    }
    else{
        echo "query pertama salah";
    }
}
else
echo '<script>window.alert( "Wrong Verification Code!"); window.location=("../pages/examples/registerAdmin.php"); </script>';

//	if($_POST['submit']=="Update"){
//		$id = $_POST['id'];
//		$cquery="";
//		foreach($_POST['style'] as $k=>$v){
//			$cquery .= "insert into shirt(pid,style,color) values(".$id.",'".$v."','".$_POST['color'][$k]."');";
//		}
//		if($mysqli->multi_query($cquery))
//			echo "Record Saved";
//		else
//			echo "Shirts Details Saved to failed";
//	}

?>











