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
        $this->load->view('header/user.php');
        $this->load->view('nav/user.php');
        $this->load->view('body/user/home.php');
        $this->load->view('footer/user.php');

    }

    public function admin() {
        $this->load->view('header/admin.php');
        $this->load->view('nav/admin.php');
        $this->load->view('body/admin/home.php');
        $this->load->view('footer/admin.php');

    }


    
 

}
