<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Front_end.php');

class Payment extends Front_end {



	public function index()
	{
		if($this->session->userdata('student_details'))
		{
			
			$student_details=$this->session->userdata('student_details');
			$details=$this->Users_model->get_all_user_details($student_details['u_id']);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
			curl_setopt($ch, CURLOPT_HEADER, FALSE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:b33ab3768faa22612897d519f192c7bb",
                  "X-Auth-Token:99c975753dba49ae99c0cf9f835f6d32"));
					$payload = Array(
					'purpose' => 'Subscribe',
					'amount' => '149',
					'phone' => isset($details['mobile'])?$details['mobile']:'',
					'buyer_name' => isset($details['name'])?$details['name']:'',
					'redirect_url' => base_url('payment/success'),
					'send_email' => true,
					'webhook' =>  'http://iammillionaire.in/',
					'send_sms' => true,
					'email' => isset($details['email_id'])?$details['email_id']:'',
					'allow_repeated_payments' => false
					);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
			$response = curl_exec($ch);
			curl_close($ch);
			$result = json_decode($response, true);			
			//echo '<pre>';print_r($result);exit;
			//echo $result['success'];exit;
			if(isset($result['success']) && $result['success']='success' || $result['success']=1){
				$add=array(
				'user_id'=>isset($student_details['u_id'])?$student_details['u_id']:'',
				'payment_id'=>isset($result['payment_request']['id'])?$result['payment_request']['id']:'',
				'phone'=>isset($result['payment_request']['phone'])?$result['payment_request']['phone']:'',
				'email'=>isset($result['payment_request']['email'])?$result['payment_request']['email']:'',
				'buyer_name'=>isset($result['payment_request']['buyer_name'])?$result['buyer_name']['longurl']:'',
				'amount'=>isset($result['payment_request']['amount'])?$result['payment_request']['amount']:'',
				'purpose'=>isset($result['payment_request']['purpose'])?$result['payment_request']['purpose']:'',
				'expires_at'=>isset($result['payment_request']['expires_at'])?$result['payment_request']['expires_at']:'',
				'status'=>isset($result['payment_request']['status'])?$result['payment_request']['status']:'',
				'send_sms'=>isset($result['payment_request']['send_sms'])?$result['payment_request']['send_sms']:'',
				'send_email'=>isset($result['payment_request']['send_email'])?$result['payment_request']['send_email']:'',
				'sms_status'=>isset($result['payment_request']['sms_status'])?$result['payment_request']['sms_status']:'',
				'email_status'=>isset($result['payment_request']['email_status'])?$result['payment_request']['email_status']:'',
				'longurl'=>isset($result['payment_request']['longurl'])?$result['payment_request']['longurl']:'',
				'redirect_url'=>isset($result['payment_request']['redirect_url'])?$result['payment_request']['redirect_url']:'',
				'webhook'=>isset($result['payment_request']['webhook'])?$result['payment_request']['webhook']:'',
				'customer_id'=>isset($result['payment_request']['customer_id'])?$result['payment_request']['customer_id']:'',
				'created_at'=>isset($result['payment_request']['created_at'])?$result['payment_request']['created_at']:'',
				'modified_at'=>isset($result['payment_request']['modified_at'])?$result['payment_request']['modified_at']:'',
				'our_created_at'=>date('Y-m-d H:i:s'),
				);
				$add_pay=$this->Users_model->add_subscribe_payment($add);
				if(count($add_pay)>0){
					redirect($result['payment_request']['longurl']);	
				}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
					redirect($this->agent->referrer());
				}
				
			}else{
				$this->session->set_flashdata('error','Technical problem will occurred. Please try again');
				redirect($this->agent->referrer());
			}
			
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('');
		}
	}
	
	public  function success(){
		$this->session->set_flashdata('success','congratulations you are successfully subscribed');
		redirect('dashboard');			
	}
	public  function cron(){
		
		$get_user_list=$this->Users_model->get_subscribe_list();
		if(isset($get_user_list) && count($get_user_list)>0){
			foreach($get_user_list as $list){
				$pay_id=$list['payment_id'];
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/'.$pay_id.'/');
				curl_setopt($ch, CURLOPT_HEADER, FALSE);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
				curl_setopt($ch, CURLOPT_HTTPHEADER,
						   array("X-Api-Key:b33ab3768faa22612897d519f192c7bb",
								  "X-Auth-Token:99c975753dba49ae99c0cf9f835f6d32"));
				$response = curl_exec($ch);
				curl_close($ch); 
				$result = json_decode($response, true);
				if(isset($result['success']) && $result['success']='success' || $result['success']=1){
					$update=array(
					'payment_completed_type'=>isset($result['payment_request']['payments'][0]['instrument_type'])?$result['payment_request']['payments'][0]['instrument_type']:'',
					'payment_completed_type'=>isset($result['payment_request']['payments'][0]['instrument_type'])?$result['payment_request']['payments'][0]['instrument_type']:'',
					'billing_instrument'=>isset($result['payment_request']['payments'][0]['billing_instrument'])?$result['payment_request']['payments'][0]['billing_instrument']:'',
					'success_payment_id'=>isset($result['payment_request']['payments'][0]['payment_id'])?$result['payment_request']['payments'][0]['payment_id']:'',
					'fees'=>isset($result['payment_request']['payments'][0]['fees'])?$result['payment_request']['payments'][0]['fees']:'',
					'unit_price'=>isset($result['payment_request']['payments'][0]['unit_price'])?$result['payment_request']['payments'][0]['unit_price']:'',
					'quantity'=>isset($result['payment_request']['payments'][0]['quantity'])?$result['payment_request']['payments'][0]['quantity']:'',
					'status'=>isset($result['payment_request']['status'])?$result['payment_request']['status']:'',
					'send_sms'=>isset($result['payment_request']['send_sms'])?$result['payment_request']['send_sms']:'',
					'send_email'=>isset($result['payment_request']['send_email'])?$result['payment_request']['send_email']:'',
					'sms_status'=>isset($result['payment_request']['sms_status'])?$result['payment_request']['sms_status']:'',
					'email_status'=>isset($result['payment_request']['email_status'])?$result['payment_request']['email_status']:'',
					'payment_completed_time'=>date('Y-m-d H:i:s'),
					);
					$pay_updated=$this->Users_model->payment_details_updated($pay_id,$update);
					
				}
			}
		
		}
			
		
	}

	
}

/* End of file example.php */
/* Location: ./application/controllers/example.php */