<?php 
	require_once('db.php');
	$upload_dir = '../images/';

	$query = "select * from about_section";
	$result = mysqli_query($connection, $query);
	$data['section'] = $result;


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
			                $query = "select * from slider_section";
			                $result = mysqli_query($connection, $query);
			                if(mysqli_num_rows($result)){
			                    while($row = mysqli_fetch_assoc($result)){
			            ?>

                          <div class="swiper-slide">
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
                        $sectionTotalRow = mysqli_num_rows($data['section']);
//                        echo 'total = '. $sectionTotalRow;
                        echo '<br>';
                        $devRow = (int) ($sectionTotalRow / 3)*3;
//                        echo 'division ='. $devRow ;
                        $divMod = $sectionTotalRow % 3;
//                        echo 'div_mod ='. $divMod;
                        $countSection = 0;
                        $flag = 0;


                        if($sectionTotalRow){
                            while ($row = mysqli_fetch_assoc($data['section'])) {
                                $countSection ++;
                                if($countSection <= $devRow || $flag == 1) {
                                    ?>
                                    <div class="col-md-4 dark col-padding ohidden"
                                         style="background-color: <?php echo $row['bg_color']; ?>;">
                                        <div>
                                            <h3><?php echo $row['heading'] ?></h3>
                                            <p><?php echo $row['paragraph'] ?></p>
                                            <a href="#"
                                               class="button button-border button-light button-rounded uppercase nomargin"><?php echo $row['btn_text'] ?></a>
                                            <i class="<?php echo $row['icon_bg']; ?>"></i>
                                        </div>
                                    </div>
                                    <?php
                                } else {
                                    if($divMod == 1) {
                                        ?>
                                        <div class="col-md-4 dark col-padding ohidden"></div>
                                        <div class="col-md-4 dark col-padding ohidden"
                                             style="background-color: <?php echo $row['bg_color']; ?>;">
                                            <div>
                                                <h3><?php echo $row['heading'] ?></h3>
                                                <p><?php echo $row['paragraph'] ?></p>
                                                <a href="#"
                                                   class="button button-border button-light button-rounded uppercase nomargin"><?php echo $row['btn_text'] ?></a>
                                                <i class="<?php echo $row['icon_bg']; ?>"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4 dark col-padding ohidden"></div>
                                        <?php
                                    } elseif($divMod == 2) {
                                        ?>
                                        <div class="col-md-4 dark col-padding ohidden"
                                             style="background-color: <?php echo $row['bg_color']; ?>;">
                                            <div>
                                                <h3><?php echo $row['heading'] ?></h3>
                                                <p><?php echo $row['paragraph'] ?></p>
                                                <a href="#"
                                                   class="button button-border button-light button-rounded uppercase nomargin"><?php echo $row['btn_text'] ?></a>
                                                <i class="<?php echo $row['icon_bg']; ?>"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4 dark col-padding ohidden"></div>

                                        <?php
                                        $flag = 1;
                                    }
                                }


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

						<div class="col_one_third">
							<div class="feature-box fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-screen i-alt"></i></a>
								</div>
								<h3>Web Development</h3>
								<p>Quality & industry standard website design & development.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-eye i-alt"></i></a>
								</div>
								<h3>App Development</h3>
								<p>Android & cross-platform mobile app development.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-beaker i-alt"></i></a>
								</div>
								<h3>Software Development</h3>
								<p>Custom desktop & cloud based management software development.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-stack i-alt"></i></a>
								</div>
								<h3>E-commerce Solution</h3>
								<p>Full fledged e-commerce solution for your business.</p>
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-tint i-alt"></i></a>
								</div>
								<h3>Unlimited Color Options</h3>
								<p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
							</div>
						</div>

						<div class="col_one_third nobottommargin col_last">
							<div class="feature-box fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-text-width i-alt"></i></a>
								</div>
								<h3>CUSTOMIZABLE FONTS</h3>
								<p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
							</div>
						</div>

						<div class="clear"></div>

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
							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
							<li><a href="#" data-filter=".apps">Mobile Apps</a></li>
							<li><a href="#" data-filter=".software-devlopment">Software Devlopment</a></li>
							<li><a href="#" data-filter=".web-design">Web Design</a></li>
							<li><a href="#" data-filter=".web-development">Web Development</a></li>
						</ul>
						<!-- #portfolio-filter end -->

						<div class="portfolio-shuffle" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

						<div class="clear"></div>

						<!-- Portfolio Items
							============================================= -->
						<div id="portfolio" class="portfolio grid-container clearfix">

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/4.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/4.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Akashbari Holidays</a></h3>
									<span><a href="#">Web design</a></span>
								</div>
							</article>

							<article class="portfolio-item apps">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/5.png" alt="Locked Steel Gate">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/5.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Oi Khali</a></h3>
									<span><a href="#">Mobile App</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/6.png" alt="Mac Sunglasses">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/6.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Good &amp; Green</a></h3>
									<span><a href="#">Web design</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/2.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Business Firm</a></h3>
									<span><a href="#">Software Development firm</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/1.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Music Portal</a></h3>
									<span><a href="#">Music</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/7.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/7.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="">-------------</a></h3>
									<span><a href="#">------</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/8.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/8.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="">Darul Ihsan Univeristy</a></h3>
									<span><a href="#">University</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/9.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/9.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="">Interior design house</a></h3>
									<span><a href="#">Interior design</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/10.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/10.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Ogasta BD Shop</a></h3>
									<span><a href="#">Ecommerce</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/11.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/11.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">-----------</a></h3>
									<span><a href="#">-------</a></span>
								</div>
							</article>

							<article class="portfolio-item web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/12.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/12.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Quran Hadis</a></h3>
									<span><a href="#">Web design</a></span>
								</div>
							</article>

							<article class="portfolio-item web-design web-development">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/portfolio/small/3.png" alt="Open Imagination">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/big/3.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">-------------</a></h3>
									<span><a href="#">------</a></span>
								</div>
							</article>

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

											<div class="slide">
												<div class="testi-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis sem id leo pretium, non mattis nibh maximus. Cras convallis eu sapien quis aliquam. iure perferendis provident quia eaque vero numquam?</p>
													<div class="testi-meta">
														Steve Jobs
														<span>Apple Inc.</span>
													</div>
												</div>
											</div>

											<div class="slide">
												<div class="testi-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis sem id leo pretium, non mattis nibh maximus. Cras convallis eu sapien quis aliquam. </p>
													<div class="testi-meta">
														Collis Ta'eed
														<span>Envato Inc.</span>
													</div>
												</div>
											</div>

											<div class="slide">
												<div class="testi-content">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis sem id leo pretium, non mattis nibh maximus. Cras convallis eu sapien quis aliquam. </p>
													<div class="testi-meta">
														John Doe
														<span>XYZ Inc.</span>
													</div>
												</div>
											</div>
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
			<div class="container clearfix">
				<div class="col_two_fifth nobottommargin">&nbsp;</div>
				<div class="nobottommargin col_last">
					<div class="fslider testimonial testimonial-full nobgcolor noborder noshadow nopadding" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">

								<div class="slide">
									<div class="testi-content">
										<div class="row">

											<div class="col-sm-4">
												<div class="team_member">
													<div class="team_item">
														<img src="images/team/1.jpg">
													</div>
													<div class="testi-meta">
														Muhammad Sumon Molla Selim
														<span>Chief Executive Officer</span>
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="team_member">
													<div class="team_item">
														<img src="images/team/2.jpg">
													</div>
													<div class="testi-meta">
														Muhammad Salahuddin Rana
														<span>Chief Technology Officer</span>
													</div>
												</div>
											</div>

											<div class="col-sm-4">
												<div class="team_member">
													<div class="team_item">
														<img src="images/team/3.jpg">
													</div>
													<div class="testi-meta">
														Tafhimur Rahman
														<span>Chief Operating Officer</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="slide">
									<div class="testi-content">
										<div class="row">

											<div class="col-sm-4">
												<div class="team_member">
													<div class="team_item">
														<img src="images/team/4.jpg">
													</div>
													<div class="testi-meta">
														Shipu Ahamed
														<span>Software Engineer</span>
													</div>
												</div>
											</div>

											<div class="col-sm-4">
												<div class="team_member">
													<div class="team_item">
														<img src="images/team/5.jpg">
													</div>
													<div class="testi-meta">
														Faisal Ahmed
														<span>Android Developer</span>
													</div>
												</div>
											</div>

											<div class="col-sm-4">
												<div class="team_member">
													<div class="team_item">
														<img src="images/team/6.jpg">
													</div>
													<div class="testi-meta">
														Ebn Sina
														<span>Web Developer ( Intern )</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-content">
										<div class="row">

											<div class="col-sm-6">
												<div class="team_member">
													<div class="team_item">
														<img src="images/team/7.jpg">
													</div>
													<div class="testi-meta">
														Bayes Ahmed Shoharto
														<span>Web Developer ( Intern )</span>
													</div>
												</div>
											</div>

											<div class="col-sm-6">
												<div class="team_member">
													<div class="team_item">
														<img src="images/team/8.jpg">
													</div>
													<div class="testi-meta">
														Abdullah Al Fahad
														<span>Web Developer ( Intern )</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
							<img src="images/logo.kodeeo.png" alt="">
							<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
								<li><a href="#" data-href="#wrapper"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Home</div></a></li>
								<li><a href="#" data-href="#section-about"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> About</div></a></li>
								<li><a href="#" data-href="#section-services"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Services</div></a></li>
								<li><a href="#" data-href="#section-portfolio"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Portfolio</div></a></li>
								<li><a href="#" data-href="#section-clients"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Clients</div></a></li>
								<li><a href="#" data-href="#section-team"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Team</div></a></li>
								<li><a href="#" data-href="#section-contact"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Careers</div></a></li>
								<li><a href="#" data-href="#section-contact"><div><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Contact</div></a></li>
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


</body>
</html>