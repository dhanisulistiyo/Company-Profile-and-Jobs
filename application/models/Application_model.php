<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application_model extends CI_Model{

    var $table='application_tbl';
    public function index(){
        $query=$this->db->select('*')->from($this->table)->get();
        return $query->result();
    }
    public function tampil(){
        $query=$this->db->select('*')->from($this->table)->join('vacancy_tbl',$this->table.'.vacancy_id=vacancy_tbl.vacancy_id')
            ->join('job_tbl','vacancy_tbl.job_id=job_tbl.job_id')->join('user_tbl','user_tbl.user_email=application_tbl.user_email')->get();
        return $query->result();
    }
    public function add($pdf,$id){
        date_default_timezone_set("Asia/Jakarta");
        $date=date('Y-m-d H:i:sa');
        $data=array(
            'application_cv'=>$pdf['nm_pdf'],
            'application_description'=>$this->input->post('desc'),
            'created_at'=>$date,
            'vacancy_id'=>$id,
            'user_email'=>$this->session->userdata('user')['email']
        );
        $this->db->insert($this->table,$data);
    }
    public function deleted($id){
        $this->db->where('application_id',$id);
        $this->db->delete($this->table);
    }
}