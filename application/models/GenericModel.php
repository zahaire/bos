<?php defined('BASEPATH') OR exit('No direct script access allowed');

class GenericModel extends CI_Model {
    public function __construct() {
      parent::__construct();
    }

    public function getAll($columns = [], $constraints, $table)
    {
        $query = $this->db->select($columns)
            ->where($constraints)
            ->get($table);
        return $query->result();
    }
}
