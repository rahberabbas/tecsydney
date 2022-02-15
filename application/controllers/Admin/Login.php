<?php 
   class Login extends CI_Controller
   {  
      function __construct() {
	   Parent::__construct();  
       $this->load->helper('url');
	   $this->load->library('session');
	   $this->load->database();
	   $this->load->model('MainModel', 'admin');  
	   
	   
         
      }
      public function index() 
	  { 
	
         $this->load->view('admin/log'); 
		 extract($_POST);
		 if(isset($submit))
		 {			
			  $user=$this->admin->count_row_multiple('email',$email,'password',$password,'admin_login');
			  
			   if($user=='1')
			  {
				  $this->session->set_userdata('email', $email);
				   redirect('Admin/Dashboard/');
				 
				 
                 
			  }
			  else
			  {
				  echo "<script>alert('Enter Correct Info');</script>";
			  } 
		 }
      } 
	 

  } 
?>