<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		echo 'test';die;
		$this->load->view('welcome_message');
	}
}
/* End of file home.php */
/* Location: ./application/controllers/home.php */