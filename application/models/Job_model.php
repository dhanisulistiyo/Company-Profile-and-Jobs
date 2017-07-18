<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_model extends CI_Model{

    var $table='job_tbl';
    public function index(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    public function edit($id){
        $query=$this->db->select('*')->where('job_id',$id)->from($this->table)->get();
        return $query->result();
    }
    public function update($id){
        $data=array(
            'job_name'=>$this->input->post('name'),
            'job_description'=>$this->input->post('description'),
            'job_salary'=>$this->input->post('salary'),
        );
        $this->db->where('job_id',$id);
        $this->db->update($this->table,$data);
    }
    public function add(){
        $data=array(
            'job_name'=>$this->input->post('name'),
            'job_description'=>$this->input->post('description'),
            'job_salary'=>$this->input->post('salary'),
        );
        $this->db->insert($this->table,$data);
    }
    public function deleted($id){
        $this->db->where('job_id',$id);
        $this->db->delete($this->table);
    }
    public function msg(){
        $query=$this->db->select('*')->from($this->table)->limit(3)->get();
        return $query->result();
    }
}