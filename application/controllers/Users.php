<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CORE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function validate()
    {
		// $this->form_validation->set_error_delimiters('<p>', '</p>');
		// $rules = [
		// 	[
		// 		'field' => 'email',
		// 		'label' => 'Email',
		// 		'rules' => 'required|valid_email|trim|is_unique[users.email]'
		// 	],
		// 	[
		// 		'field' => 'password',
		// 		'label' => 'Password',
		// 		'rules' => 'required|min_length[8]|max_length[16]'
		// 	],
		// 	[
		// 		'field' => 'conf_password',
		// 		'label' => 'Password Confirmation',
		// 		'rules' => 'required|matches[password]'
		// 	],
		// 	[
		// 		'field' => 'first_name',
		// 		'label' => 'First Name',
		// 		'rules' => 'required|trim'
		// 	],
		// 	[
		// 		'field' => 'last_name',
		// 		'label' => 'Last Name',
		// 		'rules' => 'required|trim'
		// 	],
		// 	[
		// 		'field' => 'address',
		// 		'label' => 'Address',
		// 		'rules' => 'required|trim'
		// 	],
		// ];
		// $this->form_validation->set_rules($rules);

		// if ($this->form_validation->run() === TRUE){
        $user = [
            'username' => trim($this->input->post('username')),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'first_name' => $this->input->post('fname'),
            'last_name' => $this->input->post('lname'),
            'middle_name' => $this->input->post('mname'),
            'sex' => $this->input->post('sex'),
            'birth_date' => $this->input->post('bdate'),
            
            'student_id' => $this->input->post('student_id'),
            'organization_id' => $this->input->post('org'),
            'program_id' => $this->input->post('program'),
            'yr_lvl_id' => $this->input->post('yr'),
            'home_city_id' => $this->input->post('city'),
            'home_region_id' => $this->input->post('region'),
            'current_city_id' => $this->input->post('city'),
            'current_region_id' => $this->input->post('region'),
            
            'create_time' => date("Y-m-d H:i:s"),
            'status' => '0',
            'access' => '0',
        ];

        // var_dump($user);
        // die;

        if ($this->User->add($user)){
            parent::point('pages/index');
        } else {
            $this->session->set_flashdata('error', 'Could not register you.');
            parent::point('pages/register');
        }
		// } else {
		// 	$this->register();
		// }
    }
}
