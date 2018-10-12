<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('instamojo');
		$this->load->helper('url');
	}


	public function index()
	{
		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
			curl_setopt($ch, CURLOPT_HEADER, FALSE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:b33ab3768faa22612897d519f192c7bb",
                  "X-Auth-Token:99c975753dba49ae99c0cf9f835f6d32"));
			$payload = Array(
				'purpose' => 'FIFA 16',
				'amount' => '10',
				'phone' => '8500050944',
				'buyer_name' => 'John Doe',
				'redirect_url' => base_url('example/pay'),
				'send_email' => true,
				'webhook' =>  'http://iammillionaire.in/user/pay/amount',
				'send_sms' => true,
				'email' => 'foo@example.com',
				'allow_repeated_payments' => false
			);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
			$response = curl_exec($ch);
			curl_close($ch); 

			echo $response;
		echo '<pre>';print_r($response);exit;
	}

	public function get_all()
	{
		$result = $this->instamojo->all_payment_request();

		print_r($result);
	}


	public function pay_request()
	{
		
		$pay = $this->instamojo->pay_request( 

						$amount = "200" , 
						$purpose = "TEST" , 
						$buyer_name = "rbbqq" , 
						$email = "rajeevbbqq@gmail.com" , 
						$phone = "89xxxx2017" ,
		     			$send_email = 'TRUE' , 
		     			$send_sms = 'TRUE' , 
		     			$repeated = 'FALSE'

		     		);


		$payment_id = $pay['id'];  // <= Payment Id
							      // print_r($pay) ; <=  Prints all the data from the request

	}


	public function status()
	{
		$requestId  = '84c04c212ccb4a8ba8c87e35ec4a2511'  ; // $reqid generated using pay_request()
		$status     = $this->instamojo->status($requestId);

		print_r($status);
	}


	public function payment_status()
	{
		$requestId = '84c04c212ccb4a8ba8c87e35ec4a2511'  ;
		$status    = $this->instamojo->status($requestId);

		print_r($status) ;
	}


	public function show()
	{
		$data['request_id'] = '84c04c212ccb4a8ba8c87e35ec4a2511' ;
		$this->load->view('instamojo' ,$data);
	}

}

/* End of file example.php */
/* Location: ./application/controllers/example.php */