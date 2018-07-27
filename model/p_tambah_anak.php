<?php

include "../lib/db/conn.php";


    if($_POST['submit']=="Save"){
        $query = "INSERT INTO pelajar (id_taska,nama_pelajar,id_bapa,no_sijil,tarikh_lahir,tempat_lahir,umur,jantina,agama,tempat_taska_sebelum,alahan,penyakit_lain ) values
        ('".$_POST['id_taska']."','".$_POST['nama_pelajar']."','".$_POST['id_bapa']."','".$_POST['no_sijil']."','".$_POST['tarikh_lahir']."','".$_POST['tempat_lahir']."','".$_POST['umur']."',
        '".$_POST['jantina']."','".$_POST['agama']."','".$_POST['tempat_taska_sebelum']."','".$_POST['alahan']."','".$_POST['penyakit_lain']."')";
    
        if($conn->query($query)){
            $id = $conn->insert_id;
            $cquery="";

                $cquery .= "insert into progress(id_pelajar,nama) values
                (".$id.",'Melambai “bye-bye”')
                ,(".$id.",'Menghasilkan bunyi da-da atau ma-ma')
                ,(".$id.",'Menghasilkan 2-3 perkataan selain ma-ma atau da-da')
                ,(".$id.",'Bercakap dalam bahasa yang tidak difahami oleh orang lain (jabbering atau berleter)')
                ,(".$id.",'Mengikut arahan mudah (ayat 2-3 patah perkataan) diikuti dengan pergerakan badan')
                ,(".$id.",'Memberikan permainan atas arahan')
                ,(".$id.",'Meneroka pelbagai tekstur objek.')
                ,(".$id.",'Membeza pelbagai jenis rasa makanan')
                ,(".$id.",'Suka sesetengah makanan pejal')
                ,(".$id.",'Menunjukkan reaksi pada bunyi dan muzik yang didengar')
                ,(".$id.",'Membezakan pelbagai bunyi di dalam persekitaran.')
                ,(".$id.",'Boleh mencari barang yang disembunyikan.')
                ,(".$id.",'Meneliti sesuatu objek dengan tangan atau mata.')
                ,(".$id.",'Menunjukkan minat kepada objek yang berwarna terang.')
                ,(".$id.",'Berjalan apabila sebelah tangan dipegang')
                ,(".$id.",'Mengutip benda dengan menggunakan ibu jari dan jari telunjuk')
                ,(".$id.",'Memegang barang dan meneliti barang tersebut dengan tangan atau mata')
                ,(".$id.",'Minum menggunakan cawan apabila disuap')
                ,(".$id.",'Melepaskan objek')
                ,(".$id.",'Membina dua blok')
                ,(".$id.",'Menghasilkan bunyi dengan sengaja (seperti mengetuk atau membunyikan loceng')
                ,(".$id.",'Menggerak badan seperti mengangguk apabila mendengar lagu kanak-kanak (nursery rhymes).')
                ,(".$id.",'Menyelesaikan masalah secara kreatif (creative problem solving). Contoh: menarik kain untuk untuk mendapat mainan.')
                ,(".$id.",'Mengenali pelbagai saiz, warna dan bentuk sesuatu objek dalam persekitaran.')
                ,(".$id.",'Memahami konsep kedalaman (depth perception) dengan menunjukkan rasa takut jatuh dari tempat tinggi.')
                ,(".$id.",'Meneliti objek dan menjatuhkan objek ke lantai berulang kali.')
                ,(".$id.",'Cuba memadan bentuk dengan acuan.')
                ,(".$id.",'Menggunakan objek untuk aktiviti yang bersesuaian.')
                ,(".$id.",'Memahami simbol seperti sudu untuk makan, botol untuk menyimpan susu.')
                ,(".$id.",'Mencari barang yang disembunyikan dipelbagai tempat.')
                ,(".$id.",'Makan sendiri dengan menggunakan tangan')
                ,(".$id.",'Menunjukkan kasih sayang')
                ,(".$id.",'Suka apabila diperhatikan (mengulang sesuatu yang diberi perhatian)')
                ;";
    
              
            
            if($conn->multi_query($cquery))
            
    
                echo '<script>window.alert( "Berhasil tambah!"); window.location=("../pages/anak/tambah_anak.php"); </script>';
               
            else
                echo "Failed to add";
        }
        else{
            echo "Failed to add";
        }
    }
    
    
    ?>