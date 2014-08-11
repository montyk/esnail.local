<?php

	/**
	 * Create the template with the use of the header, the requested page and the footer
	 */
	$data['current_page'] = $page;
	$this->load->view('admin/header', $data);
	$this->load->view('admin/'.$page, $data);
	$this->load->view('admin/footer', $data);
?>
