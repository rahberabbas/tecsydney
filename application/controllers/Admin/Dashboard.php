<?php 
   class Dashboard extends CI_Controller 
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
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {
			  $this->load->view('admin/index');
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      } 
	   public function add_servicedetail() 
	  { 
	      $email = $this->session->userdata('email');
		   $id=$_GET['id'];
		   
		  if($this->session->has_userdata('email'))
		  {
			  
			  $this->load->view('admin/add_service_detail');
			  extract($_POST);
			  if(isset($submit))
			  {
				  $data=array(
                'service_id'=>$id,
				'description'=>$description,
				'demo'=>$demo,
				'detail'=>$detail,
                
            );
			
			$user=$this->admin->insert_data('service_detail',$data);
          
			if($user)
			{
				echo "value successfully inserted";
				redirect('Admin/Dashboard/index/');
			}
		else
		{
			echo "eror in inserting value";
		}
			  }
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      }
	   public function service() 
	  { 
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {
			  $cat['data']=$this->admin->get_all_data('service');
			 $this->load->view('admin/service',$cat);
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      } 
	  
	   public function serviceimage() 
	  { 
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {  
	          $id=$_GET['id'];
			  $cat['data1']=array(
			  'id'=>$id,
			  
			  );
			  $cat['data']=$this->admin->get_specific_data('service_id',$id,'service_image');
			 $this->load->view('admin/service_image',$cat);
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      }
	  
	   public function add_serviceimage() 
	  { 
	      $email = $this->session->userdata('email');
		  if($this->session->has_userdata('email'))
		  {  
	  
	            $service=$_GET['service'];
				 
			     $this->load->view('admin/add_serviceimage');
				   extract($_POST);
				  if(isset($submit))
		   {
           $count=count($_FILES['file']['name']);
		   
		   for($i = 0; $i < $count; $i++){
		   {
			 $target="./service_slider/";
        $filename=strtolower($_FILES['file']['name'][$i]);
        $filename=str_replace(" ","-",$filename);
        if($this->resizeImage($_FILES['file']['tmp_name'][$i], $target.$filename, 750, 420)){
       
            $data=array(
                'service_id'=>$service,
				'image'=>base_url()."service_slider/".$filename,   
           
                
            );
			$user=$this->admin->insert_data('service_image',$data);
			if($user)
			{
				echo "<script>alert('value successfully inserted');</script>";
				
			}
			//redirect('Admin/Product/');
		else
		{
			echo "eror in inserting value";
		}
			
		}




			 
		   }
		  
		  }
		   
		   
 }
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      }
	  
	   public function addservice() 
	  { 
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {
			  
			 $this->load->view('admin/add_service');
			 extract($_POST);
			  if(isset($submit)) 
		 {
          
        $target="./service/";
        $filename=strtolower($_FILES['file']['name']);
        $filename=str_replace(" ","-",$filename);
        if($this->resizeImage($_FILES['file']['tmp_name'], $target.$filename, 500, 500)){
       
            $data=array(
                'name'=>$name,
             'image'=>base_url()."service/".$filename,   
           
                
            );
			
            $user=$this->admin->insert_data('service',$data);
			if($user)
			{
				 redirect('Admin/Dashboard/service');
			}
		else
		{
			echo "eror in inserting value";
		}
            
		}
		}
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      }
	  
	   public function editservice() 
	  { 
	  
	      $id=$_GET['id'];
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {
			  
			   
	       $cat['data']=$this->admin->get_specific_data('id',$id,'service');
		  
			  
			 $this->load->view('admin/edit_service',$cat);
			 extract($_POST);
			 if(isset($submit))
		   {
		  if(!empty($_FILES['file']['name']))
			{
				 $target="./service/";
        $filename=strtolower($_FILES['file']['name']);
        $filename=str_replace(" ","-",$filename);
        if($this->resizeImage($_FILES['file']['tmp_name'], $target.$filename, 500, 500)){
       
            $data=array(
                'name'=>$name,
                'image'=>base_url()."service/".$filename,   
           
                
            );
			
            $user=$this->admin->edit_data('id',$id,$data,'service');
			if($user)
			{
				 redirect('Admin/Dashboard/service');
			}
		else
		{
			echo "eror in Updating value";
		}
            
		}
				
	        }
			else{
				
				$data=array(
                'name'=>$name,
                'image'=>$img,   
           
                
            );
			
            $user=$this->admin->edit_data('id',$id,$data,'service');
			if($user)
			{
				 redirect('Admin/Dashboard/service');
			}
		else
		{
			echo "eror in Updating value";
		}
				
			}
			
		   }
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      }
	  
	   public function logout() 
	  { 
	      $this->session->unset_userdata('email');
		  redirect('Admin/Login/');        
      } 
	  private function resizeImage($sourceImage, $targetImage, $maxWidth, $maxHeight, $quality = 100)
    {
        $file_parts = pathinfo($targetImage);
    // Obtain image from given source file.
	$ext=strtolower($file_parts['extension']);
    switch($ext)
        {
            case "jpg":
                $image = @imagecreatefromjpeg($sourceImage);
            break;

            case "png":
                $image = @imagecreatefrompng($sourceImage);
           break;
            case "jpeg":
                $image = @imagecreatefromjpeg($sourceImage);
            break;

        }
    if(!$image){
        return false;
    }
        
    // Get dimensions of source image.
    list($origWidth, $origHeight) = getimagesize($sourceImage);
    // Calculate new image dimensions.
    $newWidth  =  $maxWidth;
    $newHeight = $maxHeight;
    

    // Create final image with new dimensions.
    $newImage = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);
    imagejpeg($newImage, $targetImage, $quality);
    // Free up the memory.
    imagedestroy($image);
    imagedestroy($newImage);
	
    return true;
     }

  } 
?>