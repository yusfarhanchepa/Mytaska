<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
include "../lib/db/conn.php";


$query="SELECT * FROM taskauser WHERE alamat_organisasi LIKE '%Shah Alam%';";
$hasil1 = $conn->query($query);
$hitung1 = $hasil1->num_rows;

$query2="SELECT * FROM taskauser WHERE alamat_organisasi LIKE '%Serdang%';";
$hasil2 = $conn->query($query2);
$hitung2 = $hasil2->num_rows;

$query3="SELECT * FROM taskauser WHERE alamat_organisasi LIKE '%Petaling Jaya%';";
$hasil3 = $conn->query($query3);
$hitung3 = $hasil3->num_rows;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MyTaska Guest</title>

        <!-- Css Files Start -->
		<link href="css/style.css" rel="stylesheet">
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

	    	<!--Search Content Start-->
	    	<section class="tl-search-section">
	    		<div class="container">
	    			<!--Search Bar Content Start-->
	    			<div class="tl-search-bar-holder">
	    				<h2>Membantu Anda Mencari Tadika yang Terbaik</h2>
	    				<!--Search Bar Inner Start-->
	    				<div class="tl-search-inner-row">
	    					<!--Search Form Start-->
	    					<form action="guest-search-result.php" method="get" class="tl-search-form">
								<input name="search-address" class="tl-search-address" type="text" placeholder="Masukkan Alamat atau Bandar atau Nama Taska">
								<button class="btn-search-submit" type="submit" name="submit" >Search</button>
	    					</form><!--Search Form End-->
	    				</div><!--Search Bar Inner End-->
	    				
	    			</div><!--Search Bar Content End-->
	    		</div>
	    	</section><!--Search Content End-->

	    	<!--Main Content Start-->
	    	<div class="tl-main-content">
				
				<!--Properties Section Start-->
				<section class="tl-properties-section pd-tb-80">
					<div class="container">
						<!--Heading Outer Start-->
						<div class="tl-heading-outer">
							<h2>Rekomendasi</h2>
						</div><!--Heading Outer End-->
						<div class="row">
							
						<?php

							$query="SELECT * FROM taskauser LIMIT 3;";
						
							$hasil = $conn->query($query);
						
							$hitung = $hasil->num_rows;
                                                    

                            if($hitung){

                            while ($cetak=$hasil->fetch_assoc()) { 

							extract($cetak);
							
							Print '<div class="col-md-4 col-sm-4 col-xs-12">
								<!--Properties Box Start-->
								<div class="tl-properties-item">
									<figure class="tl-properties-thumb">';
										Print '<img src="images/'. $cetak['img_tadika'] .'" alt="">
										<figcaption class="tl-caption">';
											Print '<div class="bottom-text">
												<span>'. $cetak['alamat_organisasi'] .'</span>
											</div>
										</figcaption>
									</figure>
									<!--Text Holder Start-->
									<div class="tl-text-holder">';
										Print '<h4><a href="guest-taska-details.php?id_taska='. $cetak['id_taska'] .'">'. $cetak['nama_taska'] . '</a></h4>
									</div><!--Text Holder End-->
								</div><!--Properties Box End-->
							</div>';

							}
						}

						?>

							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<a href="guest-rekomendasi.php" class="tl-btn-style1">Lihat lebih banyak rekomendasi</a>
							</div>
						
						</div>
					</div>
				</section><!--Properties Section End-->

				<!--Parallax Section Start-->
				<section class="tl-parallax-section">
					<div class="container">
						<div class="col-md-3 col-sm-4 col-xs-12">
							<!--Parallax Image Start-->
							<div class="parallax-fx-img">
								
							</div><!--Parallax Image End-->
						</div>
						<div class="col-md-7 col-sm-6 col-xs-12">
							<div class="parallax-info">
								<h3>Kami Ingin Membantu Anda</h3>
								<p>Kami sedia membantu anda mencari tadika yang sesuai untuk anak-anak anda.Terdapat banyak pilihan tadika untuk dipilih.</p>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-12">
							<a href="#" class="parallax-btn">Mula Mencari</a>
						</div>
					</div>
				</section><!--Parallax Section End-->

				<!--Neighborhood Section Start-->
				<section class="tl-neighbor-section pd-t-80">
					<div class="container">
						<!--Heading Outer Start-->
						<div class="tl-heading-outer">
							<h2>Bandar Popular</h2>
						</div><!--Heading Outer End-->
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<!--Neighbor Hood Item Start-->
								<figure class="tl-neighbor-item">
									<img src="images/shah-alam.jpg" alt="">
									<figcaption class="tl-caption">
										<h3><a href="guest-search-result.php?search-address=Shah+Alam">Shah Alam</a></h3>
										<span><?php echo $hitung1; ?> Tadika</span>
									</figcaption>
								</figure><!--Neighbor Hood Item Start-->
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<!--Neighbor Hood Item Start-->
								<figure class="tl-neighbor-item">
									<img src="images/Serdang.jpg" alt="">
									<figcaption class="tl-caption">
										<h3><a href="guest-search-result.php?search-address=Serdang">Serdang</a></h3>
										<span><?php echo $hitung2; ?> Tadika</span>
									</figcaption>
								</figure><!--Neighbor Hood Item Start-->
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<!--Neighbor Hood Item Start-->
								<figure class="tl-neighbor-item">
									<img src="images/petaling-jaya3.jpg" alt="">
									<figcaption class="tl-caption">
										<h3><a href="guest-search-result.php?search-address=Petaling+Jaya">Petaling Jaya</a></h3>
										<span><?php echo $hitung3; ?> Tadika</span>
									</figcaption>
								</figure><!--Neighbor Hood Item Start-->
							</div>
						</div>
					</div>
				</section><!--Neighborhood Section End-->

				<!--Blog Section Start-->
				<section class="tl-blog-section pd-t-80">
					<div class="container">
						<!--Heading Outer Start-->
						<div class="tl-heading-outer">
							<h2>Artikel</h2>
						</div><!--Heading Outer End-->
						<div class="row">

						<?php
						
								
													$query="SELECT * FROM artikel LIMIT 3;";
						
													$hasil = $conn->query($query);
						
													$hitung = $hasil->num_rows;
						
													if($hitung){
						
													while ($cetak=$hasil->fetch_assoc()) { 
						
													extract($cetak);
						
						
													Print '<div class="col-md-4 col-sm-4 col-xs-12">
														<!--Blog Box Start-->
														<div class="tl-blog-box">
															<figure class="tl-thumb">';
																Print '<a href="guest-artikel.php?id_artikel='. $cetak['id_artikel'] .'"><img src="images/'. $cetak['img_artikel'] .'" alt=""></a>';
															Print '</figure>
															<div class="tl-text-holder">';
																Print '<h3><a href="guest-artikel.php?id_artikel='. $cetak['id_artikel'] .'">'. $cetak['tajuk'] .'</a></h3>';
																Print '<ul class="tl-meta-listed tl-meta-listed_v2">';
																	Print '<li><i class="fa fa-clock-o" aria-hidden="true"></i>'. $cetak['tarikh'] .'</li>';
																Print '</ul>
																<p>'. $cetak['sinopsis'] .'</p>';
																Print '<a href="guest-artikel.php?id_artikel='. $cetak['id_artikel'] .'" class="tl-readmore">Read More</a>
															</div>
														</div><!--Blog Box Start-->
													</div>';
													
													}
												}
						
												?>
							
						</div>
					</div>
				</section><!--Blog Section End-->

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
		<script src="js/custom.js"></script>
    
   </body>
</html>