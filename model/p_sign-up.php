<?php
$mysqli = new mysqli("localhost","root","","mytaska");
if($mysqli->connect_error)
    die("Database connection failed ".$mysql->connect_error);

if($_POST['submit']=="Save"){
    $query = "insert into bapa(ic_bapa) values
    ('".$_POST['ic_bapa']."')";

    if($mysqli->query($query)){
        $id = $mysqli->insert_id;
        $cquery="";

            $cquery .= "insert into ibu(id_ibu,ic_ibu) values
            (".$id.",'".$_POST['ic_ibu']."');";

          
        
        if($mysqli->multi_query($cquery))
        

            echo '<script>window.alert( "Berhasil simpan!"); window.location=("../pages/examples/register.php"); </script>';
           
        else
            echo "Shirts Details Saved to failed";
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
