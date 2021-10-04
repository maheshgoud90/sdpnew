<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{

    //public $table = 'careers';

    public function insert_careers($data)
    {
        $this->db->insert('careers',$data);
    }
}