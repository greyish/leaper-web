<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();		
		global $data;
	}
	public function index() {		
		$user_id = $this->session->userdata('user_id');
		if(!empty($user_id)) {
			redirect('');die;
		}
		global $data;
		$data['meta_desc'] 	= "Login Page";
		$data['title'] 		= "Login Page";
		$data['layout']		= "signin/signin";
		if(isset($_POST['btn_submit'])) {
			$this->form_validation->set_rules("txt_email","Email Address","required|xss_clean|trim|valid_email");
			$this->form_validation->set_rules("txt_pass","Password","required|xss_clean|trim");
			if($this->form_validation->run()===false) {
				$data['alert_shown'] = "block";
				$this->load->view($data['layout'],$data);
			} else {
				$api_data = array('email'=>$this->input->post('txt_email'),'password'=>md5($this->input->post('txt_pass')));
				$res = $this->leaper_api->callAPI('users/login',$api_data);
				if($res!=0){
					if($res['res_id']==1) {
						$this->session->set_userdata('user_id',$res['user']['id']);
						$this->session->set_userdata('user_name',$res['user']['name']);
						$this->session->set_userdata('cmpy_name',$res['user']['company_name']);
						redirect('');die;
					}
				}
				$data['error'] = ($res==0)?"Oops!! Some thing went wrong":$res['res_msg'];
				$data['alert_shown'] = "block";
				$this->load->view($data['layout'],$data);
			}
		} else {
			$this->load->view($data['layout'],$data);
		}
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect('');die;
	}
}