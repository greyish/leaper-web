<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Leaper_api {
	public function __construct() {
	}
	public function callAPI($url,$params) {
		$ch = curl_init();
		curl_setopt($ch,CURL_SETOPT_URL,$url);
		curl_setopt($ch,CURL_SETOPT_POSTFIELDS,$url);

	}
}
/* End of file common_lib.php */
/* Location: ./application/libraries/common_lib.php */