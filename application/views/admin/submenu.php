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
					<?php $id=$data1['id'];   ?>
                      <a href="<?= base_url('Admin/About/add_sub/?id='.$id);?>" class="btn btn-primary mb-2">Add New</a>
                        
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Submenu</h5>
						    <div class="row">
							    <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
													<th>title</th>
													<th>Image</th>
													
													<th>Add Slider Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(empty($data)) {?>
                                                    
                                                <?php } ?>
                                                <?php if( ! empty($data)) {?>
                                                <?php foreach($data as $row) { ?>
                                                
                                                <tr>
                                                   <td><?= $row->title;?> </td>
												
													<td><img src=" <?= $row->image;?> " width="100px" height="100px"></td>
												  
												  <td><a href="<?php echo site_url("Admin/About/submenu_slider?id=".$row->id."&cid=".$id);?>" onMouseOver="this.style.color='white'" onMouseOut="this.style.color='black'" >Add Images</a> &nbsp;&nbsp;
													</td>
                                                
                                                    <td><a href="<?php echo site_url("Admin/About/edit_sub?id=".$row->id."&cid=".$id);?>" onMouseOver="this.style.color='white'" onMouseOut="this.style.color='black'" ><i class="glyphicon glyphicon-pencil"></i></a> &nbsp;&nbsp;
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