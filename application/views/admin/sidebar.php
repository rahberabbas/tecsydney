<nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                           
                            
                            <a class="nav-link" href="<?= base_url('Admin/Dashboard/index');?>" >
                                <span class="feather-icon"><i data-feather="activity"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        
                           
                        </li>
                     
                        
                       
							 <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#master_section1">
                                    <span class="feather-icon"><i data-feather="zap"></i></span>
                                    <span class="nav-link-text">Blogs</span>
                                </a>
                                <ul id="master_section1" class="nav flex-column collapse collapse-level-1">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"  href="<?= site_url('Admin/Blogs/');?>">Blogs List</a>
                                            </li>
											<li class="nav-item">
                                                <a class="nav-link"  href="<?= site_url('Admin/Blogs/add');?>">Add Blogs</a>
                                            </li>
											
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </li>  
							
							
								 <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#master_section2">
                                    <span class="feather-icon"><i data-feather="zap"></i></span>
                                    <span class="nav-link-text">Contacts</span>
                                </a>
                                <ul id="master_section2" class="nav flex-column collapse collapse-level-1">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"  href="<?= site_url('Admin/Contact/');?>">Contacts List</a>
                                            </li>
											<
											
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </li>  
							
							 <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#master_section3">
                                    <span class="feather-icon"><i data-feather="zap"></i></span>
                                    <span class="nav-link-text">Services Required</span>
                                </a>
                                <ul id="master_section3" class="nav flex-column collapse collapse-level-1">
                                    <li class="nav-item">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link"  href="<?= site_url('Admin/Service/');?>">Service List</a>
                                            </li>
											<
											
                                           
                                        </ul>
                                    </li>
                                </ul>
                            </li>  
							
                       
                        
                       
                     
                    </ul>
                  
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>