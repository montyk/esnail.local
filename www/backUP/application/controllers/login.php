<?php

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['page'] = 'login';
		$this->load->view('layout', $this->data);		
	}

	function help()
	{
		$this->load->library('email');
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->to('support@esnail.ca');
		$this->email->subject('Support on eSnail.ca');
		$message = $this->input->post('message');
		$this->email->message($message);
		$this->email->send();
		$this->data['page'] = "support_sent";
		$this->load->view('layout', $this->data);
	}
}