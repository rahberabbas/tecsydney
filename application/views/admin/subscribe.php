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
                            <h5 class="hk-sec-title">Subscribe List</h5>
						    <div class="row">
							    <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
													
												
													<th>First Name</th>
													<th>Last Name</th>
													<th>Email</th>
													<th>Phone</th>
													<th>Message</th>
													
												
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
											
                                                <?php  if(empty($data)) {?>
                                                    
                                                <?php } ?>
                                                <?php if( ! empty($data)) {?>
                                                <?php foreach($data as $row) {  ?>
                                                
                                                <tr>
                                                  
												 <td>
												<?= $row->first_name;?>"
												 </td>
												 <td>
												<?= $row->last_name;?>"
												 </td>
												  <td>
												<?= $row->email;?>"
												 </td>
												  <td>
												<?= $row->phone;?>"
												 </td>
												  <td>
												<?= $row->message;?>"
												 </td>
												
													
                                                </tr>
                                                <?php } }?>
                                            </tbody>
                                           
                                        </table>
                                    </div>							    
								
							    </div>
						    </div>
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