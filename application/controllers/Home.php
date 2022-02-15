<?php
defined('BASEPATH') OR exit('No direct script access allowed');

       class Home extends CI_Controller {
            function __construct() {
	   Parent::__construct();  
       $this->load->helper('url');
	   $this->load->library('session');
	  $this->load->database();
	 $this->load->model('MainModel', 'admin');  

	   $this->load->library("pagination");
	  // $this->load->library('home');
         
      }
	public function index()
	{
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	
	public function blog()
	{
		
		$config = array();
        $config["base_url"] = base_url() . "home/blog";
        $config["total_rows"] = $this->admin->count_rec('blogs');
        $config["per_page"] = 8;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['blog'] = $this->admin->get_authors($config["per_page"], $page);

        $this->load->view('blog', $data);
		
		
		
		
		
		
		
		
	}
	
	public function single()
	{
		
		$id=$_GET['id'];

        $data['blog'] = $this->admin->get_specific_data('id',$id,'blogs');

        $this->load->view('single', $data);
		
		
		
		
		
		
		
		
	}
	
	public function success()
	{
		$this->load->view('success');
	}
	
	public function web()
	{
		$this->load->view('web-development');
	}
	public function cms()
	{
		$this->load->view('cms-development');
	}
	
	public function ecommercedev()
	{
		$this->load->view('ecommerce-development');
	}
	
	public function appdev()
	{
		$this->load->view('app-development');
	}
	public function ios()
	{
		$this->load->view('ios-development');
	}
	
	public function local_seo()
	{
		$this->load->view('local-seo');
	}
	public function startup_seo()
	{
		$this->load->view('startup-seo');
	}
	
	public function free_seo()
	{
		$this->load->view('free-seo');
	}
	
	public function facebook_marketing()
	{
		$this->load->view('facebook-marketing');
	}
	
	public function twitter_marketing()
	{
		$this->load->view('twitter-marketing');
	}
	
	public function pinterest_marketing()
	{
		$this->load->view('pinterest-marketing');
	}
	
	public function linkedin()
	{
		
		$this->load->view('linkedin-marketing');
	}
	
	public function influncer()
	{
		
		$this->load->view('influncer-marketing');
	}
	
	
	public function facebook_ads()
	{
		
		$this->load->view('facebook-ads');
	}
	
	public function linkedin_ads()
	{
		
		$this->load->view('linkedin-ads');
	}
	
	public function youtube_ads()
	{
		
		$this->load->view('youtube-ads');
	}
	
	public function instagram_ads()
	{
		
		$this->load->view('instagram-ads');
	}
	
	public function pinterest_ads()
	{
		
		$this->load->view('pinterest-ads');
	}
	
	public function google_ads()
	{
		
		$this->load->view('google-ads');
	}
	
	
	public function instagram_marketing()
	{
		$this->load->view('instagram-marketing');
	}
	
	
	public function enterprise_seo()
	{
		$this->load->view('enterprise-seo');
	}
	
	public function mobile_seo()
	{
		$this->load->view('mobile-seo');
	}
	
	public function ecommerce_seo()
	{
		$this->load->view('ecommerce-seo');
	}
	
	public function psd()
	{
		$this->load->view('psd');
	}
	public function savedata()
	{
		
		extract($_POST);
            $data=array(
			  'name'=>$name,
			   'email'=>$email,  
			     'phone'=>$phone,
			     'service'=>$service,
				 'message'=>$message
			 
           
                
            );
			
            $user=$this->admin->insert_data('service',$data);
			if($user)
			{
				 redirect('home/success');
			}
		else
		{
			echo "<script>alert('eror in inserting value');</script>";
		}
	}
	
	public function contact()
	{
		$this->load->view('contact');
		extract($_POST);
		if(isset($_POST['save']))
		{
			echo "<script>alert('hlo');</script>";
		
            $data=array(
			  'name'=>$name,
			   'email'=>$email,  
			     'phone'=>$phone,
			     'subject'=>$subject,
				 'message'=>$message
			 
           
                
            );
			
            $user=$this->admin->insert_data('contact',$data);
			if($user)
			{
				 redirect('home/success');
			}
		else
		{
			echo "<script>alert('eror in inserting value');</script>";
		}
            
		
		}
	}
	
	public function category()
	{
		$category = $_GET['category'];
		$this->load->helper('url');
		$this->load->library('pagination');
		$config = array();
        $config["base_url"] = base_url() . "Home/category/?category='".$category."'";
        $config["uri_segment"] = 2;
         $count=$this->admin->count_row('category',$category,'news');
   
               $config['total_rows'] = $count;
                $config['per_page'] = 2;


 $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';



    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';


    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';

$this->pagination->initialize($config);
$link = $this->pagination->create_links();
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data= $this->admin->fetch_cat($config["per_page"], $page,$category);  

		$this->load->view('category',compact('data','link','category'));
		
	}
	
	
	
	
		public function subscribe()
	{
		extract($_POST);
		$data=array(
		'first_name'=>$fname,
		'last_name'=>$lname,
		 'email'=>$email,
          'phone'=>$phone,
           'message'=>$message,		  
		);
		$user=$this->admin->insert_data('subscribe',$data);
			if($user)
			{
				$this->session->set_flashdata('item', 'data inserted succesfully');
				 redirect('Home/');
			}
		else
		{
			$this->session->set_flashdata('item', 'Eror in insertion');
			redirect('Home/');
		}
		
		
	}
		
		public function join()
	{
		$this->load->view('join');
		extract($_POST);
		if(isset($submit))
		{
			echo "<script>alert('test');</script>";
			 if(!empty($_FILES['docs']['name']))
			{
		   $filename=strtolower($_FILES['docs']['name']);
           $filename=str_replace(" ","-",$filename);
		   $config['upload_path'] = './assets/trainer_doc/';
           $config['allowed_types'] = 'pdf|jpg|png|docs|docx';
           $this->load->library('upload', $config);
           $this->upload->do_upload('docs');
           $docs=base_url()."assets/trainer_doc/".$filename; 
              
			}
			if(empty($_FILES['docs']['name']))
			{
				$docs='';
			}
			if(empty($_FILES['id_proff']['name']))
			{
				 $proff='';
			}
			if(!empty($_FILES['id_proff']['name']))
			{
				 $filename=strtolower($_FILES['id_proff']['name']);
           $filename=str_replace(" ","-",$filename);
		   $config['upload_path'] = './assets/trainer_id/';
           $config['allowed_types'] = 'pdf|jpg|png|docs|docx';
           $this->load->library('upload', $config);
           $this->upload->do_upload('id_proff');
           $proff=base_url()."assets/trainer_id/".$filename; 
			}
			
			 $data=array(
             'name'=>$name,   
			  'email'=>$email,
			  'phone'=>$phone,
			   'document'=>$docs,
			    'id_proff'=>$proff,
				 'description'=>$message,
           
                
            );
			
            $user=$this->admin->insert_data('trainer',$data);
			if($user)
			{
				
				 redirect('Admin/Slider/');
			}
			
			
		}
	}
}
