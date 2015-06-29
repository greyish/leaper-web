<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_settings extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		global $data;
		$data['meta_desc'] 	= "Team Settings";
		$data['title'] 		= "Team Settings";
		$data['layout']		= "team_settings";
		$data['page_type']	= "team_settings";
		$data['success']	= $this->session->flashdata('success');
		$data['result']		= $this->leaper_api->callAPI('leave_types?user_id='.$data['user_id']);
		if(isset($_POST['btn_submit'])) {
			$this->form_validation->set_rules("sel_type","Select Type","required|xss_clean|trim");
			$this->form_validation->set_rules("txt_quota","Leave Quota","required|xss_clean|trim");
			if($this->form_validation->run()===false) {
				$data['alert_shown'] = "block";
				$this->load->view("container",$data);
			} else {
				$api_data = array();
				$api_data['user_id'] 	= $data['user_id'];
				$api_data['name'] 		= $this->input->post('sel_type');
				$api_data['quota'] 		= $this->input->post('txt_quota');
				$res = $this->leaper_api->callAPI('leave_types',$api_data);
				if($res!=0){
					if($res['res_id']==1) {
						$this->session->set_flashdata('success','Leave Type Added Successfully');
						redirect('leave_types');die;
					}
				}
				$data['error'] = ($res==0)?"Oops!! Some thing went wrong":$res['res_msg'];
				$data['alert_shown'] = "block";
				$this->load->view("container",$data);
			}
		} else {
			$this->load->view("container",$data);
		}
	}
}
