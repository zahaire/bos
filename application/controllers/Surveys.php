<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surveys extends CORE_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        parent::point();
    }

    public function create()
    {
        return false;
    }

    public function save()
    {
        $dateTime = currentTimestamp();
        $survey_meta = [
            'user_id' => $this->session->current_user->id,
            'ref_id' => md5($dateTime . rand(1,100)),
            'title' => trim($this->input->post('title')),
            'description' => trim($this->input->post('survey_desc')),
            'instructions' => trim($this->input->post('add_ins')),
            'quota' => $this->input->post('quota'),
            'expiry' => $this->input->post('end_date'),
        ];
        $id = $this->Surveys->add($survey_meta);
        $texts = $this->input->post('question');
        $sub_texts = $this->input->post('additional');
        $question_types = $this->input->post('field_type');
        $required = $this->input->post('require');
        $choices = $this->input->post('choice');

        for ($i = 0; $i <= count($texts); $i++){
            if (isset($texts[$i])){
                $question = [
                    'survey_id' => $id,
                    'text' => $texts[$i],
                    'sub_text' => $sub_texts[$i],
                    'required' => isset($required[$i]) ? TRUE : FALSE,
                    'survey_question_type_id' => $question_types[$i] == 'null' ? '0' : $question_types[$i],
                ];
                $id = $this->Questions->add($question);
                var_dump($question);
                if (isset($choices[$i])){
                    for ($j = 0; $j < count($choices[$i]); $j++){
                        if (isset($choices[$i][$j])){
                            $options = [
                                'field_id' => $id,
                                'text' => $choices[$i][$j]
                            ];
                            $this->Options->add($options);
                        }
                        
                    }
                    
                }
            }
        }

        // foreach ($texts as $key => $value){
        //     $question = [
        //         'text' => $texts[$i],
        //         'sub_text' => $sub_texts[$i],
        //         'required' => $required[$i] == 'on' ? TRUE : FALSE,
        //         'survey_question_type_id' => $question_types[$i] == 'null' ? '0' : $question_types[$i],
        //     ];
        //     var_dump($question);
        // }
    }

    public function user()
    {
        parent::allowOnly([CUSTOMER]);
        parent::setTitle('Dashboard');
        // parent::customHeader('<link rel="stylesheet" href="' . base_url('assets/custom/css/register.css') . '"/>');
        parent::loadUser('body/customer/dashboard');
    }
}
