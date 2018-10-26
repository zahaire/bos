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
		$this->form_validation->set_error_delimiters('<p>', '</p>');
		$rules = [
			[
				'field' => 'username',
				'label' => 'Email',
				'rules' => 'required|trim|is_unique[user.username]'
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|trim|is_unique[users.email]'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|min_length[8]|max_length[16]'
			],
			[
				'field' => 'conf_password',
				'label' => 'Password Confirmation',
				'rules' => 'required|matches[password]'
			],
			[
				'field' => 'fname',
				'label' => 'First Name',
				'rules' => 'required|trim'
			],
			[
				'field' => 'lname',
				'label' => 'Last Name',
				'rules' => 'required|trim'
			],
			[
				'field' => 'mname',
				'label' => 'Last Name',
				'rules' => 'required|trim'
            ],
			[
				'field' => 'sex',
				'label' => 'Sex',
				'rules' => 'required|trim|in_list[female,male]'
            ],
            [
				'field' => 'bdate',
				'label' => 'Birth Date',
				'rules' => 'required|trim|in_list[female,male]'
			],
            [
				'field' => 'student_id',
				'label' => 'ID Number',
				'rules' => 'trim'
			],
            [
				'field' => 'org',
				'label' => 'Organization',
				'rules' => 'in_list[organization.id]'
			],
            [
				'field' => 'program',
				'label' => 'Program',
				'rules' => 'in_list[program.id]'
			],
            [
				'field' => 'yr',
				'label' => 'Year Level',
				'rules' => 'in_list[program.id]'
			],
            [
				'field' => 'region',
				'label' => 'Region',
				'rules' => 'required|in_list[geo_regions.id]'
			],
            [
				'field' => 'city',
				'label' => 'City',
				'rules' => 'required|in_list[geo_cities.id]'
			],
		];
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() === FALSE) {
            parent::point('pages/register');
		} else {
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
                
                'create_time' => currentTimestamp(),
                'status' => '0',
                'access' => '1',
            ];

            if ($this->User->add($user) === FALSE){
                $this->session->set_flashdata('error', 'Database error.');
                parent::point('pages/register');   
            } else {
                parent::point('pages/index');
            }
		}
    }

    public function login()
    {
        $this->form_validation->set_error_delimiters('<p>', '</p>');
		$rules = [
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|trim|max_length[32]'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[32]'
			],
		];
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() === FALSE) {
            parent::point('pages/register');
		} else {

            $user = $this->User->get_columns_by(
                ['id', 'password', 'email', 'first_name', 'middle_name', 'last_name', 'access'],
                ['username' => trim($this->input->post('username'))]
            );
            
            if ($user === NULL && password_verify(trim($this->input->post('password')), $user->password)){
                $this->session->set_flashdata('error', 'Invalid username/password.');
                parent::point('pages/register');
            } else {
                $session = (object) [
                    "id" => $user->id,
                    "email" => $user->email,
                    "first_name" => $user->first_name,
                    "middle_name" => $user->middle_name,
                    "last_name" => $user->last_name,
                    "access" => $user->access
                ];

				$this->session->set_userdata('current_user', $session);
				// var_dump($this->session->current_user); die;
				$this->User->update($user->id, ['last_login' => currentTimestamp()]);
				parent::point();
				
            }
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		parent::point();
	}
}
