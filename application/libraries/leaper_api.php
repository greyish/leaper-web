<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leaper_api {
	public function __construct() {
		$this->endpoint = "http://leaper-core.herokuapp.com/";
		//$this->token 	= "e529c32c01bdf05952ddb185f69170d8";
	}
	public function callAPI($url,$params='') {
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$this->endpoint.$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,'1');
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,'0');
		if($params!="") {
			curl_setopt($ch,CURLOPT_POST,'1');
			curl_setopt($ch,CURLOPT_POSTFIELDS,$params);
		}
		$res 	= curl_exec($ch);
		$error 	= curl_error($ch);
		curl_close($ch);
		if(empty($error)) {
			$res = json_decode($res,true);
			if(count($res)>0) {
				return $res;
			}
		}
		return 0;
	}
}
/* End of file common_lib.php */
/* Location: ./application/libraries/common_lib.php */