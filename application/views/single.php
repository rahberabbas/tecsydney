<!DOCTYPE html>
<html lang="zxx">  
    <style>
	.rs-banner.style7 {
    background: url(assets/images/slider/slider-1-1.jpg);
    background-color: #03228F;
    background-repeat: no-repeat;
    background-size: cover;
}
	</style>
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>TecSydney - IT Solutions and Technology</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <?php include('header.php'); ?>
			
			  <div class="rs-banner style7 modify3 rs-rain-animate" style="background: url(<?php echo base_url(); ?>assets/images/slider/slider-1-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <span class="sub-title">Modern. Professional. Reliable.</span>
                               <h1 class="title">Our Blogs</h1>
                                <p class="desc">
                                   We are leading technology solutions providing company all over the world doing over 12+ years.
                                </p>
                                <ul class="banner-btn">
                                    <li><a class="readon started" href="<?php echo site_url('contact/'); ?>">Get Started</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="line-inner style2 orange-dark">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            
            <!-- Banner Section End -->

            <!-- Partner Start -->
			
			<!---
            <div class="rs-partner style2 pt-50 pb-50">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="assets/images/partner/style2/1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="assets/images/partner/style2/2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="assets/images/partner/style2/3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="assets/images/partner/style2/4.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="assets/images/partner/style2/5.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="assets/images/partner/style2/6.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="assets/images/partner/style2/7.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="partner-item">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="assets/images/partner/style2/8.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>---->
            <!-- Partner End -->
                  
				  
				    <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                               
                                <div class="recent-posts mb-50">
                                    <div class="widget-title">
                                        <h3 class="title">Latest Posts</h3>
                                    </div>
									<?php
$sql ="SELECT * FROM blogs where deleted_at='' order by id desc limit 0,4";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
  foreach ($query->result() as $row) {?>


									
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="<?= base_url('home/single/?id='.$row->id);?>"><img src="<?php echo $row->image; ?>" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="<?= base_url('home/single/?id='.$row->id);?>"><?php echo $row->title; ?> </a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                               <?php
$time = $row->created_at;

echo $time = date("H:i:s",strtotime($time));	  ?>		
                                            </span>
                                        </div>
                                    </div>
<?php } } ?>
                                  
                                   
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-8 pr-35 md-pr-15">
                            <div class="row">
							<?php foreach($blog as $row) { ?>
                                <div class="col-lg-12 mb-50">
								
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="<?php echo $row->image; ?>" alt=""></a>
                                            <ul class="post-categories">
                                                <li><a href="#"><?php echo $row->title;  ?></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#"><?php echo $row->title;  ?></a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> <?php
$time = $row->created_at;

echo $time = date("H:i:s",strtotime($time));	  ?>		                                                       
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> admin  
                                                        </div>
                                                    </li> 
                                                </ul>
                                            </div>
                                            <div class="blog-desc">   
											<?php echo $row->description; ?>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
							<?php } ?>
                                
                             
                            </div>
							
                        </div>
                    </div> 
                </div>
            </div>
				
			
			
			
		<?php include('footer.php'); ?>