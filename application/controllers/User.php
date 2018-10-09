<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Users_model');
		
		
	}
	
	public function index(){
		
		if(!$this->session->userdata('student_details'))
			{
				$this->load->view('html/header');
				$this->load->view('html/index');
				$this->load->view('html/footer');
			}else{
				redirect('dashboard');
			}
	}
	public function login(){
		
		if(!$this->session->userdata('student_details'))
			{
				$this->load->view('html/header');
				$this->load->view('html/login-user');
				$this->load->view('html/footer');
			}else{
				redirect('dashboard');
			}
	}
	public  function loginpost(){
		$post=$this->input->post();
		
		$login_deta=array('email'=>$post['email'],'password'=>md5($post['password']));
			$check_login=$this->Users_model->login_details($login_deta);
			if(count($check_login)>0){
				$login_details=$this->Users_model->get_student_details($check_login['u_id']);
					$this->session->set_userdata('student_details',$login_details);
					redirect('dashboard');
			}else{
				$this->session->set_flashdata('error',"Invalid Email Address or Password!");
				redirect('user/login');
			}
			//echo '<pre>';print_r($check_login);exit;
	}
	
	public  function post(){
		
		$post=$this->input->post();
		//echo '<pre>';print_r($post);exit;
		$check_email=$this->Users_model->check_email_exist($post['email']);
		if(count($check_email)>0){
			$this->session->set_flashdata('error',"Email id already exists. Please choose another");
			redirect('');
		}
		$add=array(
		'name'=>isset($post['username'])?$post['username']:'',
		'gender'=>isset($post['gender'])?$post['gender']:'',
		'email_id'=>isset($post['email'])?$post['email']:'',
		'password'=>isset($post['confirmpassword'])?md5($post['confirmpassword']):'',
		'org_password'=>isset($post['confirmpassword'])?$post['confirmpassword']:'',
		'mobile'=>isset($post['mobile'])?$post['mobile']:'',
		'dob'=>isset($post['date'])?$post['date']:'',
		'country'=>isset($post['country'])?$post['country']:'',
		'state'=>isset($post['state'])?$post['state']:'',
		'status'=>1,
		'role'=>2,
		'created_at'=>date('Y-m-d H:i:s'),
		'updated_at'=>date('Y-m-d H:i:s'),
		);
		$save=$this->Users_model->save_user($add);
		if(count($save)>0){
			$login_details=$this->Users_model->get_student_details($save);
			$this->session->set_userdata('student_details',$login_details);
			redirect('dashboard');
		}else{
			$this->session->set_flashdata('error',"Invalid Email Address or Password!");
			redirect('');
		}
		//echo '<pre>';print_r($post);exit;
		
	}
	public function editpost()
	{
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($admindetails);
			$userdetails=$this->Users_model->get_student_details($admindetails['u_id']);
			//echo '<pre>';print_r($userdetails);exit;
			if($userdetails['email_id']!=$post['email']){
				
				$check_email=$this->Users_model->check_email_exist($post['email']);
				if(count($check_email)>0){
					$this->session->set_flashdata('error',"Email id already exists. Please choose another");
					redirect('profile/edit');
				}
			}
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						unlink('assets/profile_pic/'.$userdetails['profile_pic']);
							$temp = explode(".", $_FILES["image"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/profile_pic/" . $image);
						}else{
							$image=$userdetails['profile_pic'];
						}
					$updatedetails=array(
					'name'=>isset($post['username'])?$post['username']:'',
					'gender'=>isset($post['gender'])?$post['gender']:'',
					'email_id'=>isset($post['email'])?$post['email']:'',
					'mobile'=>isset($post['mobile'])?$post['mobile']:'',
					'dob'=>isset($post['date'])?$post['date']:'',
					'country'=>isset($post['country'])?$post['country']:'',
					'state'=>isset($post['state'])?$post['state']:'',
					'address'=>isset($post['address'])?$post['address']:'',
					'profile_pic'=>$image,
					);
				
			$profile_update=$this->Users_model->update_profile_details($admindetails['u_id'],$updatedetails);
			if(count($profile_update)>0){
				$this->session->set_flashdata('success','Profile Details successfully Updated');
				redirect('profile');
				
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('profile/edit');
			}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('');
		}
	}
	public  function forgotpassword(){
			if(!$this->session->userdata('student_details'))
			{
				$this->load->view('html/header');
				$this->load->view('html/forgot-password');
				$this->load->view('html/footer');
			}else{
				redirect('dashboard');
			}	
	}
	public function forgotpost(){
		$post=$this->input->post();
		$check_email=$this->Users_model->check_email_exits($post['email']);
			if(count($check_email)>0){
				
				$this->load->library('email');   
				//$this->email->initialize($config);
				$this->email->from('info@iammillionaire.in', 'forgot');
				$this->email->to($post['email']); 
				$this->email->subject('Forgot - Password');
				$msg='Your Password is :'.$check_email['org_password'];
				$this->email->message($msg);
				//$this->email->message('forgotpassword.');  
				if($this->email->send()){
					$this->session->set_flashdata('success','Check Your Email to reset your password!');
				}else{
					$this->session->set_flashdata('error','Technical problem will occured. try again once');

				}

			}else{
				$this->session->set_flashdata('error','The email you entered is not a registered email. Please try again. ');
				redirect('user/login');	
			}
		
	
	
	}
	
	public  function delete(){
		if($this->session->userdata('student_details'))
		{
			$u_id=base64_decode($this->uri->segment(3));
			$delete=$this->Users_model->delete_user($u_id);
			if(count($delete)>0){
				$this->session->set_flashdata('success','User successfully Deleted');
				redirect('dashboard/lists');
				
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('dashboard/lists');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	public function aboutus(){
		
		if(!$this->session->userdata('student_details'))
			{
				$this->load->view('html/header');
				$this->load->view('html/aboutus');
				$this->load->view('html/footer');
			}else{
				redirect('dashboard');
			}
	}
	
	
	
	
}
