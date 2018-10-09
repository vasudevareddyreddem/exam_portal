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
	
	
	
	

}