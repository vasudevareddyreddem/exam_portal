<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Exam extends Front_end {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->model('exam_model');
		$this->load->helper('cookie');
		
	}
	public function index()
	{
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$this->load->view('html/add-exam');
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
	public  function lists(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$data['exam_list']=$this->exam_model->get_all_exam_list();
				$this->load->view('html/examlist',$data);
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
	public  function add(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$post=$this->input->post();
				$add=array(
				'title'=>isset($post['title'])?$post['title']:'',
				'total_questions'=>isset($post['total_questions'])?$post['total_questions']:'',
				'right_answers'=>isset($post['right_answers'])?$post['right_answers']:'',
				'wrong_minus_answer'=>isset($post['wrong_minus_answer'])?$post['wrong_minus_answer']:'',
				'time_limit'=>isset($post['time_limit'])?$post['time_limit']:'',
				'desc'=>isset($post['desc'])?$post['desc']:'',
				'created_at'=>date('Y-m-d H:i:s'),
				'updated_at'=>date('Y-m-d H:i:s'),
				'created_by'=>$admindetails['u_id'],
				);
				$addexam=$this->exam_model->add_exam($add);
				if(count($addexam)>0){
					$this->session->set_flashdata('success','Exam successfully added');
					redirect('exam/addquestion/'.base64_encode($addexam));
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('exam');
				}
				//echo '<pre>';print_r($post);exit;
				
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	public  function addquestion(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$exam_id=base64_decode($this->uri->segment(3));
				
				if($exam_id!=''){
					$data['exam_id']=$exam_id;
					$data['exam_details']=$this->exam_model->get_exam_details($exam_id);
					$this->load->view('html/questions',$data);
					$this->load->view('html/footer');
					//echo '<pre>';print_r($data);exit;
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('exam');
				}
				
				
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
		
	}
	public  function edit(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$exam_id=base64_decode($this->uri->segment(3));
				
				if($exam_id!=''){
					$data['exam_id']=$exam_id;
					$data['exam_details']=$this->exam_model->get_exam_all_details($exam_id);
					//$data['question_details']=$this->exam_model->get_exam_questiondetails($exam_id);
					$this->load->view('html/edit_exam',$data);
					$this->load->view('html/footer');
					//echo '<pre>';print_r($data);exit;
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('exam');
				}
				
				
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
		
	}
	public  function editquestion(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$exam_id=base64_decode($this->uri->segment(3));
				
				if($exam_id!=''){
					$data['exam_id']=$exam_id;
					$data['exam_details']=$this->exam_model->get_exam_all_details($exam_id);
					$data['question_details']=$this->exam_model->get_exam_questiondetails($exam_id);
					$this->load->view('html/edit_questions',$data);
					$this->load->view('html/footer');
					//echo '<pre>';print_r($data);exit;
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('exam');
				}
				
				
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
		
	}
	public  function addpost(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$post=$this->input->post();
				
				$cnt=0;foreach($post['question'] as $list){
					//echo 
					$add_questions=array(
					'question_id'=>$cnt+1,
					'examm_id'=>$post['exam_id'],
					'question'=>$list,
					'option_1'=>$post['option1'][$cnt],
					'option_2'=>$post['option2'][$cnt],
					'option_3'=>$post['option3'][$cnt],
					'option_4'=>$post['option4'][$cnt],
					'correct_answer'=>$post['correct_answer'][$cnt],
					'created_at'=>date('Y-m-d H:i:s'),
					'updated_at'=>date('Y-m-d H:i:s'),
					'created_by'=>$admindetails['u_id'],
					);
					
					$add_questionto_exam=$this->exam_model->add_exam_questions($add_questions);
				$cnt++;
				}
				if(count($add_questionto_exam)>0){
					$this->session->set_flashdata('success','Exam questions successfully added');
					redirect('exam/lists/');
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('exam/addquestion/'.base64_encode($post['exam_id']));
				}
					//echo '<pre>';print_r($post);exit;
				
				
				
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
		
	}
	public  function editpost(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				
					$update=array(
						'title'=>isset($post['title'])?$post['title']:'',
						'total_questions'=>isset($post['total_questions'])?$post['total_questions']:'',
						'right_answers'=>isset($post['right_answers'])?$post['right_answers']:'',
						'wrong_minus_answer'=>isset($post['wrong_minus_answer'])?$post['wrong_minus_answer']:'',
						'time_limit'=>isset($post['time_limit'])?$post['time_limit']:'',
						'desc'=>isset($post['desc'])?$post['desc']:'',
						);
					
					$update_exam=$this->exam_model->update_exam_details($post['exam_id'],$update);
				
				if(count($update_exam)>0){
					$this->session->set_flashdata('success','Exam details successfully updated');
					redirect('exam/editquestion/'.base64_encode($post['exam_id']));
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('exam/edit/'.base64_encode($post['exam_id']));
				}
					//echo '<pre>';print_r($post);exit;
				
				
				
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
		
	}
	public  function editquestionpost(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$post=$this->input->post();
				//echo '<pre>';print_r($post);
				$cnt=0;foreach($post['exam_question_id'] as $list){
					
					if($list==''){
							$add_questions=array(
							'question_id'=>$cnt+1,
							'examm_id'=>$post['exam_id'],
							'question'=>$post['question'][$cnt],
							'option_1'=>$post['option1'][$cnt],
							'option_2'=>$post['option2'][$cnt],
							'option_3'=>$post['option3'][$cnt],
							'option_4'=>$post['option4'][$cnt],
							'correct_answer'=>$post['correct_answer'][$cnt],
							'created_at'=>date('Y-m-d H:i:s'),
							'updated_at'=>date('Y-m-d H:i:s'),
							'created_by'=>$admindetails['u_id'],
							);
						//echo '<pre>';print_r($add_questions);
					$update_questionto_exam=$this->exam_model->add_exam_questions($add_questions);
						
					}else{
						$update_questions=array(
							'question'=>$post['question'][$cnt],
							'option_1'=>$post['option1'][$cnt],
							'option_2'=>$post['option2'][$cnt],
							'option_3'=>$post['option3'][$cnt],
							'option_4'=>$post['option4'][$cnt],
							'correct_answer'=>$post['correct_answer'][$cnt],
							'updated_at'=>date('Y-m-d H:i:s'),
							);
							//echo '<pre>';print_r($update_questions);
						$update_questionto_exam=$this->exam_model->update_exam_questions_details($list,$update_questions);
					}
					$cnt++;
				}
				if(count($update_questionto_exam)>0){
					$this->session->set_flashdata('success','Exam questions successfully updated');
					redirect('exam/lists/');
				}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('exam/addquestion/'.base64_encode($post['exam_id']));
				}
					//echo '<pre>';print_r($post);exit;
				
				
				
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
		
	}
	public  function status(){
		
		if($this->session->userdata('student_details'))
		{
		$admindetails=$this->session->userdata('student_details');

			if($admindetails['role']==1){
					$e_id=base64_decode($this->uri->segment(3));
					$status=base64_decode($this->uri->segment(4));
					if($status==1){
						$statu=0;
					}else{
						$statu=1;
					}
					if($e_id!=''){
						$stusdetails=array(
							'status'=>$statu,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->exam_model->update_exam_details($e_id,$stusdetails);
							if(count($statusdata)>0){
								if($status==1){
								$this->session->set_flashdata('success',"Exam successfully deactivate.");
								}else{
									$this->session->set_flashdata('success',"Exam successfully activate.");
								}
								redirect('exam/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('exam/lists');
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('home');
		}
		
	}
	public  function delete(){
		
		if($this->session->userdata('student_details'))
		{
		$admindetails=$this->session->userdata('student_details');

			if($admindetails['role']==1){
					$e_id=base64_decode($this->uri->segment(3));
					
					if($e_id!=''){
						$stusdetails=array(
							'status'=>2,
							'updated_at'=>date('Y-m-d H:i:s')
							);
							$statusdata=$this->exam_model->update_exam_details($e_id,$stusdetails);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Exam successfully deleted.");
								redirect('exam/lists');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('exam/lists');
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('home');
		}
		
	}
	
	public  function remove_exam_question(){
		$post=$this->input->post();
		$removedattch=$this->exam_model->remove_question($post['q_id']);
				if(count($removedattch) > 0)
				{
				$exam_q_count=$this->exam_model->exam_question_count($post['exam_id']);
				$up_data=array('total_questions'=>$exam_q_count['cnt']);
				$this->exam_model->update_exam_details($post['exam_id'],$up_data);
				$data['msg']=1;
				echo json_encode($data);exit;	
				}
		//echo '<pre>';print_r($post);exit;
		
	}
	
	public  function choose_question(){
		$admindetails=$this->session->userdata('student_details');
		$exam_id=base64_decode($this->uri->segment(3));
		$question_type=$this->uri->segment(4);

		if($question_type=='restart'){
			$timer_details=$this->exam_model->get_exam_time_duration($exam_id);
			$add=array(
			'user_id'=>$admindetails['u_id'],
			'exam_id'=>$exam_id,
			'start_time'=>$timer_details['time_limit'],
			);
			$this->exam_model->start_exam_time($add);
			
		}
		if($question_type==''){
			$timer_details=$this->exam_model->get_exam_time_duration($exam_id);
			$add=array(
			'user_id'=>$admindetails['u_id'],
			'exam_id'=>$exam_id,
			'start_time'=>$timer_details['time_limit'],
			);
			$this->exam_model->start_exam_time($add);						
		}

		if(isset($question_type) && $question_type!='restart'){
			$question_id=base64_decode($this->uri->segment(4));
			$data['question']=base64_decode($this->uri->segment(4));

			
		}else{
			$question_id='';
			$data['question']='';	
							
		}
		$attemtet_id=base64_decode($this->uri->segment(5));
		$data['question_details']=$this->exam_model->get_question_details($exam_id,$question_id);
		$data['exam_details']=$this->exam_model->get_exam_time_details($exam_id);
		$user_register_time=$this->Users_model->get_login_time_still($admindetails['u_id']);
				$data['total_score']=$this->Users_model->get_user_total_score($admindetails['u_id']);
				$data['today_score']=$this->Users_model->get_user_today_score($admindetails['u_id'],date('Y-m-d'));
				$dat=date('Y-m-d');
				$date1 = new DateTime($dat);
				$date2 = new DateTime('2018-10-05');
				$diff = $date1->diff($date2);
				// will output 2 days
				$data['total_days']=$diff->days . ' days ';
		$data['timer_details']=$this->exam_model->get_details_details($exam_id,$admindetails['u_id']);
		//echo $this->db->last_query();
		$this->load->view('html/choose-option',$data);
		$this->load->view('html/footer');
		//echo '<pre>';print_r($data);exit;
		
	}
	
	public  function question_submit(){
		
		if($this->session->userdata('student_details'))
		{
			$student_details=$this->session->userdata('student_details');

			$post=$this->input->post();
			
			
			$limit=$this->exam_model->check_daily_limit(date('Y-m-d'),$student_details['u_id']);
			if(isset($limit) && count($limit)>=100){
					$this->session->set_flashdata('error',"Your daily limit is exceeded. Please try again by tomorrow.");
					redirect('exam/dashboard');
			
			}
			if(isset($post['question']) && $post['question']==''){
				
				$check_exam_exist=$this->exam_model->previous_exam_list($post['exam_id'],$student_details['u_id']);
				if(isset($check_exam_exist) && count($check_exam_exist)>0){
						foreach($check_exam_exist as $list){
							$delete=$this->exam_model->delete_previous($list['u_e_id']);
						}
				}
			}
			//echo '<pre>';print_r($post);exit;
			$question_details=$this->exam_model->get_question_details($post['exam_id'],$post['q_id']);
			$add=array(
			'user_id'=>$student_details['u_id'],
			'exam_id'=>isset($post['exam_id'])?$post['exam_id']:'',
			'q_id'=>isset($post['q_id'])?$post['q_id']:'',
			'question_id'=>isset($post['question_id'])?$post['question_id']:'',
			'answer'=>isset($post['radio'])?$post['radio']:'',
			'correct_answer'=>isset($question_details['correct_answer'])?$question_details['correct_answer']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>$student_details['u_id'],
			'date'=>date('Y-m-d'),
			);
			$next_queation_id=$this->exam_model->get_next_exam_question_id($post['exam_id'],$post['question_id']);
			
			//echo '<pre>';print_r($next_queation_id);exit;
			$exam_submit=$this->exam_model->save_question_answer($add);
			if(count($exam_submit)>0){
				$total_question=$this->exam_model->get_exam_question_count($post['exam_id']);
				$next_queation_id=$this->exam_model->get_next_exam_question_id($post['exam_id'],$post['question_id']);
				$this->session->set_flashdata('success',"Answer successfully submited.");
				if(isset($next_queation_id['question_id']) && $next_queation_id['question_id']<=$total_question['total_questions']){  
					redirect('exam/choose_question/'.base64_encode($post['exam_id']).'/'.base64_encode($next_queation_id['question_id']).'/'.base64_encode($exam_submit));
				}else{
					$this->session->set_flashdata('success','Your Exam successfully completed');
					$this->exam_model->delete_timer($post['exam_id'],$student_details['u_id']);
					
					redirect('exam/completed_list');
				}
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect('exam/choose_question/'.base64_encode($post['exam_id']).'/'.base64_encode($post['q_id']));
			}
			//echo '<pre>';print_r($add);exit;
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	
	public function score(){
			if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
					$data['exam_list']=$this->exam_model->get_all_user_completed_list();
					$this->load->view('html/admin_exam_score',$data);
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
	
	public  function completed_list(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==2){
				
				
				$user_register_time=$this->Users_model->get_login_time_still($admindetails['u_id']);
				$data['total_score']=$this->Users_model->get_user_total_score($admindetails['u_id']);
				$data['today_score']=$this->Users_model->get_user_today_score($admindetails['u_id'],date('Y-m-d'));
				$dat=date('Y-m-d');
				$date1 = new DateTime($dat);
				$date2 = new DateTime('2018-10-05');
				$diff = $date1->diff($date2);
				// will output 2 days
				$data['total_days']=$diff->days . ' days ';
				$data['exam_list']=$this->exam_model->get_user_completed_list($admindetails['u_id']);
				$this->load->view('html/exam-score',$data);
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
	public  function rank(){
		if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==2){
				$user_register_time=$this->Users_model->get_login_time_still($admindetails['u_id']);
				$data['total_score']=$this->Users_model->get_user_total_score($admindetails['u_id']);
				$data['today_score']=$this->Users_model->get_user_today_score($admindetails['u_id'],date('Y-m-d'));
				$dat=date('Y-m-d');
				$date1 = new DateTime($dat);
				$date2 = new DateTime('2018-10-05');
				$diff = $date1->diff($date2);
				// will output 2 days
				$data['total_days']=$diff->days . ' days ';
				$exam_list=$this->exam_model->get_user_exam_ranks_list($admindetails['u_id']);
				if(count($exam_list)>0){
					foreach($exam_list as $List){
						foreach($List as $li){
							$all_list[]=$li;
						}
					}
				}else{
					$all_list=array();	
				}
				$data['exam_list']=$all_list;
				$this->load->view('html/rank-list',$data);
				$this->load->view('html/footer');
				//echo '<pre>';print_r($all_list);exit;
			}else{
				$this->session->set_flashdata('error','You dont have permissions');
				redirect('dashboard');
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	
	public  function completed_question_submit(){
		
		if($this->session->userdata('student_details'))
		{
			$student_details=$this->session->userdata('student_details');

			$post=$this->input->post();
			
			
			$limit=$this->exam_model->check_daily_limit(date('Y-m-d'),$student_details['u_id']);
			if(isset($limit) && count($limit)>=100){
					$this->session->set_flashdata('error',"Your daily limit is exceeded. Please try again by tomorrow.");
					$data['msg']=0;
					echo json_encode($data);exit;
			
			}
			$check_exam_exist=$this->exam_model->previous_exam_list($post['exam_id'],$student_details['u_id']);
			if(isset($check_exam_exist) && count($check_exam_exist)>0){
					foreach($check_exam_exist as $list){
						$delete=$this->exam_model->delete_previous($list['u_e_id']);
					}
			}
			//echo '<pre>';print_r($check_exam_exist);exit;
			$question_details=$this->exam_model->get_question_details($post['exam_id'],$post['q_id']);
			$add=array(
			'user_id'=>$student_details['u_id'],
			'exam_id'=>isset($post['exam_id'])?$post['exam_id']:'',
			'q_id'=>isset($post['q_id'])?$post['q_id']:'',
			'question_id'=>isset($post['question_id'])?$post['question_id']:'',
			'answer'=>isset($post['radio'])?$post['radio']:'',
			'correct_answer'=>isset($question_details['correct_answer'])?$question_details['correct_answer']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>$student_details['u_id'],
			'date'=>date('Y-m-d'),
			);
			$next_queation_id=$this->exam_model->get_next_exam_question_id($post['exam_id'],$post['question_id']);
			
			//echo '<pre>';print_r($next_queation_id);exit;
			$exam_submit=$this->exam_model->save_question_answer($add);
			if(count($exam_submit)>0){
				$total_question=$this->exam_model->get_exam_question_count($post['exam_id']);
				$next_queation_id=$this->exam_model->get_next_exam_question_id($post['exam_id'],$post['question_id']);
				$this->session->set_flashdata('success',"Answer successfully submited.");
				$data['msg']=1;
				echo json_encode($data);exit;
			}else{
				$data['msg']=0;
				echo json_encode($data);exit;
				}
			//echo '<pre>';print_r($add);exit;
		}else{
			$data['msg']=2;
			echo json_encode($data);exit;
		}
	}
	
	public  function feedbackpost(){
		
		if($this->session->userdata('student_details'))
		{
			$student_details=$this->session->userdata('student_details');

			$post=$this->input->post();
			
			//echo '<pre>';print_r($post);exit;
			$add=array(
			'user_id'=>$student_details['u_id'],
			'message'=>isset($post['feedback'])?$post['feedback']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>$student_details['u_id'],
			'date'=>date('Y-m-d'),
			);
			$feedback=$this->exam_model->save_feedback($add);
			if(count($feedback)>0){
				$this->session->set_flashdata('success','Your feedback successfully sent');
				redirect($this->agent->referrer());
			}else{
					$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
					redirect($this->agent->referrer());	
				}
			//echo '<pre>';print_r($add);exit;
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	public  function feedback(){
	if($this->session->userdata('student_details'))
		{
			$admindetails=$this->session->userdata('student_details');
			if($admindetails['role']==1){
				$data['feed_back_list']=$this->exam_model->get_user_feed_back_list();
				$this->load->view('html/user-feedback',$data);
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
	public  function delete_feedback(){
		
		if($this->session->userdata('student_details'))
		{
		$admindetails=$this->session->userdata('student_details');

			if($admindetails['role']==1){
					$f_id=base64_decode($this->uri->segment(3));
					
					if($f_id!=''){
							$statusdata=$this->exam_model->deletefeedback_details($f_id);
							if(count($statusdata)>0){
								$this->session->set_flashdata('success',"Feedback successfully deleted.");
								redirect('exam/feedback');
							}else{
									$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
									redirect('exam/feedback');
							}
					}else{
						$this->session->set_flashdata('error',"technical problem will occurred. Please try again.");
						redirect('dashboard');
					}
					
			}else{
					$this->session->set_flashdata('error',"You have no permission to access");
					redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('home');
		}
		
	}
	
	public  function updatetime_time(){
			$admindetails=$this->session->userdata('student_details');
			$post=$this->input->post();
			$timer_details=$this->exam_model->get_exam_time_details($post['exam_id']);
			$update=array(
			'user_id'=>$admindetails['u_id'],
			'exam_id'=>$post['exam_id'],
			'start_time'=>$post['time'],
			);
			$this->exam_model->start_update_time($timer_details['id'],$admindetails['u_id'],$update);
			
			exit;
	}
	public function logout(){
		$userinfo = $this->session->userdata('student_details');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('student_details');
		$this->session->unset_userdata('student_details');
        redirect('');
	}
	
	
	
	
	
}
