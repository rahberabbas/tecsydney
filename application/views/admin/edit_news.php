<!DOCTYPE html>
<!-- 
Template Name: Griffin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Support: support@hencework.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<?php include('header.php');?>

<body>
    <!-- Preloader -->
   
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	
	<div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <?php include('topNav.php');?>
        <!-- /Top Navbar -->
	
        <!-- Vertical Nav -->
        <?php include('sidebar.php');?>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
       
            <div class="hk-pg-wrapper">
			<!-- Container -->
                <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
               <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
					
					   <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
								<?php foreach($data as $row) {  ?>
								<form method="post" enctype="multipart/form-data">
                                     
									 <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <div class="tinymce-wrap">
                                                <input style="width:100%;" class="form-control mb-2" id="inlineFormInput" placeholder="Title" type="text" value="<?php echo $row->title; ?>"  name="title"  required>
												
												</div>
                                            </div>
											<br />
											 
											
											
											 
											
											 <div class="col-auto">
                                                <div class="tinymce-wrap">
                                                <input style="width:100%;" class="form-control mb-2" id="inlineFormInput"type="file"  name="file"  >
												800 X 550
												</div>
                                            </div>
											<br />
										<div class="col-auto">
                                                <div class="tinymce-wrap">
                                                    <textarea class="tinymce" name="detail" required><?php echo $row->description; ?> </textarea>
                                                </div>
                                            </div>
											
											<br />
											
                                            <div class="col-auto">
                                                <input type="submit" name="submit" value="submit" class="btn btn-primary mb-2">
                                            </div>
                                        </div>
									
                                    </form>
								<?php }  ?>
                                </div>
                            </div>
                            <hr>
                            
                        </section>
                        
                    </div>
                </div>
                 
                    </div>
                </div>					
		
                <!-- /Row -->
            </div>
            <!-- /Container -->
			
            <!-- Footer -->
                <?php include('footer.php');?>
            <!-- Footer -->
            </div>
       
        
        <!-- /Main Content -->

    </div>
    
    <!-- /HK Wrapper -->

    <!-- jQuery -->
	<?php include('jquery.php');?>
</body>

</html>