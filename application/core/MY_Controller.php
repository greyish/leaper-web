<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		if(empty($user_id)) {
			redirect('login');die;
		}
		/*global $data;
		$data['user_name'] 	= $this->session->userdata('user_name');
		$data['user_email'] = $this->session->userdata('user_email');*/
	}
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */