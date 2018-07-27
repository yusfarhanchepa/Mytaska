
<?php

include "../lib/db/conn.php";
//$mysqli = new mysqli("localhost","root","","mytaska");
if($conn->connect_error)
    die("Database connection failed ".$mysql->connect_error);

if($_POST['submit']=="Save"){
    $query = "insert into users(username,password,role,id_taska) values
    ('".$_POST['username']."','".$_POST['password']."','".$_POST['role']."','".$_POST['id_taska']."');";

    if($conn->query($query)){
        $id = $conn->insert_id;
        $cquery="";

            $cquery .= "insert into staf (id_staf,id_taska,nama_staf,no_ic_staf,no_telefon,kategori_staf,pencapaian_akademik_tertinggi,tarikh_mula_berkhidmat,gaji  )  values
            (".$id.",'".$_POST['id_taska']."','".$_POST['nama_staf']."','".$_POST['no_ic_staf']."','".$_POST['no_telefon']."','".$_POST['kategori_staf']."','".$_POST['pencapaian_akademik_tertinggi']."','".$_POST['tarikh_mula_berkhidmat']."','".$_POST['gaji']."');";


        
        if($conn->multi_query($cquery))
        

            echo '<script>window.alert( "Data Saved!"); window.location=("../pages/staf/tambah_staf.php"); </script>';
           
        else
        echo '<script>window.alert( "Fail to Save!"); window.location=("../pages/staf/tambah_staf.php"); </script>';
    }
    else{
        echo '<script>window.alert( "Fail to Save!"); window.location=("../pages/staf/tambah_staf.php"); </script>';
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











