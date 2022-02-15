 <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
      <!--  <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">---->
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<style>
		.full-width-header .rs-header.style3 .menu-area .logo-part img {
    transition: 0.4s;
    -webkit-transition: 0.4s;
     max-height: 250px; 
}
@media (max-width: 575.98px) { .full-width-header .rs-header.style3 .menu-area .logo-part img {
    transition: 0.4s;
    -webkit-transition: 0.4s;
     max-height: 80px;}
		</style>
    </head>
    <body class="defult-home">
        <div class="offwrap"></div>
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header style3 modify2 header-transparent">
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-2">
                                    <div class="logo-part">
                                        <a href="<?php echo site_url(); ?>">
										
                                            <img class="normal-logo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo">  
                                           <img class="sticky-logo" src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo"> 
										
                                        </a>
                                    </div>
                                    <div class="mobile-menu">
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-10 text-right">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu pr-100 lg-pr-50 md-pr-0">
                                               <ul class="nav-menu">
                                                    <li class="current-menu-item"> <a href="<?php echo site_url(); ?>">Home</a>
                                                    
                                                    </li>
													  <li>
                                                       <a href="<?php echo site_url('about-us'); ?>">About</a>
                                                   </li>
													     <li class="rs-mega-menu menu-item-has-children"> <a href="#">Services</a>
                                                         <ul class="mega-menu"> 
                                                            <li class="mega-menu-container">
                                                                <div class="mega-menu-innner">
																<div class="single-megamenu">
                                                                        <ul class="sub-menu">
                                                                            <li class="menu-title">Development</li>
                                                                            <li><a href="<?php echo site_url('web-development'); ?>">Web Development</a></li>
																			 <li><a href="<?php echo site_url('cms-development/'); ?>">CMS Development</a></li>
                                                                            <li><a href="<?php echo site_url('ecommerce-development/'); ?>">Ecommerce Development</a></li>
                                                                            <li><a href="<?php echo site_url('app-development/'); ?>">App Development</a></li>
																			<li><a href="<?php echo site_url('ios-development/'); ?>">IOS  Development</a></li>
                                                                            <li class="last-item"><a href="<?php echo site_url('psd-html/'); ?>">PSD TO HTML</a></li>
                                                                       </ul>
                                                                    </div>
                                                                    <div class="single-megamenu">
                                                                        <ul class="sub-menu">
                                                                            <li class="menu-title">SEO</li>
                                                                            <li><a href="<?php echo site_url('local-seo/'); ?>">Local SEO</a></li>
                                                                            <li><a href="<?php echo site_url('startup-seo/'); ?>">Start UP SEO</a></li>
                                                                            <li><a href="<?php echo site_url('enterprise-seo/'); ?>">Enterprise SEO</a></li>
                                                                            <li class=""><a href="<?php echo site_url('ecommerce-seo/'); ?>">Ecommerce SEO</a></li>
                                                                            <li><a href="<?php echo site_url('mobile-seo/'); ?>">Mobile SEO</a></li>
                                                                            <li class="last-item"><a href="<?php echo site_url('free-seo-analysis/'); ?>">Free SEO Analysis</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="single-megamenu">
                                                                        <ul class="sub-menu">
                                                                            <li class="menu-title">Social Media Marketing</li>
                                                                            <li><a href="<?php echo site_url('facebook-marketing/'); ?>">Facebook Marketing</a></li>
                                                                            <li><a href="<?php echo site_url('instagram-marketing/'); ?>">Instagram Marketing</a></li>
                                                                            <li><a href="<?php echo site_url('twitter-marketing/'); ?>">Twitter Marketing</a></li>
                                                                            <li><a href="<?php echo site_url('pinterest-marketing/'); ?>">Pinterest Marketing</a></li>
                                                                            <li><a href="<?php echo site_url('linkedin-marketing/'); ?>">Linkedin Marketing</a></li>
                                                                            <li class="last-item"><a href="<?php echo site_url('influncer-marketing/'); ?>">Influncer Marketing</a></li>
                                                                       </ul>
                                                                    </div>
                                                                    <div class="single-megamenu">
                                                                        <ul class="sub-menu">
                                                                            <li class="menu-title">Paid Campaign</li>
                                                                            <li><a href="<?php echo site_url('facebook-ads/'); ?>">Facebook Ads</a></li>
                                                                            <li><a href="<?php echo site_url('google-ads/'); ?>">Google Ads</a></li>
                                                                            <li><a href="<?php echo site_url('pinterest-ads/'); ?>">Pinintrest Ads</a></li>
                                                                            <li><a href="<?php echo site_url('instagram-ads/'); ?>">Instagram Ads</a></li>
                                                                            <li><a href="<?php echo site_url('youtube-ads/'); ?>">Youtube Ads</a></li>
                                                                            
                                                                            <li class="last-item"><a href="<?php echo site_url('linkedin-ads/'); ?>">Linked Ads Ads</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </li>
                                                        </ul> <!-- //.mega-menu -->  
                                                    </li>
                                                  
                                                <!--
                                                   <li class="menu-item-has-children">
                                                      <a href="blog.html">Blog</a>
                                                      <ul class="sub-menu">
                                                          <li><a href="blog.html">Blog</a> </li>
                                                          <li><a href="blog-details.html">Blog Details</a></li>
                                                      </ul>
                                                   </li>---->
												    <li>
                                                       <a href="<?php echo site_url('Home/blog'); ?>">Blogs</a>
                                                   </li>
												    <li>
                                                       <a href="#">Packages</a>
                                                   </li>
                                                   <li>
                                                      <a href="<?php echo site_url('contact/'); ?>">Contact</a>
                                                   </li>
                                               </ul> <!-- //.nav-menu -->
                                            </nav>                                        
                                        </div> <!-- //.main-menu -->
                                        <div class="expand-btn-inner search-icon hidden-md">
                                            <ul>
                                                
                                                <li>
                                                    <a id="nav-expander" class="humburger nav-expander" href="#">
                                                        <span class="dot1"></span>
                                                        <span class="dot2"></span>
                                                        <span class="dot3"></span>
                                                        <span class="dot4"></span>
                                                        <span class="dot5"></span>
                                                        <span class="dot6"></span>
                                                        <span class="dot7"></span>
                                                        <span class="dot8"></span>
                                                        <span class="dot9"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->                    
                </header>
                <!--Header End-->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div class="nav-link">
                            <a id="nav-close" class="humburger nav-expander" href="#">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                                <span class="dot5"></span>
                                <span class="dot6"></span>
                                <span class="dot7"></span>
                                <span class="dot8"></span>
                                <span class="dot9"></span>
                            </a>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="index.html"><!---<img src="assets/images/logo-dark.png" alt="logo">---> <h3 style="color:black;"> TECSYDNEY </h3></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>TECSYDNEY quisque placerat vitae lacus ut scelerisque. Fusce luctus odio ac nibh luctus, in porttitor theo lacus egestas etiusto odio data center.</p>
                    </div>
                    <div class="canvas-contact">
                          <div class="address-area">
                              <div class="address-list">
                                  <div class="info-icon">
                                     <img height="50" width="50" style="margin-left:-10px;" src="<?php echo base_url(); ?>assets/images/india.png">
                                  </div>
								  &nbsp;
                                  <div class="info-content">
                                      <h4 class="title">India Office</h4>
                                      <em> E-6, Second Floor Sector 3 Noida, UP - 201301</em>
									  
                                  </div>
                              </div>
							  <div class="address-list">
                                  <div class="info-icon">
                                     <img height="60" width="60" style="margin-left:-10px;" src="<?php echo base_url(); ?>assets/images/australia.png">
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Australia Office</h4>
                                     
									   <em>Suite 109, Level 1, 83 York Street, Sydney 2000</em>
                                  </div>
                              </div>
                              <div class="address-list">
                                  <div class="info-icon">
                                           <img height="60" width="60" style="margin-left:-10px;" src="<?php echo base_url(); ?>assets/images/email.png">
                                
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Email</h4>
                                      <em><a href="mailto:info@tecsydney.com">info@tecsydney.com</a></em>
                                  </div>
                              </div>
                              <div class="address-list">
                                  <div class="info-icon">
                                          <img height="60" width="60" style="margin-left:-10px;" src="<?php echo base_url(); ?>assets/images/telephone.png">
                                
                                  </div>
                                  <div class="info-content">
                                      <h4 class="title">Phone</h4>
                                      <em>+91 7838-666-555</em>
                                  </div>
                              </div>
                          </div>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </div>
            <!--Full width header End-->