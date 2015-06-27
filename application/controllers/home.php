<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		global $data;
		$data['meta_desc'] 	= "Dash Board";
		$data['title'] 		= "Dash Board";
		$data['layout']		= "common/dashboard";
		$this->load->view("container",$data);
	}
}