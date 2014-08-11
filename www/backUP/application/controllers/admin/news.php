<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends BackEnd_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[10]');
		$this->form_validation->set_rules('excerpt', 'Excerpt', 'required|min_length[100]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[100]');
	}

	function index()
	{
		$news = $this->news_model->get();
		$this->data['news'] = $news;
		$this->data['page'] = 'news';
		$this->load->view('admin/layout', $this->data);
	}

	function add()
	{
		if(!empty($_POST))
		{
			if(!$this->form_validation->run())
			{
				$this->data['feedback'] = array('status'=>0, 'message'=>validation_errors());
			}
				else
				{
					$this->news_model	->setTitle($this->input->post('title'))
										->setExcerpt($this->input->post('excerpt'))
										->setContent($this->input->post('content'))
										->setAddedOn($this->input->post('added_on'))
										->insert();
					$feedback = array('status'=>1, 'message'=>'The piece of news has been successfully added.');
					$this->session->set_flashdata('feedback', $feedback);
					redirect('/manage/news/');	
				}
		}
		$form = array(
				'open'		=> form_open('/manage/news/add'),
				'title' 	=> form_input('title', $this->input->post('title')),
				'content' 	=> form_textarea(array('name'=>'content', 'value'=>$this->input->post('content'), 'rows'=>'20')),
				'excerpt'	=> form_textarea(array('name'=>'excerpt', 'value'=>$this->input->post('excerpt'), 'rows'=>'10')),
				'added_on' 	=> form_input('added_on', $this->input->post('added_on')),
				'submit'	=> form_submit('add', 'Add', 'class="btn btn-success"'),
				'close'		=> form_close()
			);
		$this->data['form'] = $form;
		$this->data['page'] = 'news_form';
		$this->load->view('admin/layout', $this->data);
	}

	function edit($id)
	{
		$news = $this->news_model->setId($id)->get();
		if(!empty($_POST))
		{
			if(!$this->form_validation->run())
			{
				$news->title 	= $this->input->post('title');
				$news->excerpt  = $this->input->post('excerpt');
				$news->content 	= $this->input->post('content');
				$news->added_on = $this->input->post('added_on');
				$this->data['feedback'] = array('status'=>0, 'message'=>validation_errors());
			}
				else
				{
					$this->news_model	->setId($id)
										->setTitle($this->input->post('title'))
										->setContent($this->input->post('content'))
										->setExcerpt($this->input->post('excerpt'))
										->setAddedOn($this->input->post('added_on'))
										->update();
					$feedback = array('status'=>1, 'message'=>'The piece of news has been successfully edited.');
					$this->session->set_flashdata('feedback', $feedback);
					redirect('/manage/news/edit/'.$id.'/');	
				}
		}
		$form = array(
				'open'		=> form_open('/manage/news/edit/'.$id.'/'),
				'title' 	=> form_input('title', $news->title),
				'excerpt'	=> form_textarea(array('name'=>'excerpt', 'value'=>$news->excerpt, 'rows'=>'10')),
				'content' 	=> form_textarea(array('name'=>'content', 'value'=>$news->content, 'rows'=>'20')),
				'added_on' 	=> form_input('added_on', $news->added_on),
				'submit'	=> form_submit('edit', 'Edit', 'class="btn btn-success"'),
				'close'		=> form_close()
			);
		$this->data['form'] = $form;
		$this->data['page'] = 'news_form';
		$this->load->view('admin/layout', $this->data);
	}

	function delete($id)
	{
		$this->news_model->setId($id)->delete();
		$feedback = array('status'=>1, 'message'=>'The piece of news has been successfully deleted.');
		$this->session->set_flashdata('feedback', $feedback);
		redirect('/manage/news/');	
	}
}