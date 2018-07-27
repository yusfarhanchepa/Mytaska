<?php

include "../lib/db/conn.php";




include("../lib/db/conn.php"); //include auth.php file on all secure pages 
if(isset($_GET['id_artikel'])){
    
        $id_artikel = $_GET['id_artikel'];
    
        $query= "SELECT * FROM  artikel WHERE id_artikel = '$id_artikel' ";
    
        $result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		
		
			$result=mysqli_fetch_array($result);
			$tajuk = $result['tajuk'];
			$sinopsis = $result['sinopsis'];
            $sinopsis2 = str_replace("\r\n", "<br />", $sinopsis);
            $artikelnya = $result['artikelnya'];
			$artikelnya2 = str_replace("\r\n", "<br />", $artikelnya);
			$id_artikel = $result['id_artikel'];
            $img_artikel= $result['img_artikel'];
            $tarikh = $result['tarikh'];
			
			

			$link="";
			
		
    
    
    }
    else{
        echo '<script>window.location=("guest-artikel-menu.php"); </script>';
    }


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $tajuk; ?> - MyTaska Guest</title>

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

	    	<!--Inner Banner Start-->
	    	<section class="tl-inner-banner">
	    		<div class="container">
	    			<h3><?php echo $tajuk; ?></h3>
	    			<!--Breadcrum Start-->
	    			<ul class="tl-breadcrumb-listed">
	    				<li><a href="guest-index.php">Laman Utama</a></li>
                        <li><a href="guest-artikel-menu.php">Artikel</a></li>
	    				<li class="active"><?php echo $tajuk; ?></li>
	    			</ul>
	    		</div>
	    	</section><!--Inner Banner End-->

	    	<!--Main Content Start-->
	    	<div class="tl-main-content">
				
				<!--Properties Section Start-->
				<section class="tl-blog-section pd-tb-80">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-8 col-xs-12">
								<!--Blog Item Start-->
								<div class="tl-blog-box tl-blog-detail-info">
									<!--Top Holder Srart-->
									<div class="tl-top-holder">
										<h3><a href="blog-detail.html"><?php echo $tajuk; ?></a></h3>
										<ul class="tl-meta-listed tl-meta-listed_v2">
											<li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $tarikh; ?></li>
											<li><i class="fa fa-comments-o" aria-hidden="true"></i><a href="#">0 Comments</a></li>
										</ul>
									</div><!--Top Holder End-->
									<!--Thumb Holder start-->
									<figure class="tl-thumb">
										<img src="images/<?php echo $img_artikel; ?>" alt="" width="732" height="461">
									</figure>
									<!--Text HOlder Start-->
									<div class="tl-text-holder">
                                        <p><?php echo $artikelnya2; ?></p>

										<!--Blog Bottom HOlder Start-->
										<div class="tl-bottom-holder">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<!--Tag List Start-->
													<div class="tl-tags-listed">
														<span><i class="fa fa-tags" aria-hidden="true"></i></span>
														<a href="#">Tadika</a>
													</div>
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<!--Share Holder Start-->
													<div class="tl-share-holder">
														<span>Share</span>
														<!--Social Links Start-->
														<ul class="top-social-links tl-social-links">
															<li class="tl-fb-icon">
																<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
															</li>
															<li class="tl-tw-icon">
																<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
															</li>
															<li class="tl-gp-icon">
																<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
															</li>
															
														</ul><!--Social Links End-->
													</div><!--Share Holder End-->
												</div>
											</div>
										</div><!--Blog Bottom HOlder End-->


										<!--Contact Form Start-->
										<form method="get" class="tl-contact-form">
											<h4>Tinggalkan Komen Anda</h4>
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<!--Inner Holder Start-->
													<div class="inner-holder">
														<input type="text" placeholder="Nama">
													</div><!--Inner Holder End-->
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<!--Inner Holder Start-->
													<div class="inner-holder">
														<input type="email" placeholder="Email">
													</div><!--Inner Holder End-->
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<!--Inner Holder Start-->
													<div class="inner-holder">
														<input type="tel" placeholder="Phone">
													</div><!--Inner Holder End-->
												</div>
												<div class="col-md-12 col-sm-12 col-xs-12">
													<!--Inner Holder Start-->
													<div class="inner-holder">
														<textarea name="Message" placeholder="Mesej"></textarea>
													</div><!--Inner Holder End-->
												</div>
												<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="inner-holder">
														<button class="btn-submit" type="submit">Hantar</button>
													</div>
												</div>
											</div>
										</form>
											</div><!--Text HOlder End-->
								</div><!--Blog Item End-->
							</div>

							<div class="col-md-4 col-sm-4 col-xs-12">
								<!--Sidebar Outer Start-->
								<aside class="tl-sidebar-outer">


                                <!--Widget Start-->
                                <div class="widget widget-agent">
										<h3>Langgan Newsletter</h3>
									
										<form method="get" class="agent-form-outer">
											<div class="inner-holder">
												<input type="email" placeholder="Email">
											</div>
											<div class="inner-holder">
												<button class="btn-submit" type="submit">Langgan</button>
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
		<script src="js/custom.js"></script>

    
   </body>
</html>