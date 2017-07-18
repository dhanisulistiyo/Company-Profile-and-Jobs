<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model{

    var $table='gallery_tbl';
    public function index(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    public function limit3(){
        $query=$this->db->select('*')->from($this->table)->limit(3)->get();
        return $query->result();
    }
    public function deleted($id){
        $this->db->where('gallery_id',$id);
        $this->db->delete($this->table);
    }
    public function add($gbr){
        $data=array(
            'gallery_name'=>$gbr['nm_gbr'],
            'gallery_title'=>$this->input->post('title'),
            'gallery_description'=>$this->input->post('description'),
            'admin_username'=>$this->session->userdata('admin')['username']
        );
        $this->db->insert($this->table,$data);
    }
    public function findimage($id){
        $query=$this->db->select('*')->from($this->table)->where('gallery_id',$id)->get();
        return $query->row();
    }

}