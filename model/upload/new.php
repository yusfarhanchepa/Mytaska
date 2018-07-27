
<?php
$mysqli = new mysqli("localhost","root","","mytaska");
if($mysqli->connect_error)
    die("Database connection failed ".$mysql->connect_error);

if($_POST['submit']=="Save"){
    $query = "insert into pelajar(nama_pelajar,no_sijil,tarikh_lahir,tempat_lahir,umur,jantina,agama,tempat_taska_sebelum,alahan,penyakit_lain) values
    ('".$_POST['nama_pelajar']."','".$_POST['no_sijil']."','".$_POST['tarikh_lahir']."','".$_POST['tempat_lahir']."','".$_POST['umur']."'
    ,'".$_POST['jantina']."','".$_POST['agama']."','".$_POST['tempat_taska_sebelum']."','".$_POST['alahan']."','".$_POST['penyakit_lain']."')";

    if($mysqli->query($query)){
        $id = $mysqli->insert_id;
        $cquery="";

            $cquery .= "insert into bapa(id_bapa,nama_bapa,phone_bapa,pekerjaan_bapa,alamat_p_bapa,email_bapa,gaji_bapa) values
            (".$id.",'".$_POST['nama_bapa']."','".$_POST['phone_bapa']."','".$_POST['pekerjaan_bapa']."','".$_POST['alamat_p_bapa']."','".$_POST['email_bapa']."','".$_POST['gaji_bapa']."');";

            $cquery .= "insert into ibu(id_ibu,nama_ibu,phone_ibu,pekerjaan_ibu,alamat_p_ibu,email_ibu,gaji_ibu,alamat_rumah) values
            (".$id.",'".$_POST['nama_ibu']."','".$_POST['phone_ibu']."','".$_POST['pekerjaan_ibu']."','".$_POST['alamat_p_ibu']."','".$_POST['email_ibu']."','".$_POST['gaji_ibu']."','".$_POST['alamat_rumah']."');";

        
        if($mysqli->multi_query($cquery))
        
            echo "Record Saved";
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











