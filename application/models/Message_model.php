<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model{

    var $table='message_tbl';
    public function index(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    public function add(){
        date_default_timezone_set("Asia/Jakarta");
        $date=date('Y-m-d H:i:sa');
        $data=array(
            'message_name'=>$this->input->post('name'),
            'message_subject'=>$this->input->post('subject'),
            'message_email'=>$this->input->post('email'),
            'message_phone'=>$this->input->post('phone'),
            'message_description'=>$this->input->post('description'),
            'message_date'=>$date,
        );
        $this->db->insert($this->table,$data);
    }
    public function deleted($id){
        $this->db->where('message_id',$id);
        $this->db->delete($this->table);
    }
    public function msg(){
        $query=$this->db->select('*')->from($this->table)->limit(3)->get();
        return $query->result();
    }
}