<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
	}
	public function index() {
		global $data;
		$data['meta_title'] = "Login Page";
		$data['meta_desc'] 	= "Login Page";
		$data['title'] 		= "Login Page";
		$data['layout']		= "signin/signin";
		$this->load->view('container',$data);

	}
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */