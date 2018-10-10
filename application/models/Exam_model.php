<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Exam_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function add_exam($data){
		$this->db->insert('exam_list',$data);
		return $this->db->insert_id();
	}
	public  function add_exam_questions($data){
		$this->db->insert('exam_questions',$data);
		return $this->db->insert_id();
	}
	public  function get_exam_details($exam_id){
		$this->db->select('title,total_questions,e_id,created_by')->from('exam_list');
		$this->db->where('e_id',$exam_id);
		return $this->db->get()->row_array();
	}
	public  function get_exam_all_details($exam_id){
		$this->db->select('*')->from('exam_list');
		$this->db->where('e_id',$exam_id);
		return $this->db->get()->row_array();
	}
	
	public  function get_all_exam_list(){
		$this->db->select('title,total_questions,e_id,right_answers,wrong_minus_answer,time_limit,desc,created_by,status')->from('exam_list');
		$this->db->where('status !=',2);
		return $this->db->get()->result_array();
	}
	public  function update_exam_details($exam_id,$data){
		$this->db->where('e_id',$exam_id);
		return $this->db->update('exam_list',$data);
	}
	public  function update_exam_questions_details($q_id,$data){
		$this->db->where('q_id',$q_id);
		return $this->db->update('exam_questions',$data);
	}
	public  function get_exam_questiondetails($exam_id){
		$this->db->select('*')->from('exam_questions');
		$this->db->where('examm_id',$exam_id);
		return $this->db->get()->result_array();
	}
	public  function remove_question($question_id){
		$this->db->where('q_id',$question_id);
		return $this->db->delete('exam_questions');
	}
	public  function exam_question_count($exam_id){
		$this->db->select('count(exam_questions.examm_id) as cnt')->from('exam_questions');
		$this->db->where('examm_id',$exam_id);
		return $this->db->get()->row_array();
		
	}
	
	public function get_question_details($exam_id,$question_id){
		$this->db->select('*')->from('exam_questions');
		$this->db->where('examm_id',$exam_id);
		if($question_id!=''){
			$this->db->where('question_id',$question_id);
		}else{
			$this->db->where('question_id',1);
		}
		
		return $this->db->get()->row_array();
	}
	public function get_all_question_details($exam_id,$question_id){
		$this->db->select('*')->from('exam_questions');
		$this->db->where('examm_id',$exam_id);
		$this->db->where('q_id',$question_id);
		return $this->db->get()->row_array();
	}
	
	public  function save_question_answer($data){
		$this->db->insert('user_exams',$data);
		return $this->db->insert_id();
	}
	
	public  function get_next_exam_question_id($exam_id,$question_id){
		$sql = "SELECT question_id FROM exam_questions WHERE question_id = (SELECT MIN(question_id) FROM exam_questions WHERE question_id > '".$question_id."')";
		return $this->db->query($sql)->row_array(); 
	}
	
	public  function get_exam_question_count($exam_id){
		$this->db->select('total_questions')->from('exam_list');
		$this->db->where('e_id',$exam_id);
		return $this->db->get()->row_array();
	}
	
	public  function get_user_completed_list($u_id){
		$this->db->select('user_exams.exam_id,user_exams.user_id,exam_list.title,exam_list.total_questions,exam_list.right_answers')->from('user_exams');
		$this->db->join('exam_list ', 'exam_list.e_id = user_exams.exam_id', 'left');
		$this->db->where('user_exams.user_id',$u_id);
		$this->db->group_by('user_exams.exam_id');
		//$this->db->order_by('exam_id','');
		$return=$this->db->get()->result_array();
		foreach($return as $lis){
			$total=$this->totalqueation_count($lis['exam_id'],$u_id);
			$lists=$this->get_exam_score_details($lis['exam_id'],$u_id);
			$wronglists=$this->get_exam_wrong_score_details($lis['exam_id'],$u_id);
			$data[$lis['exam_id']]=$lis;
			$data[$lis['exam_id']]['total']=isset($total['total'])?$total['total']:'';
			$data[$lis['exam_id']]['wrong_count']=isset($wronglists['COUNT'])?$wronglists['COUNT']:'';
			$data[$lis['exam_id']]['right_count']=isset($lists['COUNT'])?$lists['COUNT']:'';
			$data[$lis['exam_id']]['score']=isset($lists['COUNT'])?$lists['COUNT']:'';
			
		}
		if(!empty($data)){
			return $data;
		}
	}
	
	public  function totalqueation_count($exam_id,$u_id){
		$this->db->select('count(user_exams.u_e_id) as total')->from('user_exams');
		$this->db->where('exam_id',$exam_id);
		$this->db->where('user_id',$u_id);
		return $this->db->get()->row_array();
	}
	
	public  function get_exam_score_details($exam_id,$u_id){
		$sql = "SELECT u_e_id,COUNT(*) AS COUNT FROM user_exams WHERE exam_id = '".$exam_id."' AND user_id = '".$u_id."' AND user_exams.answer=user_exams.correct_answer";
		return $this->db->query($sql)->row_array(); 
	}
	public  function get_exam_wrong_score_details($exam_id,$u_id){
		$sql = "SELECT COUNT(*) AS COUNT FROM user_exams WHERE exam_id = '".$exam_id."' AND user_id = '".$u_id."' AND user_exams.answer!=user_exams.correct_answer";
		return $this->db->query($sql)->row_array(); 
	}
	/* rank purpose*/
	public  function get_user_exam_ranks_list($u_id){
		$this->db->select('*')->from('user_exams');
		$this->db->group_by('exam_id');
		$this->db->where('user_id',$u_id);
		$return=$this->db->get()->result_array();
		$exam_list='';
		$cnt=11;
		foreach($return as $list){
			$exam_list=$this->get_exam_list_wise_rank($list['exam_id']);
			$data[$cnt]=$exam_list;
			//$data[$list['exam_id']]['user_list']=$exam_list;
		$cnt++;}
		//echo '<pre>';print_r($data);exit;
		if(!empty($data)){
			return $data;
		}
	}
	public  function get_exam_list_wise_rank($exam_id){
		$sql = "SELECT user_exams.u_e_id,users.name,users.gender,users.email_id,users.mobile,user_exams.exam_id,user_exams.user_id,exam_list.title,exam_list.total_questions,exam_list.right_answers From user_exams user_exams LEFT JOIN exam_list on exam_list.e_id= user_exams.exam_id LEFT JOIN users on users.u_id= user_exams.user_id where exam_id = '".$exam_id."'  GROUP BY user_exams.exam_id,user_exams.user_id";
		$return=$this->db->query($sql)->result_array();
		foreach($return as $lis){
			$total=$this->totalqueation_count($lis['exam_id'],$lis['user_id']);
			$lists=$this->get_exam_score_details($lis['exam_id'],$lis['user_id']);
			$wronglists=$this->get_exam_wrong_score_details($lis['exam_id'],$lis['user_id']);
				$result[$lis['u_e_id']]=$lis;
				$result[$lis['u_e_id']]['total']=isset($total['total'])?$total['total']:'';
				$result[$lis['u_e_id']]['wrong_count']=isset($wronglists['COUNT'])?$wronglists['COUNT']:'';
				$result[$lis['u_e_id']]['right_count']=isset($lists['COUNT'])?$lists['COUNT']:'';
				$result[$lis['u_e_id']]['score']=isset($lists['COUNT'])?$lists['COUNT']:'';
			
		}
		if(isset($result) && count($result)>0){
			$price = array();
			foreach ($result as $key => $row)
			{
			$price[$key] = $row['score'];
			}
			array_multisort($price, SORT_DESC, $result);
		}
			if(!empty($result)){
				return $result;
			}
		//echo '<pre>';print_r($results);exit;
	}
	
	
	public  function previous_exam_list($exam_id,$u_id){
		$this->db->select('u_e_id,user_id,exam_id')->from('user_exams');
		$this->db->where('user_id',$u_id);
		$this->db->where('exam_id',$exam_id);
		return $this->db->get()->result_array();
	}
	public  function check_daily_limit($date,$u_id){
		$this->db->select('u_e_id,user_id,exam_id')->from('user_exams');
		$this->db->where('user_id',$u_id);
		$this->db->where('date',$date);
		return $this->db->get()->result_array();
	}
	
	public  function delete_previous($u_e_id){
		$this->db->where('u_e_id',$u_e_id);
		return $this->db->delete('user_exams');
	}
	
	public  function get_all_user_completed_list(){
	
		$sql = "SELECT users.name,users.gender,users.email_id,users.mobile,user_exams.exam_id,user_exams.u_e_id,user_exams.user_id,exam_list.title,exam_list.total_questions,exam_list.right_answers FROM user_exams LEFT JOIN exam_list on exam_list.e_id= user_exams.exam_id LEFT JOIN users on users.u_id= user_exams.user_id GROUP BY user_exams.exam_id,user_exams.user_id";
		$return=$this->db->query($sql)->result_array();
		$cnt=1;foreach($return as $lis){
			
				$lists=$this->get_all_exam_score_details($lis['exam_id'],$lis['user_id']);
				$wronglists=$this->get_all_exam_wrong_score_details($lis['exam_id'],$lis['user_id']);
				$total=$this->all_totalqueation_count($lis['exam_id'],$lis['user_id']);
				$data[$lis['u_e_id']]=$lis;
				$data[$lis['u_e_id']]['total']=isset($total['total'])?$total['total']:'';
				$data[$lis['u_e_id']]['wrong_count']=isset($wronglists['COUNT'])?$wronglists['COUNT']:'';
				$data[$lis['u_e_id']]['right_count']=isset($lists['COUNT'])?$lists['COUNT']:'';
				$data[$lis['u_e_id']]['score']=isset($lists['COUNT'])?$lists['COUNT']:'';
				//echo '<pre>';print_r($data);exit;
		$cnt++;}

		if(!empty($data)){
			return $data;
		}
	
	}
	
	public  function get_exam_list($exam_id){
		$this->db->select('u_e_id,user_id,exam_id')->from('user_exams');
		$this->db->where('exam_id',$exam_id);
		//$this->db->group_by('user_id');
		return $this->db->get()->result_array();
	}
	
		public  function get_all_exam_score_details($exam_id,$u_id){
		$sql = "SELECT COUNT(*) AS COUNT FROM user_exams WHERE exam_id = '".$exam_id."' AND user_id = '".$u_id."' AND user_exams.answer=user_exams.correct_answer";
		return $this->db->query($sql)->row_array(); 
	}
	public  function get_all_exam_wrong_score_details($exam_id,$u_id){
		$sql = "SELECT COUNT(*) AS COUNT FROM user_exams WHERE exam_id = '".$exam_id."' AND user_id = '".$u_id."' AND user_exams.answer!=user_exams.correct_answer";
		return $this->db->query($sql)->row_array(); 
	}
	public  function all_totalqueation_count($exam_id,$u_id){
		$this->db->select('count(user_exams.u_e_id) as total')->from('user_exams');
		$this->db->where('exam_id',$exam_id);
		$this->db->where('user_id',$u_id);
		return $this->db->get()->row_array();
	}
	
	public  function save_feedback($data){
		$this->db->insert('feedback',$data);
		return $this->db->insert_id();
	}
	
	/* feedback*/
	public  function get_user_feed_back_list(){
		$this->db->select('feedback.id,feedback.created_at,feedback.user_id,feedback.message,users.email_id,users.mobile,users.name,users.gender')->from('feedback');
		$this->db->join('users ', 'users.u_id = feedback.user_id', 'left');

		return $this->db->get()->result_array();
	}
	
	public  function deletefeedback_details($f_id){
		$this->db->where('id',$f_id);
		return $this->db->delete('feedback');
	}
	
	public  function get_exam_time_details($exam_id){
		$this->db->select('*')->from('exam_time_timerid');
		$this->db->where('exam_id',$exam_id);
		return $this->db->get()->row_array();
	}
	public  function get_exam_time_duration($exam_id){
		$this->db->select('time_limit')->from('exam_list');
		$this->db->where('e_id',$exam_id);
		return $this->db->get()->row_array();
	}
	
	/* timer*/
	public  function start_exam_time($data){
		$this->db->insert('exam_time_timerid',$data);
		return $this->db->insert_id();
	}
	public  function get_details_details($exam_id,$u_id){
		$this->db->select('start_time')->from('exam_time_timerid');
		$this->db->where('exam_id',$exam_id);
		$this->db->where('user_id',$u_id);
		return $this->db->get()->row_array();
	}
	
	public  function start_update_time($id,$u_id,$data){
	$this->db->where('id',$id);
	$this->db->where('user_id',$u_id);
	return $this->db->update('exam_time_timerid',$data);

	}
	public  function delete_timer($exam_id,$u_id){
		$this->db->where('user_id',$u_id);
		$this->db->where('exam_id',$exam_id);
		return $this->db->delete('exam_time_timerid');
	}
	/* timer*/
	
	

}