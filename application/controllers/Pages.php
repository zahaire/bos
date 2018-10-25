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
    }

    public function register()
    {
        parent::allowOnly([GUEST]);
        $organizations = $this->Generic->getAll([], ['status_id' => 0], 'organization');
        $programs = $this->Generic->getAll([], ['status_id' => 0], 'program');
        $yr_lvls = $this->Generic->getAll([], ['status_id' => 0], 'yr_lvl');
        $regions = $this->Generic->getAll([], [], 'geo_regions');
        $cities = $this->Generic->getAll([], [], 'geo_cities');
        
        $data['organizations'] = $organizations;
        $data['programs'] = $programs;
        $data['yr_lvls'] = $yr_lvls;
        $data['regions'] = $regions;
        $data['cities'] = $cities;

        parent::setResponse($data);
        parent::setTitle('Register');
        parent::customHeader('<link rel="stylesheet" href="' . base_url('assets/custom/css/register.css') . '"/>');
        parent::loadGuest('body/guest/register');
    }
}
