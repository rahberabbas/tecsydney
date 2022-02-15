<?php 
   class Slider extends CI_Controller
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
	          
			  $cat['data']=$this->admin->get_all_data('slider');
		      $this->load->view('admin/slider',$cat);
			  extract($_POST);	
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      } 
	  
	   public function subscribe() 
	  { 
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {   
	          
			  $cat['data']=$this->admin->get_all_data('subscribe');
		      $this->load->view('admin/subscribe',$cat);
			  extract($_POST);	
		  }
		  else
		  {
			  redirect('Admin/Login/');
		  }
		  
          
      } 
	  
	   
	   public function add() 
	  { 
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {
			  
			 $this->load->view('admin/add_slider');
			 extract($_POST);
			  if(isset($submit)) 
		 {
          
        $target="./assets/slider/";
        $filename=strtolower($_FILES['file']['name']);
        $filename=str_replace(" ","-",$filename);
        if($this->resizeImage($_FILES['file']['tmp_name'], $target.$filename, 1024, 500)){
       
            $data=array(
             'image'=>base_url()."assets/slider/".$filename,   
           
                
            );
			
            $user=$this->admin->insert_data('slider',$data);
			if($user)
			{
				 redirect('Admin/Slider/');
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
	  
	   public function edit() 
	  { 
	  
	      $id=$_GET['id'];
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {
			  
			   
	       $cat['data']=$this->admin->get_specific_data('id',$id,'slider');
		  
			  
			 $this->load->view('admin/edit_slider',$cat);
			 extract($_POST);
			 if(isset($submit))
		   {
		  if(!empty($_FILES['file']['name']))
			{
				 $target="./assets/slider/";
        $filename=strtolower($_FILES['file']['name']);
        $filename=str_replace(" ","-",$filename);
        if($this->resizeImage($_FILES['file']['tmp_name'], $target.$filename, 1024, 500)){
       
            $data=array(
                'image'=>base_url()."assets/slider//".$filename,   
           
                
            );
			
            $user=$this->admin->edit_data('id',$id,$data,'slider');
			if($user)
			{
				 redirect('Admin/Slider/');
			}
		else
		{
			echo "eror in Updating value";
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
	  
	  	   public function delete() 
	  { 
	     $id=$_GET['id'];
		  $user=$this->admin->delete_data('id',$id,'slider');
	       redirect('Admin/Slider/');        
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