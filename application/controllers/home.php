<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
				global $data;
		$data['meta_title'] = "Login Page";
		$data['meta_desc'] 	= "Login Page";
		$data['title'] 		= "Login Page";
		$data['layout']		= "common/dashboard";
		$this->load->view("container",$data);
	}
}
/* End of file home.php */
/* Location: ./application/controllers/home.php */
