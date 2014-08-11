<?php

	/**
	 * Create the template with the use of the header, the requested page and the footer
	 */
	$data['current_page'] = $page;
	$this->load->view('header', $data);
	$this->load->view($page, $data);
	$this->load->view('footer', $data);
?>
