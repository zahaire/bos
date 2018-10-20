<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        // loading captcha helper
        // $this->load->helper('captcha');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('nav/user.php');
        $this->load->view('header/index.php');
        $this->load->view('footer/user.php');

    }
    
    public function product() {
        $this->load->view('header/customer.php');
        $this->load->view('nav/customer.php');
        $this->load->view('body/customer/home.php');
        $this->load->view('footer/customer.php');
    
    }

}
