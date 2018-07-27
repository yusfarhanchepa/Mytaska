<?php

include "../lib/db/conn.php";




include("../lib/db/conn.php"); //include auth.php file on all secure pages 
if(isset($_GET['id_taska'])){
    
        $id_taska = $_GET['id_taska'];
    
        $query= "SELECT * FROM  taskauser u JOIN taska_details  d ON u.id_taska = d.id_taska  WHERE u.id_taska = '$id_taska' ";
    
        $result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		
		
			$result=mysqli_fetch_array($result);
			$nama_taska = $result['nama_taska'];
			$alamat_organisasi = $result['alamat_organisasi'];
			$alamat_organisasi2 = str_replace("\r\n", "<br />", $alamat_organisasi);
			$description = $result['description'];
			$description2 = str_replace("\r\n", "<br />", $description);
            $nama_pemilik = $result['nama_pemilik'];
            $telefon_pemilik = $result['telefon_pemilik'];
			$id_taska = $result['id_taska'];
			$img_tadika = $result['img_tadika'];
			$objektif = $result['objektif'];
			$objektif2 = str_replace("\r\n", "<br />", $objektif);
			$visi = $result['visi'];
			$visi2 = str_replace("\r\n", "<br />", $visi);
			$misi = $result['misi'];
			$misi2 = str_replace("\r\n", "<br />", $misi);
			$akademik = $result['akademik'];
			$akademik2 = str_replace("\r\n", "<br />", $akademik);
			$kokurikulum = $result['kokurikulum'];
			$kokurikulum2 = str_replace("\r\n", "<br />", $kokurikulum);
			$no_cikgu = $result['no_cikgu'];
			$waktu_belajar = $result['waktu_belajar'];
			$waktu_belajar2 = str_replace("\r\n", "<br />", $waktu_belajar);
			$jadual_waktu = $result['jadual_waktu'];
			$jadual_waktu2 = str_replace("\r\n", "<br />", $jadual_waktu);
			$lain2 = $result['lain2'];
			$lain3 = str_replace("\r\n", "<br />", $lain2);

			$link="";
			
		
    
    
    }
    else{
        echo '<script>window.location=("guest-search-result.php"); </script>';
    }


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $nama_taska; ?> - MyTaska Guest</title>

        <!-- Css Files Start -->
		<link href="css/style(2).css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/theme-color.css" rel="stylesheet">
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- Css Files End -->
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

    </head>

    <body>
	    <!--Wrapper Content Start-->
	    <div class="tl-wrapper">
	    	<!--Header Content Start-->
	    	<header class="tl-header" id="tl-header_v1">
	    		<!--Topbar Row Start-->
	    		<div class="tl-top-row">
	    			<div class="container">
	    				<div class="row">
	    					<div class="col-md-6 col-sm-6 col-xs-12">
	    						<!--Top Listed Start-->
	    						<ul class="tl-top-listed">
	    							<li>
	    								<i class="fa fa-phone" aria-hidden="true"></i>
	    								1-300-88-2525
	    							</li>
	    							<li>
	    								<i class="fa fa-envelope-o" aria-hidden="true"></i>
	    								<a href="mailto:realestate@info.com">mytaska@info.com</a>
	    							</li>
	    						</ul>
	    					</div>
	    					<div class="col-md-6 col-sm-6 col-xs-12">
	    						<!--Top Right Listed Start-->
	    						<div class="tl-top-right">
	    							<!--Social Links Start-->
	    							<ul class="top-social-links">
	    								<li>
	    									<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
	    								</li>
	    								<li>
	    									<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
	    								</li>
	    								<li>
	    									<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	    								</li>
	    							</ul><!--Social Links End-->

	    							
	    						</div><!--Top Right Listed End-->
	    					</div>
	    				</div>
	    			</div>
	    		</div><!--Topbar Row End-->
	    		
	    		<!--Navigation Row Start-->
	    		<div class="tl-navigation-row">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2">
							<!--Logo Start-->
							<strong class="tl-logo">
								<a href="index.html"><img src="images/logo.png" alt=""></a>
							</strong><!--Logo End-->
						</div>
						<div class="col-md-10 col-sm-10">
							<!--Nav Holder Start-->
							<div class="tl-nav-holder">
								<!--Menu Holder Start-->
								<nav class="navbar navbar-default"> 
									<div class="navbar-header">
									  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
									</div>
									
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
									  <li>
										  <a href="guest-index.php">Laman Utama</a>
									  </li>
									  <li>
										  <a href="guest-rekomendasi.php">Rekomendasi</a>
									  </li>
									  <li>
										  <a href="guest-artikel-menu.php">Artikel</a>
									  </li>
									  <li>
										  <a href="guest-tentang-kami.php">Tentang Kami</a>
									  </li>
									  <li>
										  <a href="guest-contact.php">Hubungi Kami</a>
									  </li>
									</ul>
								  </div>
								  <!-- /.navbar-collapse --> 
								</nav>

								
						  </div><!--Nav Holder End-->
							</div>
						</div>
					</div>

				</div><!--Navigation Row End-->

    			
	    	</header><!--Header Content End-->

	    	<!--Inner Banner Start-->
	    	<section class="tl-inner-banner">
	    		<div class="container">
	    			<div class="left-holder">
	    				<h2><?php echo $nama_taska; ?></h2>
	    				
	    			</div>
	    			
	    			<!--Breadcrum Start-->
	    			<ul class="tl-breadcrumb-listed">
	    				<li><a href="guest-index.php">Laman Utama</a></li>
	    				<li><a href=#>Hasil Carian</a></li>
	    				<li class="active"><?php echo $nama_taska; ?></li>
	    			</ul>
	    		</div>
	    	</section><!--Inner Banner End-->

	    
	    	<!--Main Content Start-->
	    	<div class="tl-main-content">
				
				<br />
                <!--Search Form Start-->
				<form action="guest-search-result.php" method="get" class="tl-search-form pull-right">
						<input name="search-address" class="tl-search-address" type="text" placeholder="Masukkan Alamat atau Bandar atau Nama Taska">
						<button class="btn-search-submit" type="submit" name="submit" >Search</button>
				</form><!--Search Form End-->
				
				<!--Properties Section Start-->
				<section class="tl-properties-section pd-tb-80">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="tl-properties-gallery">
									<figure class="tl-properties-thumb">
									<img src="images/<?php echo $img_tadika; ?>" alt="">
									<figcaption class="tl-lightbox-caption tl-lightbox">
										<a href="images/<?php echo $img_tadika; ?>" data-imagelightbox="d">
											<img src="images/<?php echo $img_tadika; ?>" id="imagelightbx" alt="Gallery Image" />
										</a>
									</figcaption>
									</figure>
								</div>
							</div>
							
							<div class="col-md-8 col-sm-8 col-xs-12">
								<!--Properties Info Start-->
								<div class="tl-properties-info">
									<!--TOp HOlder Start-->
									<div class="top-holder">
										<div class="row">
											<div class="col-md-8 col-sm-8 col-xs-12">
												<div class="tl-text-holder">
													<h2><?php echo $alamat_organisasi2; ?></h2>
													
													

												</div>
											</div>
											
											<div class="col-md-4 col-sm-4 col-xs-12">
												
											</div>
										</div>
									</div><!--TOp HOlder End-->
									<p><?php echo $description2; ?></p>
									<h2>Objektif</h2>
									<p><?php echo $objektif2; ?></p>
									<!--Adiltional Information Start-->
									<div class="tl-adiltional-inforamtion">
										<h3>Visi</h3>
										<p><?php echo $visi2; ?></p>
									</div><!--Adiltional Information End-->
									<h3>Misi</h3>
									<p><?php echo $misi2; ?></p>

									<h2>Sistem Pengajaran & Pembelajaran</h2>
									<h3>Akademik</h3>
									<p><?php echo $akademik2; ?></p>
									<h3>Kokurikulum</h3>
									<p><?php echo $kokurikulum2; ?></p>

									<br />
									<h4>Bilangan Guru</h4>
									<p><?php echo $no_cikgu; ?></p>

									<h2>Waktu Pembelajaran</h2>
									<p><?php echo $waktu_belajar2; ?></p>
									<h2>Jadual Waktu Pembelajaran</h2>
									<p><?php echo $jadual_waktu2; ?></p>

									<h2>Lain-lain Maklumat</h2>
									<p><?php echo $lain3; ?></p>

								</div><!--Properties Info End-->
							</div>

							<div class="col-md-4 col-sm-4 col-xs-12">
								<!--Sidebar Outer Start-->
								<aside class="tl-sidebar-outer">
									<!--Widget Start-->
									<div class="widget widget-agent">
										<h3>Maklumat Pemilik</h3>
										<!--Agent Info Start-->
										<div class="agent-info">
											<img src="images/user.jpg" alt="">
											<div class="text-holder">
												<strong><?php echo $nama_pemilik; ?></strong>
												<span>Pemilik Tadika</span>
												<ul class="ft-listed">
													<li>
														<i class="fa fa-phone" aria-hidden="true"></i>
														<a href="tel:12353532"><?php echo $telefon_pemilik; ?></a>
													</li>
												</ul>
											</div>
										</div><!--Agent Info End-->
										<form method="get" class="agent-form-outer">
											<h4>Anda mahu pemilik tadika menghubungi anda?</h4> 
											<h4>Isikan ruangan di bawah dan klik butang biru.</h4>
											<br />
											<div class="inner-holder">
												<input type="text" placeholder="Nama">
											</div>
											<div class="inner-holder">
												<input type="tel" placeholder="Phone">
											</div>
											<div class="inner-holder">
												<input type="email" placeholder="Email">
											</div>
											<div class="inner-holder">
												<button class="btn-submit" type="submit">Request Call from Owner</button>
											</div>
											
										</form>
									</div><!--Widget Holder End-->

									<!--Widget Start-->
									<div class="widget widget-add">
										<figure class="add-thumb">
											<a href="#">
												<img src="images/add-img.jpg" alt="">
											</a>
										</figure>
									</div><!--Widget End-->

								</aside><!--Sidebar Outer End-->
							</div>

						</div>
					</div>
				</section><!--Properties Section End-->

				<!--Call to Action Start-->
				<section class="tl-call-to-action-section">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-sm-9 col-xs-12">
							<h3><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <b>Ingin tadika anda lebih mudah dikenali?</b> Mendaftarlah dengan kami.</h3>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<a href="examples/sign-up1.php" class="tl-btn-style1">Mula Sekarang</a>
						</div>
					</div>
				</div>
			</section><!--Call to Action End-->

	    			
	    	</div><!--Main Content End-->

	    	<!--Footer Content Start-->
	    	<footer class="tl-footer">
            
            <!--Footer Middle Section start-->
				<section class="tl-footer-middle-section pd-t-80">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<!--Widget Start-->
							<div class="widget widget-about">
								<h3>Tentang kami</h3>
								<p>Ini adalah laman web MyTaska.</p>
							</div><!--Widget End-->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<!--Widget Start-->
							<div class="widget widget-location">
								<h3>Lokasi Hangat</h3>
								<ul class="ft-listed">
									<li><a href="guest-search-result.php?search-address=Shah+Alam">Shah Alam,Selangor</a></li>
									<li><a href="guest-search-result.php?search-address=Serdang">Serdang,Selangor</a></li>
									<li><a href="guest-search-result.php?search-address=Seri+Kembangan">Seri Kembangan,Selangor</a></li>
								</ul>
							</div><!--Widget End-->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<!--Widget Start-->
							<div class="widget widget-realstate">
								<h3>MyTaska Services</h3>
								<ul class="ft-listed">
									<li><a href="guest-rekomendasi.php">Rekomendasi</a></li>
									<li><a href="guest-artikel-menu.php">Artikel</a></li>
									<li><a href="guest-contact.php">Hubungi Kami</a></li>
								</ul>
							</div><!--Widget End-->
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<!--Widget Start-->
							<div class="widget widget-about">
								<h3>Hubungi Kami</h3>
								<ul class="ft-listed">
									<li>
										<i class="fa fa-map-marker" aria-hidden="true"></i>UPM Serdang Selangor</li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										1-300-88-2525</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<a href="mailto:mytaska@info.com">
										mytaska@info.com</a>
									</li>

								</ul>
							</div><!--Widget End-->
						</div>
					</div>
				</div>
			</section><!--Footer Middle Section End-->

			<!--CopyRight Row start-->
			<div class="tl-copyright-row">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<p>Copyright???</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<!--Social Links Start-->
							<ul class="top-social-links">
								<li>
									<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href=""><i class="fa fa-skype" aria-hidden="true"></i></a>
								</li>
							
							</ul><!--Social Links End-->
						</div>
					</div>
				</div>
			</div><!--CopyRight Row End-->
		</footer><!--Footer Content End-->

	    </div>
	    <!--Wrapper Content End-->

		<!-- Js Files Start --> 
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/migrate.js"></script>  
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/imagesloaded.pkgd.js"></script>
    	<script src="js/isotope.pkgd.min.js"></script> 
    	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="js/map.js"></script> 
		<script src="js/custom.js"></script>

    
   </body>
</html>