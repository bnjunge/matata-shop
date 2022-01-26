<?php
require __DIR__ . '/config.php';

class API {
	public $access_token;
	public $consumerKey;
	public $consumerSecret;
	public $headers;

	
	function __construct(){
		$this->consumerKey = CONSUMER_KEY;
		$this->consumerSecret = CONSUMER_SECRET;
		$this->headers = ['Content-Type:application/json; charset=utf8'];
		$this->access_token = $this->get_access_token();
		$this->requestHeader = array('Content-Type:application/json','Authorization:Bearer '.$this->access_token);
	}


	private function get_access_token(){		
		$curl = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
		curl_setopt_array($curl,
			array(
				CURLOPT_HTTPHEADER => $this->headers, 
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HEADER => false,
				CURLOPT_USERPWD => $this->consumerKey.':'.$this->consumerSecret
			)
		);
		$result = json_decode(curl_exec($curl));
		curl_close($curl);
		return $result->access_token;
	}
	
	public function lipa_na_mpesa_online($endPointURL, $curl_post_data){
		return $this->transaction_request_body($endPointURL, $curl_post_data);		
	}

	public function transaction_request_body($endPointURL, $curl_post_data){
		$curl = curl_init();		
		curl_setopt_array($curl, 
			array(
				CURLOPT_URL => $endPointURL,
				CURLOPT_HTTPHEADER => $this->requestHeader,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $curl_post_data
			)
		);
		$curl_response = curl_exec($curl);
		return $curl_response;
	}
	
}