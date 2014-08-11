<?php

class Page extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['page'] = 'index';
		$this->load->model('news_model');
		$this->data['news'] = $this->news_model->orderBy('added_on', 'desc')->setLimit(2, 0)->get();
		$this->load->view('layout', $this->data);
	}

	function load($page_name)
	{
		if($page_name=='blog')
		{
			$this->load->model('news_model');
			$this->data['news'] = $this->news_model->orderBy('added_on', 'desc')->setLimit(15, 0)->get();			
		}
		$this->data['page'] = $page_name;
		$this->load->view('layout', $this->data);
	}
}