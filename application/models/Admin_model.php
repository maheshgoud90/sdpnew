<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    //public $table = 'careers';

    public function get_careers()
    {
        $this->db->select('*');
        $this->db->from('careers');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function career_count()
    {
        $this->db->select('count(*) as count');
        $this->db->from('careers');
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function delete_career($id){
        $this->db->where('id', $id);
        $this->db->delete('careers');
        //echo $this->db->last_query();
        //exit;
    }

    public function get_products()
    {
        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function add_product($data)
    {
        return $this->db->insert('products',$data);

    }
    public function edit_product($data,$id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('products',$data);
        return $query;
        

    }
    public function get_product_single($id){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
}