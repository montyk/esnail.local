<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
}

class FrontEnd_Controller extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
	}
}

class BackEnd_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('Tank_auth');
		if(!$this->tank_auth->is_logged_in()){
			redirect('/auth/login/');
		}
		if($this->session->flashdata('feedback'))
		{
			$this->data['feedback'] = $this->session->flashdata('feedback');
		}
		$this->data['username'] = ucfirst($this->tank_auth->get_username());
	}
}