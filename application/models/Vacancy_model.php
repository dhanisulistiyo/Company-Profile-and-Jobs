<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacancy_model extends CI_Model{

    var $table='vacancy_tbl';
    public function index(){
        $query=$this->db->select('*')->from($this->table)->order_by('vacancy_id','desc')->get();
        return $query->result();
    }
    public function tampil(){
        $query=$this->db->select('*')->from($this->table)->join('job_tbl',$this->table.'.job_id=job_tbl.job_id')
            ->join('admin_tbl',$this->table.'.admin_username=admin_tbl.admin_username')->get();
        return $query->result();
    }
    public function add(){
        $data=array(
            'vacancy_description'=>$this->input->post('editorpost'),
            'job_id'=>$this->input->post('job'),
            'vacancy_from'=>$this->input->post('from'),
            'vacancy_to'=>$this->input->post('to'),
            'admin_username'=>$this->session->userdata('admin')['username']
        );
        $this->db->insert($this->table,$data);
    }
    public function findimage($id){
        $query=$this->db->select('*')->from($this->table)->where('gallery_id',$id)->get();
        return $query->row();
    }
    public function deleted($id){
        $this->db->where('vacancy_id',$id);
        $this->db->delete($this->table);
    }

}