<?php

  class Register extends CI_Controller {

    function __construct() {
      parent::__construct();
    }

    function index() {
      $this->data['page'] = 'register';
      $this->load->view('layout', $this->data);
    }

    function step2() {

      $this->load->library('email');
      $this->email->from('no-reply@esnail.ca', 'eSnail.ca');
      $this->email->to('registrar@esnail.ca');
      $this->email->subject('New Registration on eSnail');

      $message = "A new registration has been made on eSnail.ca\n\n";
      $message.= "Please check your PayPal account to see the chosen plan\n";
      $message.= "Name: " . $this->input->post('firstName') . ' ' . $this->input->post('lastName') . "\n";
      $message.= "E-mail address: " . $this->input->post('email') . "\n";
      $message.= "Password: " . $this->input->post('pass') . "\n";
      $message.= "Business name: " . $this->input->post('businessName') . "\n";
      $message.= "Promotion code: " . $this->input->post('promotionCode') . "\n\n";
      $message.= "Best regards, \neSnail";
      $this->email->message($message);
      $this->email->send();
    }
  }
