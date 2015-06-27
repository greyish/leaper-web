<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		global $data;
		$data['meta_title'] = "Login Page";
		$data['meta_desc'] 	= "Login Page";
		$data['title'] 		= "Login Page";
		$data['layout']		= "signin/signin";
		if(isset($_POST['btn_submit'])) {
			$this->form_validation->set_rules("txt_email","Email","required|xss_clean|trim");
			$this->form_validation->set_rules("txt_pass","Password","required|xss_clean|trim");
			if($this->form_validation->run()===false) {
				$this->load->view('container',$data);
			} else {
				$data = array('email'=>$this->input->post('txt_email'),'password'=>$this->input->post('txt_pass'));
				$res = $this->leaper_api->callAPI('users/login',$data);
				echo '<pre>';
				print_r($res);die;
			}
		}
		$this->load->view($data['layout'],$data);
	}
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */