<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public  function login_details($data){
		$this->db->select('*')->from('users');		
		$this->db->where('email_id', $data['email']);
		$this->db->where('password',$data['password']);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();
	}
	public  function get_student_details($u_id){
		$this->db->select('u_id,email_id,role')->from('users');
		$this->db->where('u_id',$u_id);
		return $this->db->get()->row_array();
	}
	public  function check_email_exist($email){
		$this->db->select('*')->from('users');		
		$this->db->where('email_id', $email);
        return $this->db->get()->row_array();
	}
	public function update_profile_details($u_id,$data){
		$this->db->where('u_id', $u_id);
		return $this->db->update('users',$data);
	}
	
	public  function save_user($data){
		$this->db->insert('users',$data);
		return $this->db->insert_id();
	}
	
	public  function get_user_details($u_id){
		$this->db->select('u_id,email_id,role')->from('users');
		$this->db->where('u_id',$u_id);
		return $this->db->get()->row_array();
	}
	public  function get_all_user_details($u_id){
		$this->db->select('u_id,role,email_id,mobile,name,gender,dob,country,state,profile_pic,created_at,address')->from('users');
		$this->db->where('u_id',$u_id);
		return $this->db->get()->row_array();
	}
	public function check_email_exits($email){
		$this->db->select('*')->from('users');		
		$this->db->where('email_id', $email);
        return $this->db->get()->row_array();	
	}
	
	public  function update_payment_details($u_id,$data){
		$this->db->where('u_id',$u_id);
		return $this->db->update('users',$data);
	}
	public function get_adminpassword_details($u_id){
		$this->db->select('users.password')->from('users');		
		$this->db->where('u_id', $u_id);
		$this->db->where('status', 1);
        return $this->db->get()->row_array();	
	}
	
	public  function get_all_users_list(){
		$this->db->select('email_id,mobile,name,gender,created_at,u_id')->from('users');		
		$this->db->where('role', 2);
        return $this->db->get()->result_array();
	}
	
	public  function delete_user($u_id){
		$this->db->where('u_id', $u_id);
		return $this->db->delete('users');
	}
	
	public  function get_active_exam_list(){
		$this->db->select('title,total_questions,e_id,right_answers,wrong_minus_answer,time_limit,desc,created_by,status')->from('exam_list');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	
	public  function get_provious_exam_list($u_id){
		$this->db->select('exam_id')->from('user_exams');
		$this->db->where('user_id',$u_id);
		$this->db->group_by('exam_id');
		return $this->db->get()->result_array();
	}
	
	/* register time*/
	public  function get_login_time_still($u_id){
		$this->db->select('created_at,u_id')->from('users');
		$this->db->where('u_id',$u_id);
		return $this->db->get()->row_array();
	}	
	public  function get_user_total_score($u_id){
		$sql = "SELECT COUNT(*) AS COUNT FROM user_exams WHERE user_id = '".$u_id."' AND user_exams.answer=user_exams.correct_answer";
		return $this->db->query($sql)->row_array(); 
	}
	public  function get_user_today_score($u_id,$date){
		$sql = "SELECT COUNT(*) AS COUNT FROM user_exams WHERE user_id = '".$u_id."' AND date = '".$date."' AND user_exams.answer=user_exams.correct_answer";
		return $this->db->query($sql)->row_array(); 
	}
	
	public  function get_all_users_lists(){
		$this->db->select('created_at,u_id')->from('users');
		return $this->db->get()->result_array();
	}
	
	public  function add_notification($data){
		$this->db->insert('notifications',$data);
		return $this->db->insert_id();
	}
	
	public  function get_all_notification_list(){
		$this->db->select('notifications.n_id,notifications.title,notifications.message,notifications.created_at,users.profile_pic')->from('notifications');
		$this->db->join('users', 'users.u_id = notifications.user_id', 'left');
		$this->db->group_by('notifications.message');
		$this->db->order_by('notifications.n_id','desc');
		return $this->db->get()->result_array();
	}
	public  function get_user_notification_list($u_id){
		$this->db->select('notifications.n_id,notifications.title,notifications.message,notifications.created_at,users.profile_pic')->from('notifications');
		$this->db->join('users', 'users.u_id = notifications.user_id', 'left');
		$this->db->where('notifications.user_id',$u_id);
		$this->db->group_by('notifications.message');
		$this->db->order_by('notifications.n_id','desc');
		return $this->db->get()->result_array();
	}
	public  function get_user_notification_list_limit($u_id){
		$this->db->select('notifications.n_id,notifications.title,notifications.message,notifications.created_at,users.profile_pic')->from('notifications');
		$this->db->join('users', 'users.u_id = notifications.user_id', 'left');
		$this->db->where('notifications.user_id',$u_id);
		$this->db->limit(5);
		//$this->db->group_by('notifications.message');
		$this->db->order_by('notifications.created_at','desc');
		return $this->db->get()->result_array();
	}
	public  function get_unread_count_user_notification_list($u_id){
		$this->db->select('COUNT(*) as count')->from('notifications');
		$this->db->where('notifications.user_id',$u_id);
		$this->db->where('notifications.read',0);
		return $this->db->get()->row_array();
	}
	
	public  function update_notification_read_count($n_id,$data){
		$this->db->where('n_id',$n_id);	
		return $this->db->update('notifications',$data);
	}
	
	public  function delete_notifications($id){
		$this->db->where('notifications.n_id',$id);
		return $this->db->delete('notifications');
	}
	
	public  function get_notifications_list($u_id){
		$this->db->select('*')->from('notifications');
		$this->db->where('notifications.n_id',$u_id);
		return $this->db->get()->row_array();
	}
	
	public function get_notifications_list_details($message){
		$this->db->select('*')->from('notifications');						
		$this->db->where('notifications.title',$message);
		return $this->db->get()->result_array();
	}
	
	/* payment purpose*/
	public  function add_subscribe_payment($data){
		$this->db->insert('subscribers_list',$data);
		return $this->db->insert_id();
	}
	
	public  function payment_details_updated($p_id,$data){
		$this->db->where('payment_id',$p_id);	
		return $this->db->update('subscribers_list',$data);
	}
	public  function get_subscribe_list(){
		$this->db->select('*')->from('subscribers_list');						
		$this->db->where('subscribers_list.status','Pending');
		return $this->db->get()->result_array();
	}
	/* payment purpose*/
	

}