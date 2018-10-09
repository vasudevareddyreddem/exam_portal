<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Dashboard extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
		
	}
	public function index()
	{
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			
			if($admindetails['role']==2){
				
				$data['exam_list']=$this->Users_model->get_active_exam_list();
				$priovus_exam_list=$this->Users_model->get_provious_exam_list($admindetails['u_id']);
				if(isset($priovus_exam_list) && count($priovus_exam_list)>0){
					foreach($priovus_exam_list as $list){
						$written_exam_id[]=$list['exam_id'];
						
					}
					$data['exam_ids_list']=$written_exam_id;
					//$test=implode(",",$written_exam_id);
					//$data['exam_ids_list']="'" . implode ( "', '", $written_exam_id ) . "'";
				}else{
					$data['exam_ids_list']=array();
				}
				
				$user_register_time=$this->Users_model->get_login_time_still($admindetails['u_id']);
				$data['total_score']=$this->Users_model->get_user_total_score($admindetails['u_id']);
				$data['today_score']=$this->Users_model->get_user_today_score($admindetails['u_id'],date('Y-m-d'));
				$dat=date('Y-m-d');
				$date1 = new DateTime($dat);
				$date2 = new DateTime($user_register_time['created_at']);
				$diff = $date1->diff($date2);
				// will output 2 days
				$data['total_days']=$diff->days . ' days ';
				
				//echo '<pre>';print_r($user_register_time);
				//echo '<pre>';print_r($data['total_days']);exit;
				$this->load->view('html/start-exam',$data);
				$this->load->view('html/footer');
			}else{
				redirect('exam/lists');
			}
			
			

		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	public  function lists(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$data['user_list']=$this->Users_model->get_all_users_list();
				$this->load->view('html/user_list',$data);
				$this->load->view('html/footer');
				//echo '<pre>';print_r($admindetails);exit;
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	public function logout(){
		$userinfo = $this->session->userdata('student_details');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('student_details');
		$this->session->unset_userdata('student_details');
        redirect('');
	}
	public  function notifications(){
		
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$data['notification_list']=$this->Users_model->get_all_notification_list();
				$this->load->view('html/notifications',$data);
				$this->load->view('html/footer');
				//echo '<pre>';print_r($data);exit;
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	public  function notifications_view(){
		if($this->session->userdata('student_details'))
		{
			$student_details=$this->session->userdata('student_details');
			if($student_details['role']==2){
				
				$data['notification_list']=$this->Users_model->get_user_notification_list($student_details['u_id']);
				if(isset($data['notification_list'])&& count($data['notification_list'])>0){
					foreach($data['notification_list'] as $lis){
						$update=array('read'=>1);
						$this->Users_model->update_notification_read_count($lis['n_id'],$update);
					}
				}
				$this->load->view('html/notifications-view.php');
				$this->load->view('html/footer');
				//echo '<pre>';print_r($data);exit;
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	public  function addnotification(){
		$post=$this->input->post();
		$admindetails=$this->session->userdata('student_details');
		$user_list=$this->Users_model->get_all_users_lists();
		foreach($user_list as $li){
			$add=array(
			'user_id'=>isset($li['u_id'])?$li['u_id']:'',
			'title'=>isset($post['title'])?$post['title']:'',
			'message'=>isset($post['message'])?$post['message']:'',
			'read'=>0,
			'status'=>1,
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>$admindetails['u_id'],
			);
		$save=$this->Users_model->add_notification($add);
			
		}
		if(count($save)>0){
			$this->session->set_flashdata('success','Notification successfully sent');
			redirect('dashboard/notifications');
		}else{
			$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
			redirect('dashboard/notifications');
		}
		//echo '<pre>';print_r($user_list);exit;
		
	}
	
	
	
	
}
