<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Targeting extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
  // }
  
  public function set(){
    $this->load->view('header/user');
    $this->load->view('nav/user');
    $this->load->view('body/user/target');
    $this->load->view('footer/user');
  }
}
