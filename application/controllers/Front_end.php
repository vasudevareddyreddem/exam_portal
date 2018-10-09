<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_end extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->library('zend');
		$this->load->model('Users_model');
		$this->load->library('user_agent');
	
			if($this->session->userdata('student_details'))
			{
				$student_details=$this->session->userdata('student_details');
				$data['details']=$this->Users_model->get_all_user_details($student_details['u_id']);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('html/header',$data);
			}
		}
	
}
