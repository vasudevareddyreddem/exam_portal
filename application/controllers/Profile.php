<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Profile extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
		
	}
	public function index()
	{
		if($this->session->userdata('student_details'))
		{
			$student_details=$this->session->userdata('student_details');
			$data['details']=$this->Users_model->get_all_user_details($student_details['u_id']);
			$this->load->view('html/profile',$data);
			$this->load->view('html/footer');

		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	public function edit()
	{
		if($this->session->userdata('student_details'))
		{
			$student_details=$this->session->userdata('student_details');
			$data['details']=$this->Users_model->get_all_user_details($student_details['u_id']);
			$this->load->view('html/edit-profile',$data);
			$this->load->view('html/footer');

		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function editpost()
	{
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$userdetails=$this->Users_model->get_admin_details($admindetails['id']);
			if($userdetails['email']!=$post['email']){
				
				$check_email=$this->Users_model->check_email_exits($post['email']);
				if(count($check_email)>0){
					$this->session->set_flashdata('error',"Email address already exists. Please another email address.");
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
					'name'=>isset($post['name'])?$post['name']:'',
					'email'=>isset($post['email'])?$post['email']:'',
					'phone'=>isset($post['phone'])?$post['phone']:'',
					'address'=>isset($post['address'])?$post['address']:'',
					'notes'=>isset($post['notes'])?$post['notes']:'',
					'profile_pic'=>$image,
					);
				
			$profile_update=$this->Users_model->update_profile_details($admindetails['id'],$updatedetails);
			if(count($profile_update)>0){
				$this->session->set_flashdata('success','Profile Details successfully Updated');
				redirect('profile');
				
			}else{
				$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
				redirect('profile/edit');
			}
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepassword()
	{
		if($this->session->userdata('student_details'))
		{
				$this->load->view('html/change-password');
				$this->load->view('html/footer');
			
		}else{
			$this->session->set_flashdata('loginerror','Please login to continue');
			redirect('admin');
		}
	}
	public function changepasswordpost(){
	 
		if($this->session->userdata('student_details'))
		{
			$student_details=$this->session->userdata('student_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$admin_details = $this->Users_model->get_adminpassword_details($student_details['u_id']);
			if($admin_details['password']== md5($post['oldpassword'])){
				if(md5($post['password'])== md5($post['confirmpassword'])){
						$updateuserdata=array(
						'password'=>md5($post['confirmpassword']),
						'org_password'=>$post['confirmpassword'],
						'updated_at'=>date('Y-m-d H:i:s'),
						);
						//echo '<pre>';print_r($updateuserdata);exit;
						$upddateuser = $this->Users_model->update_profile_details($student_details['u_id'],$updateuserdata);
						if(count($upddateuser)>0){
							$this->session->set_flashdata('success',"password successfully updated");
							redirect('profile');
						}else{
							$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
							redirect('profile/changepassword');
						}
					
				}else{
					$this->session->set_flashdata('error',"Password and Confirm password are not matched");
					redirect('profile/changepassword');
				}
				
			}else{
				$this->session->set_flashdata('error',"Old password are not matched");
				redirect('profile/changepassword');
			}
				
			
		}else{
			 $this->session->set_flashdata('error','Please login to continue');
			 redirect('');
		} 
	 
	}
	
	
	
	
	
}