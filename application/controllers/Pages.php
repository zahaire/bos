<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CORE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        parent::point();
    }

    public function home()
    {
        parent::allowOnly([GUEST]);
        
        parent::setTitle('Home');
        parent::customHeader('<link rel="stylesheet" href="' . base_url('assets/custom/css/heroic-features.css') . '"/>');
        parent::loadGuest('body/guest/home');
        // var_dump($this->session->current_user);
        // var_dump(parent::user());
    }

    public function register()
    {
        parent::allowOnly([GUEST]);
        $data['organizations'] = $this->Generic->getAll([], ['status_id' => 0], 'organization');
        $data['programs'] = $this->Generic->getAll([], ['status_id' => 0], 'program');
        $data['yr_lvls'] = $this->Generic->getAll([], ['status_id' => 0], 'yr_lvl');
        $data['regions'] = $this->Generic->getAll([], [], 'geo_regions');
        $data['cities'] = $this->Generic->getAll([], [], 'geo_cities');

        parent::setResponse($data);
        parent::setTitle('Register');
        parent::customHeader('<link rel="stylesheet" href="' . base_url('assets/custom/css/register.css') . '"/>');
        parent::loadGuest('body/guest/register');
    }

    public function user()
    {
        parent::allowOnly([CUSTOMER]);
        parent::setTitle('Dashboard');
        parent::customHeader('<link rel="stylesheet" href="' . base_url('assets/custom/css/dashboard.css') . '"/>');
        parent::loadUser('body/customer/dashboard');
    }

    public function surveys($page = '', $id = NULL)
    {
        switch($page){
            case 'create':
                parent::allowOnly([CUSTOMER]);
                $data['question_types'] = $this->Generic->getAll([], [], 'survey_question_types');
                $data['question_options'] = $this->Generic->getAll([], [], 'survey_question_options');
                parent::setTitle('Create New Survey');
                parent::setResponse($data);
                // parent::customHeader();
                parent::customFooter('<script src="' . base_url('assets/custom/js/createForm.js') . '"></script>');
                parent::loadUser('body/customer/new_survey');
            break;
            case 'browse':
                parent::allowOnly([CUSTOMER, GUEST]);
                parent::setTitle('Browse');
                // parent::setResponse();
                // parent::customHeader();
                parent::loadUser('body/browse');
            break;
            case 'view';
            break;
            default:
        }
    }
}
