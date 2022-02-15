<?php 
   class Testimonal extends CI_Controller
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
	          $cat['data']=$this->admin->get_all_data('testimonal');
		      $this->load->view('admin/testimonial',$cat);
	       
	  
		  }
		   else
		  {
			  redirect('Admin/Login/');
		  }
	  }
	   public function add() 
	  { 
	    
		  if($this->session->has_userdata('email'))
		  { 
	          $this->load->view('admin/add_testimonal');
			   extract($_POST);
			  if(isset($submit))
			  
		 {
          
        $target="./assets/testimonal/";
        $filename=strtolower($_FILES['file']['name']);
        $filename=str_replace(" ","-",$filename);
         if($this->resizeImage($_FILES['file']['tmp_name'], $target.$filename, 110, 110)){
       
            $data=array(
			   'title'=>$title,
                'image'=>base_url()."assets/testimonal/".$filename, 
				'description'=>$detail,
				'facebook'=>$facebook,
				'instagram'=>$instagram,
				 'twitter'=>$twitter,
			
                				
           
                
            );
			
            $user=$this->admin->insert_data('testimonal',$data);
			if($user)
			{
				   redirect(base_url()."Admin/Testimonal/");
			}
		else
		{
			echo "eror in inserting value";
		}
		  }
		 
	  }
		 
	  }
	       
	  
		  
	  }
 
	   
	
	   public function slider() 
	  { 
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {
			  $about=$_GET['id'];
			 $this->load->view('admin/add_about_slider');
				   extract($_POST);
				  if(isset($submit))
		   {
           $count=count($_FILES['file']['name']);
		   
		   for($i = 0; $i < $count; $i++){
		   {
			 $target="./about_slider/";
        $filename=strtolower($_FILES['file']['name'][$i]);
        $filename=str_replace(" ","-",$filename);
        if($this->resizeImage($_FILES['file']['tmp_name'][$i], $target.$filename, 750, 420)){
       
            $data=array(
                'about_id'=>$about,
				'image'=>base_url()."about_slider/".$filename,   
           
                
            );
			$user=$this->admin->insert_data('about_image',$data);
			if($user)
			{
				echo "<script>alert('value successfully inserted');</script>";
				//redirect('Admin/About/about');
			}
			
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
	  
	   public function edit() 
	  { 
	  
	      $id=$_GET['id'];
		  
	      $email = $this->session->userdata('email');
		  
		  if($this->session->has_userdata('email'))
		  {
			  
			   
	       $cat['data']=$this->admin->get_specific_data('id',$id,'testimonal');
		  $this->load->view('admin/edit_testimonal',$cat);
			 extract($_POST);
			  if(isset($submit))
			  {
				  
				   if(!empty($_FILES['file']['name']))
			{
				 $target="./assets/testimonal/";
        $filename=strtolower($_FILES['file']['name']);
        $filename=str_replace(" ","-",$filename);
        if($this->resizeImage($_FILES['file']['tmp_name'], $target.$filename, 110, 110)){
       
           $data=array(
			    'title'=>$title,
                'image'=>base_url()."assets/testimonal/".$filename, 
				'description'=>$detail,
				'facebook'=>$facebook,
				'instagram'=>$instagram,
				 'twitter'=>$twitter,
                				
           
                
            );
			
            $user=$this->admin->edit_data('id',$id,$data,'testimonal');
			if($user)
			{
				 
				redirect("Admin/Testimonal/");
			}
		else
		{
			echo "eror in Updating value";
		}
            
		}
				
	        }
			else
			{
				 $data=array(
			    'title'=>$title,
                'description'=>$detail,
				'facebook'=>$facebook,
				'instagram'=>$instagram,
				 'twitter'=>$twitter,
                				
           
                
            );
			
           $user=$this->admin->edit_data('id',$id,$data,'testimonal');
			if($user)
			{
				//echo "value successfully inserted";
				 redirect("Admin/Testimonal/");
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
	  
	  	   public function delete() 
	  { 
	     $id=$_GET['id'];
		 
		  $user=$this->admin->delete_data('id',$id,'testimonal');
	       
         redirect('Admin/Testimonal');		   
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