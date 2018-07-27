
<?php

include "../lib/db/conn.php";
//$mysqli = new mysqli("localhost","root","","mytaska");
if($conn->connect_error)
    die("Database connection failed ".$mysql->connect_error);

if($_POST['submit']=="Save"){
    $query = "insert into users(username,password,id_taska) values
    ('".$_POST['username']."','".$_POST['password']."','".$_POST['id_taska']."');";

    if($conn->query($query)){
        $id = $conn->insert_id;
        $cquery="";

            $cquery .= "insert into bapa(id_bapa,ic_bapa,nama_bapa,umur_bapa,alamat_bapa,email_bapa,phone_bapa,pekerjaan_bapa,gaji_bapa,alamat_p_bapa,
            ic_ibu,nama_ibu,umur_ibu,alamat_ibu,email_ibu,phone_ibu,pekerjaan_ibu,gaji_ibu,alamat_p_ibu) values
            (".$id.",'".$_POST['ic_bapa']."','".$_POST['nama_bapa']."','".$_POST['umur_bapa']."','".$_POST['alamat_bapa']."','".$_POST['email_bapa']."','".$_POST['phone_bapa']."','".$_POST['pekerjaan_bapa']."','".$_POST['gaji_bapa']."','".$_POST['alamat_p_bapa']."','".$_POST['ic_ibu']."','".$_POST['nama_ibu']."'
            ,'".$_POST['umur_ibu']."','".$_POST['alamat_ibu']."','".$_POST['email_ibu']."','".$_POST['phone_ibu']."','".$_POST['pekerjaan_ibu']."','".$_POST['gaji_ibu']."','".$_POST['alamat_p_ibu']."');";


        
        if($conn->multi_query($cquery))
        

            echo '<script>window.alert( "Registration Success!"); window.location=("../pages/examples/sign-in.php"); </script>';
           
        else
            echo "Shirts Details Sa to failed";
    }
    else{
        echo "Person Details Saved to failed";
    }
}
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











