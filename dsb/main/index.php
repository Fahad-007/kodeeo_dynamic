<?php 
	require_once('db.php');
	$upload_dir = '../images/';
	require_once('../function.php')

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" href="css/library/bootstrap.css">
	<link rel="stylesheet" href="css/library/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/library/onepage.css">
	<link rel="stylesheet" href="css/library/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/library/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/library/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/library/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/library/font-icons.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/library/fonts.css">
	<link rel="stylesheet" href="css/library/responsive.css" type="text/css" />
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<style>
		.shadow-effect {
		    background: #fff;
		    padding: 20px;
		    border-radius: 4px;
		    text-align: center;
			border:1px solid #ECECEC;
		    box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
		}
		#customers-testimonials .shadow-effect p {
		    font-family: inherit;
		    font-size: 17px;
		    line-height: 1.5;
		    margin: 0 0 17px 0;
		    font-weight: 300;
		}
		.testimonial-name {
		    margin: -17px auto 0;
		    display: table;
		    width: auto;
		    background: #3190E7;
		    padding: 9px 35px;
		    border-radius: 0;
		    text-align: center;
		    color: #fff;
		    box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
		}
		#customers-testimonials .item {
		    text-align: center;
		    padding: 50px;
			margin-bottom:10px;
		    opacity: .2;
		    -webkit-transform: scale3d(0.8, 0.8, 1);
		    transform: scale3d(0.8, 0.8, 1);
		    -webkit-transition: all 0.3s ease-in-out;
		    -moz-transition: all 0.3s ease-in-out;
		    transition: all 0.3s ease-in-out;
		}
		#customers-testimonials .owl-item.active.center .item {
		    opacity: 1;
		    -webkit-transform: scale3d(1.0, 1.0, 1);
		    transform: scale3d(1.0, 1.0, 1);
		}
		.owl-carousel .owl-item img {
		    transform-style: preserve-3d;
		    max-width: 90px;
    		margin: 0 auto 17px;
		}
		#customers-testimonials.owl-carousel.owl-theme .owl-dots .owl-dot.active span, #customers-testimonials.owl-carousel.owl-theme .owl-dots .owl-dot:hover span {
		    background: #28CB75;
		    transform: translate3d(0px, -50%, 0px) scale(0.7);
		}
		#customers-testimonials.owl-carousel.owl-theme .owl-dots .owl-dot span {
		    background: #C4C4CC;
		    display: block;
		    height: 20px;
		    margin: 0 2px 5px;
		    transform: translate3d(0px, -50%, 0px) scale(0.3);
		    transform-origin: 50% 50% 0;
		    transition: all 250ms ease-out 0s;
		    width: 20px;
		}
	</style>

	<!-- Document Title
	============================================= -->
	<title>Index</title>

</head>

<body class="stretched">

<!-- PRELOADER -->
<div id="prelaoder">
    <div class="spinner"><div class="spinner-inner"></div></div>
</div>
<!-- /PRELOADER -->

<!--side push panel========-->
	<div class="stretched side-push-panel">
		<div class="body-overlay"></div>
		<div id="side-panel" class="dark">
			<div class="side-panel-wrap">
			<i style="position: absolute;" class="fa fa-times side-panel-trigger" aria-hidden="true"></i>
				<div class="widget widget_links clearfix">
					<h4>About Kodeeo</h4>
					<div style="font-size: 14px; line-height: 1.7;">
						<address style="line-height: 1.7;">
							House 12 (1st Floor), Road 1,<br>
							Chairman Bari, Banani, Dhaka<br>
						</address>
						<div class="clear topmargin-sm"></div>
						<abbr title="Phone Number">Phone:</abbr> +880 1764733575<br>
						<abbr title="Fax">Fax:</abbr> 0011223344<br>
						<abbr title="Email Address">Email:</abbr> connect@kodeeo.com
					</div>
				</div>
				<div class="widget quick-contact-widget clearfix">
					<h4>Connect Socially</h4>
					<a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>
					<a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
					<a href="#" class="social-icon si-small si-colored si-github" title="Github">
						<i class="icon-github"></i>
						<i class="icon-github"></i>
					</a>
					<a href="#" class="social-icon si-small si-colored si-gplus" title="Google Plus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>
					<a href="#" class="social-icon si-small si-colored si-skype" title="Skype">
						<i class="icon-skype"></i>
						<i class="icon-skype"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
<!--side push panel end-->

<!-- Document Wrapper
	========================= -->
	<div id="wrapper" class="clearfix">

	<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header border-full-header dark" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo.kodeeo.png"><img src="images/logo.kodeeo.png" alt="Kodeeo Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo.kodeeo.png"><img src="images/logo.kodeeo.png" alt="Kodeeo Logo"></a>
					</div>
					<!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="#" data-href="#section-about"><div>About</div></a></li>
							<li><a href="#" data-href="#section-services"><div>Services</div></a></li>
							<li><a href="#" data-href="#section-portfolio"><div>Portfolio</div></a></li>
							<li><a href="#" data-href="#section-clients"><div>Clients</div></a></li>
							<li><a href="#" data-href="#section-team"><div>Team</div></a></li>
							<li><a href="#" data-href="#section-contact"><div>Contact</div></a></li>
						</ul>

						<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-1x icon-envelope-alt"></i></a></div>

					</nav>
					<!-- #primary-menu end -->

				</div>
			</div>

		</header>
	<!-- #header end -->

	<!--Slider
		======================-->
		<section id="slider">
			<div class="slider-parallax-outtar">
				<div class="box-card">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
							<?php
				                $query = "select * from slider_section";
				                $result = mysqli_query($connection, $query);
				                if(mysqli_num_rows($result)){
				                    while($row = mysqli_fetch_assoc($result)){
				            ?>

                            <div class="swiper-slide">
                                <div class="box-image" style="background-image:url(<?php echo $upload_dir.$row['slider_img'] ?>);"></div>
                            </div>

                            <?php
				                    }
				                }
				            ?>
                        </div>
                        </div>

                        <div class="swiper-container gallery-thumbs">
                      <div class="swiper-wrapper">

                      	<?php
			                if(mysqli_num_rows($dataSlider['section'])){
			                    while($row = mysqli_fetch_assoc($dataSlider['section'])){
			            ?>

                          <div class="swiper-slide container">
                            <div class="text-left">
                              <h1 style="text-align: left;left: 50px;position: absolute;"><?php echo $row['slider_heading'] ?></h1><br>
                              <p style="text-align: left;left: 50px;position: absolute;margin-top: 20px;"><?php echo $row['slider_paragraph'] ?></p>
                            </div>
                          </div>

                        <?php
			                    }
			                }
			            ?>
                      </div>
                    </div>
      </div>
				<a href="#" data-scrollto="#section-about" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
			</div>
		</section>
	<!--Slider End-->

	<!--About section
		========================-->
		<div id="section-about">
			<!-- Page Title About section
				============================================= -->
			<section id="page-title">
				<div class="container clearfix" style="text-align: center;">
					<h1><b class="heading-color">ABOUT </b>US</h1>
					<span>
						Kodeeo   is   a   Bangladesh   based technology solutions   venture   which   assists companies,  organizations  and start ups  to  develop  their  ideas  into  reality. Unlike other  companies,  Kodeeo  believes  in  providing  quality services to  clients.  It  has more  than 3 years  of  experience  in  satisfying  clients  by  providing  the  best  IT solutions.
					</span>
				</div>
			</section>
			<!-- #page-title end -->

			<section id="content" style="background-color: #F5F5F5;">
				<div class="content-wrap">
					<div class="col_full bottommargin-lg common-height">
						
						<?php

				            if(mysqli_num_rows($dataAbout['section'])){
				                while($row = mysqli_fetch_assoc($dataAbout['section'])){
				        ?>
						<div class="col-md-4 dark col-padding ohidden" style="background-color: <?php echo $row['bg_color']; ?>;">
							<div>
								<h3><?php echo $row['heading'] ?></h3>
								<p><?php echo $row['paragraph'] ?></p>
								<a href="#" class="button button-border button-light button-rounded uppercase nomargin"><?php echo $row['btn_text'] ?></a>
								<i class="<?php echo $row['icon_bg']; ?>"></i>
							</div>
						</div>

						<?php 
							}
						}
						 ?>
					</div>
				</div>
			</section>

		</div>
	<!--About section End-->

	<!--Services section
		==========================================-->
		<div id="section-services">
			<!-- Page Title service section
				============================================= -->
			<section id="page-title" style="background-color: #FFF; border-bottom: 0;">
				<div class="container clearfix" style="text-align: center;">
					<h1>OUR<b class="heading-color"> SERVICES</b></h1>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				</div>
			</section>
			<!-- #page-title end -->

			<section id="content clear">
				<div class="content-wrap">
					<div class="container clearfix" style="padding-bottom: 60px;">

                        <?php

                        if(mysqli_num_rows($dataServ['section'])) {
                            while ($row = mysqli_fetch_assoc($dataServ['section'])) {
                                ?>

                                <div class="col-md-4" style="margin: 20px 0;">
                                    <div class="feature-box fbox-border fbox-effect">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="<?php echo $row['serv_icon'] ?>"></i></a>
                                        </div>
                                        <h3><?php echo $row['serv_name'] ?></h3>
                                        <p><?php echo $row['serv_para'] ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
					</div>
				</div>
			</section>
		</div>
	<!--Services End-->

	<!--Portfolio section
		==========================================-->
		<div id="section-portfolio">
			<!-- Page Title portfolio section
				============================================= -->
			<section id="page-title">
				<div class="container clearfix" style="text-align: center;">
					<h1>OUR<b class="heading-color"> WORKS</b></h1>
					<span>We  have  been  providing  the  best  IT  & technology solutions  in  Bangladesh and  around the world. We have worked for some reputed companies and organizations such as ....</span>
				</div>
			</section>
			<!-- #page-title end -->

			<section id="content clear" style="background-color: #F5F5F5; padding-bottom: 50px;">
				<div class="content-wrap">
					<div class="container clearfix">

						<!-- Portfolio Filter
						============================================= -->
						<ul class="portfolio-filter clearfix" data-container="#portfolio">
                            <?php
                                if(mysqli_num_rows($dataWork['section'])) {
                                    while ($row = mysqli_fetch_assoc($dataWork['section'])) {
                                        ?>
                                        <li class="<?php echo $row['filter_class'] ?>Filter"><a href="#" data-filter="<?php echo $row['data_filter'] ?>"><?php echo $row['filter_name'] ?></a></li>
                                        <?php
                                    }
                                }
                            ?>
						</ul>
						<!-- #portfolio-filter end -->

						<div class="portfolio-shuffle" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

						<div class="clear"></div>

						<!-- Portfolio Items
							============================================= -->
						<div id="portfolio" class="portfolio grid-container clearfix">
                            <?php
                            if(mysqli_num_rows($dataPort['section'])) {
                                while ($rowPort = mysqli_fetch_assoc($dataPort['section'])) {
                                    ?>
                                    <article class="portfolio-item <?php echo $rowPort['add_class'] ?>">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="<?php echo $upload_dir.$rowPort['port_img'] ?>" alt="Open Imagination">
                                            </a>
                                            <div class="portfolio-overlay">
                                                <a href="<?php echo $upload_dir.$rowPort['port_img'] ?>" class="center-icon" data-lightbox="image"><i class="<?php echo $rowPort['icon_class'] ?>"></i></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="#"><?php echo $rowPort['port_name'] ?></a></h3>
                                            <span><a href="#"><?php echo $rowPort['port_cata'] ?></a></span>
                                        </div>
                                    </article>
                                    <?php
                                }
                            }
                            ?>

						</div>

						</div>

					</div>

				</section>
		</div>
	<!-- #portfolio end -->

	<!--Clients Section
		===================================-->
		<div id="section-clients">
			<section id="content">
				<div class="content-wrap nopadding">

					<div class="section nomargin dark" style="background: linear-gradient(rgba(0, 32, 96, .5),rgba(0, 32, 96, .5)), url('images/slider/swiper/8.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat; padding-top: 0; padding-bottom: 50px;" data-stellar-background-ratio="0.3">

						<!-- Page Title clients section
							============================================= -->
						<section id="page-title" style="background-color: transparent; border-bottom: 0;">
							<div class="container clearfix" style="text-align: center;">
								<h1>CLIENTS &<b class="heading-color"> REVIEW</b></h1>
								<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
							</div>
						</section>
						<!-- #page-title end -->

						<div style="margin-bottom: 50px;" id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

							<div class="oc-item"><a href="#"><img src="images/clients/1.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/2.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/3.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/4.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/5.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/6.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/7.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/8.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/9.png" alt="Clients"></a></div>
							<div class="oc-item"><a href="#"><img src="images/clients/10.png" alt="Clients"></a></div>

						</div>

						<div class="container clearfix">

							<div class="col_two_fifth nobottommargin">&nbsp;</div>

							<div class="nobottommargin col_last">

								<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
									<div class="flexslider">
										<div class="slider-wrap">
											<?php
               									if(mysqli_num_rows($dataComment['section'])){
                    								while($row = mysqli_fetch_assoc($dataComment['section'])){
                        
						                                ?>	
															<div class="slide">
																<div class="testi-content">
																	<p><?php echo $row['client_comment'] ?></p>
																	<div class="testi-meta">
																		<?php echo $row['client_name'] ?>
																		<span><?php echo $row['work_group'] ?></span>
																	</div>
																</div>
															</div>
														<?php
													}
												}
											?>

										</div>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>
			</section>
		</div>
	<!--Clients ENd-->

	<!--Team section
		=================================================-->
		<div id="section-team">
			<!-- Page Title team section
				============================================= -->
			<section id="page-title" style="background-color: #F5F5F5; border-bottom: 0;">
				<div class="container clearfix" style="text-align: center;">
					<h1>Our<b class="heading-color"> Team</b></h1>
					<span>Meet Our Creative Team</span>
				</div>
			</section>
			<!-- #page-title end -->

			<!-- TESTIMONIALS -->
<section class="testimonials">
	<div class="container">

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">
				
			<?php
                
                if(mysqli_num_rows($dataTeam['section'])){
                    while($row = mysqli_fetch_assoc($dataTeam['section'])){
                        ?>

			            <div class="item">
			              <div class="shadow-effect">
			                <img class="img-circle" src="<?php echo $upload_dir.$row['member_img'] ?>" alt="">
			                <h5><?php echo $row['member_name'] ?></h5>
			              </div>
			              <div class="testimonial-name"><?php echo $row['designation'] ?></div>
			            </div>

			            <?php
			        }
			    }
			?>

          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->
		</div>
	<!--Team End-->

	<!--contact section
		==========================================-->
		<div id="section-contact" style="height: auto;padding-bottom: 50px;">
			<!-- Page Title contact section
				============================================= -->
			<section id="page-title" style="background-color: white; border-bottom: 0;">
				<div class="container clearfix" style="text-align: center;">
					<h1><b class="heading-color">CONTACT </b>US</h1>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				</div>
			</section>
			<!-- #page-title end -->

			<div class="row noleftmargin norightmargin bottommargin-lg common-height">
				<div class="col-md-6 contact-box">
					<div id="googleMap" style="width: 100%; height: 100%;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14602.92797785835!2d90.37955294999999!3d23.79255615!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506276502740" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

				<div class="col-md-6 contact-box">
					<div class="max-height">
						<div class="contact-widget">

						<div class="contact-form-result"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

							<div class="form-process"></div>

							<div class="col_half">
								<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
							</div>
							<div class="col_half col_last">
								<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
							</div>

							<div class="clear"></div>

							<div class="col_one_third">
								<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Phone" />
							</div>

							<div class="col_two_third col_last">
								<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
							</div>

							<div class="col_full center">
								<button class="button button-border button-circle t500 noleftmargin topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								<br>
								<small style="display: block; font-size: 13px; margin-top: 15px;">We'll do our best to get back to you within 6-8 working hours.</small>
							</div>

							<div class="clear"></div>

							<div class="col_full hidden">
								<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
							</div>

						</form>

					</div>
					</div>
				</div>
			</div>

			<div class="container-fluid clearfix">
				<div class="divcenter topmargin">
					<div class="col-sm-3">
						<div class="border">
							<i class="fa fa-4x fa-map-marker" aria-hidden="true"></i>
							<h4>OUR OFFICE</h4>
							<p>House 12 (1st Floor), Road 1,
							Chairman Bari, Banani, Dhaka</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="border">
							<i class="fa fa-4x fa-phone" aria-hidden="true"></i>
							<h4>Speak to Us</h4>
							<p>+880 1764733575</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="border">
							<i class="fa fa-4x fa-skype" aria-hidden="true"></i>
							<h4>Make a Video Call</h4>
							<p>Kodeeo OnSkype</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="border">
							<i class="fa fa-4x fa-facebook-square" aria-hidden="true"></i>
							<h4>Follow on Twitter</h4>
							<p>2.3M Followers</p>
						</div>
					</div>
				</div>

			</div>

		</div>
	<!--contact End-->

	<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="col-sm-3">
						<div class="foot-div">
							<img src="images/logo.kodeeo.png" alt="" style="margin-left: 4px;">
							<ul class="footer-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
								<a href="#" data-href="#wrapper"> <li>Home</li></a>
								<a href="#" data-href="#section-about"><li> About</li></a>
								<a href="#" data-href="#section-services"><li> Services</li></a>
								<a href="#" data-href="#section-portfolio"><li> Portfolio</li></a>
								<a href="#" data-href="#section-clients"><li> Clients</li></a>
								<a href="#" data-href="#section-team"><li> Team</li></a>
								<a href="#" data-href="#section-contact"><li> Careers</li></a>
								<a href="#" data-href="#section-contact"><li> Contact</li></a>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="foot-div">
							<h4>Services</h4>
							<ul>
								<li><a href="#" data-href="#"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Web Development</div></a></li>
								<li><a href="#" data-href="#"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> App Development</div></a></li>
								<li><a href="#" data-href="#"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Software Development</div></a></li>
								<li><a href="#" data-href="#"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> E-commerce Solution</div></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="foot-div">
							<h4>Follow Us </h4>
							<div class="clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>
						</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="foot-div">
							<h4>Contact Info</h4>
							<div>
								<i class="icon-envelope2"></i> connect@kodeeo.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +880 1764733575 <span class="middot">&middot;</span><br><i class="icon-skype2"></i> KodeeoOnSkype
							</div>
						</div>
					</div>
				</div>
				<!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container clearfix">
					<div class="col_full">
						© 2017 Kodeeo - A Software Development Company <br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>
				</div>
			</div>
			<!-- #copyrights end -->
		</footer>
	<!-- #footer end -->

	</div>
<!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/library/jquery.js"></script>
	<script type="text/javascript" src="js/library/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/library/functions.js"></script>
    <script>
        $(window).load(function() {

            setTimeout(function() {
                $('.spinner').fadeOut("slow");

                setTimeout(function() {
                    $('#prelaoder').fadeOut("slow");

                    setTimeout(function() {
                        $('.content-block').addClass('animated fadeInDown').fadeIn("slow");
                        $('#footer').fadeIn('slow');

                    }, 900);
                }, 700);
            }, 700);

        });


        var swiper = new Swiper('.gallery-top', {
            spaceBetween: 0,
            pagination: false,
            loop: true,
            simulateTouch: true,
            speed: 3000,
            autoplay: 5000,
            autoplayDisableOnInteraction: false,
            paginationClickable: false
        });

        var thumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            paginationClickable: false,
            direction: 'vertical',
            simulateTouch: true,
            slideToClickedSlide: true
        });

        swiper.params.control = thumbs;
        thumbs.params.control = swiper;
	</script>
	<script>
	jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});
	</script>


</body>
</html>