<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
include "../lib/db/conn.php";


$query="SELECT * FROM taskauser LIMIT 9;";

$hasil = $conn->query($query);

$hitung = $hasil->num_rows;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rekomendasi - MyTaska Guest</title>

        <!-- Css Files Start -->
		<link href="css/style(2).css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/responsive(2).css" rel="stylesheet">
		<link href="css/theme-color(2).css" rel="stylesheet">
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

									<ul class="nav navbar-nav pull-right">
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
					<h3>Rekomendasi</h3>
	    			<!--Breadcrum Start-->
	    			<ul class="tl-breadcrumb-listed">
	    				<li><a href="index.html">Laman Utama</a></li>
	    				<li class="active">Rekomendasi</li>
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
								<!--Filterable Holder Start-->
								<div class="tl-filterable-holder tl-filterable-holder_v2">
									<!--Filterable List Start-->
									<div class="tl-filterlist">
										<a href="#" data-filter="*" class="current">Newest</a>
										<a href="#" data-filter=".tl-item2">Cheapest</a>
										<div class="tl-morefilter">
											<span class="more-filters">More Filters <i class="fa fa-angle-down" aria-hidden="true"></i></span>
											<ul class="tl-filter-dropdown" id="filter-dropdown">
												<li>
													<a href="#" data-filter=".tl-item3">Oldest</a>
												</li>
												<li>
													<a href="#" data-filter=".tl-item4">Cheapest</a>
												</li>
												<li>
													<a href="#" data-filter=".tl-item5">Newest</a>
												</li>
											</ul>
										</div>
										<!--Right Listed Start-->
										<div class="tl-right-listed">
											<ul class="nav nav-tabs">
											    <li class="active">
											    	<a data-toggle="tab" href="#tl-gridtab"><i class="fa fa-th-large" aria-hidden="true"></i></a>
											    </li>
											    <li>
											    	<a data-toggle="tab" href="#tl-listtab"><i class="fa fa-list" aria-hidden="true"></i>
											    	</a>
											    </li>
											  </ul>
											  
										</div><!--Right Listed End-->
										
									</div><!--Filterable List End-->

									<!--Tabs Holder Start-->
									<div class="tl-tabs-holder">
										<div class="tab-content">
	    									<div id="tl-gridtab" class="tab-pane fade in active">
										  		<!--Filterable Outer Start-->
												<div class="tl-filterOuter row">

                                                <?php

        
                                                    

                                                    if($hitung){

                                                    while ($cetak=$hasil->fetch_assoc()) { 

                                                    extract($cetak);


													Print '<div class="col-md-4 col-sm-6 col-xs-12 tl-item5">';
														
													Print '<div class="tl-properties-item">';
															Print '<figure class="tl-properties-thumb">';
																Print '<img src="images/'. $cetak['img_tadika'] .'" alt="">';
																Print '<figcaption class="tl-caption">
																	<div class="top-text">
																	</div>
																	<div class="bottom-text">';
																		Print '<span>' . $cetak['alamat_organisasi'] . '</span>';
																	Print '</div>
																</figcaption>
															</figure>
															
															<div class="tl-text-holder">';
																Print '<h4><a href="guest-taska-details.php?id_taska='. $cetak['id_taska'] .'">'. $cetak['nama_taska'] . '</a></h4>';
																
															Print '</div><!--Text Holder End-->
														</div><!--Properties Box End-->
                                                    </div>';
                                                    
                                                    }
                                                }

                                            ?>
													
													
												</div><!--Filterable Outer End-->

											 </div>
											 
											 </div>
										</div>
									</div><!--Tabs Holder End-->

									
									<!--Pagination Start-->
									<div class="tl-pagination-row">
										<!--Pagination Listed Start-->
										<ul class="tl-pagination-listed">
											<li class="prev-btn">
												<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
											</li>
											<li class="active">
												<a href="#">1</a>
											</li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li class="next-btn">
												<a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
											</li>
										</ul><!--Pagination Listed End-->
									</div><!--Pagination end-->
							
								</div><!--Filterable Holder End-->
							</div>
						</div>
					</div>
				</section><!--Properties Section End-->

			
	    			
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