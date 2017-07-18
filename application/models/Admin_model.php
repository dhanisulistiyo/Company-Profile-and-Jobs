<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

    var $table='admin_tbl';
    public function index(){
        $query=$this->db->select('*')->from($this->table)->where_not_in('admin_username',$this->session->userdata('admin')['username'])->get();
        return $query->result();
    }
    public function edit(){
        $query=$this->db->select('*')->from($this->table)->where('admin_username',$this->session->userdata('admin')['username'])->get();
        return $query->result();
    }

    public function validasi_admin($data_admin){
        $this->db->where("admin_username",$data_admin['username']);
        $passworddes=md5($data_admin['password']);
        $this->db->where("admin_password",$passworddes);
        return $this->db->get($this->table)->row();
    }
    public function add(){
        $data=array(
            'admin_username'=>$this->input->post('username'),
            'admin_email'=>$this->input->post('email'),
            'admin_name'=>$this->input->post('name'),
            'admin_password'=>md5($this->input->post('password')),
        );
        $this->db->insert($this->table,$data);
    }
    public function update(){
        $data=array(
            'admin_username'=>$this->input->post('username'),
            'admin_email'=>$this->input->post('email'),
            'admin_name'=>$this->input->post('name'),
        );
        $this->db->where('admin_username',$this->session->userdata('admin')['username']);
        $this->db->update($this->table,$data);
    }
    public function cekpass(){
        $oldpass=md5($this->input->post('old_pass'));
        $this->db->where('admin_username',$this->session->userdata('admin')['username']);
        $this->db->where('admin_password',$oldpass);
        return$this->db->get($this->table)->row();
    }
    public function updatepass(){
        $data=array(
            'admin_password'=>md5($this->input->post('new_pass')),
        );
        $this->db->where('admin_username',$this->session->userdata('admin')['username']);
        $this->db->update($this->table,$data);
    }
    public function deleted($adm){
        $this->db->where('admin_username',$adm);
        $this->db->delete($this->table);
    }

}