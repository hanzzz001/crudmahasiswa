<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class mahasiswa_model extends CI_Model 
{
    public $table = 'mahasiswa';
    public $id = 'mahasiswa.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();

    }
    public function getbyid($id)
    {
        $this->db->select('m.*,p.nama as prodi');
        $this->db->from ('mahasiswa m'); 
        $this->db->join('prodi p', 'm.prodi = p.Id'); 
        $this->db->where('m.Id', $id); 
        $query = $this->db->get(); 
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->where($where);
        $this->db->update($this->table,$data,$where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert ($this->table,$data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where ($this->id,$id);
        $this->db->delete ($this->table);
        return $this->db->affected_rows();
    }
}

?>