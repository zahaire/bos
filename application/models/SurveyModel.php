<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SurveyModel extends CI_Model {
    public function __construct()
    {
      parent::__construct();
    }

    public function add($survey_meta)
    {
        $this->db->insert('survey_meta', $survey_meta);
        return $this->db->insert_id();
    }

    // public function get($id = NULL)
    // {
    //     if ($id !== NULL) {
    //         $query = $this->db->get('user');
    //         return $query->result();
    //     } else {
    //         $query = $this->db->get('user', ['id' => $id]);
    //         return $query->row();
    //     }
    // }

    // public function update($id, $values = []){
    //     return $this->db->where('id', $id)
    //         ->update('user', $values);
    // }

    // public function get_columns_by($columns = [], $constraints = [])
    // {
    //     $query = $this->db->select($columns)
    //         ->get('user', $constraints);
    //     return $query->row();
    // }
}
