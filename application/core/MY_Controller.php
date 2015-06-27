<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$user_id = $this->session->userdata('user_id');		
		if(empty($user_id)) {
			redirect('login');die;
		}
		global $data;		
		$data['alert_shown']	= "none";
		$data['user_id'] 		= $this->session->userdata('user_id');
		$data['user_name'] 		= $this->session->userdata('user_name');
		$data['cmp_name'] 		= $this->session->userdata('cmpy_name');
	}
}