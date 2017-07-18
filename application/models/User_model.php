<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

    var $table='user_tbl';
    public function index(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    public function validasi_user($data_user){
        $this->db->where("username",$data_user['username']);
        $passworddes=md5($data_user['password']);
        $this->db->where("user_password",$passworddes);
        return $this->db->get($this->table)->row();
    }
    public function add(){
        $data=array(
            'user_email'=>$this->input->post('email'),
            'user_full_name'=>$this->input->post('name'),
            'username'=>$this->input->post('username'),
            'user_phone'=>$this->input->post('phone'),
            'user_password'=>md5($this->input->post('password')),
            'user_gender'=>$this->input->post('gender'),
            'user_address'=>$this->input->post('address'),
        );
        $this->db->insert($this->table,$data);
    }
}