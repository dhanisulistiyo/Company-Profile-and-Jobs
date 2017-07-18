<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends BackendController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
        redirect('backoffice/login');
    }
    public function login(){
        if ($this->session->userdata('login_backoffice')==true){
            redirect('backoffice/applicant');
        }
        else{
            if ($_POST){
                $result=$this->Admin_model->validasi_admin($_POST);
                if (!empty($result)){
                    $data_admin=["username" =>$result->admin_username,
                        "password"=>$result->admin_password,
                    ];
                    $this->session->set_userdata('login_backoffice',true);
                    $this->session->set_userdata('admin',$data_admin);
                    redirect('backoffice/applicant');
                }
                else{
                    redirect('backoffice');
                }
            }
            else
                $this->load->view('backoffice/v_login');
        }
    }
    public function user()
	{
        if ($this->session->userdata('login_backoffice')==true){
            $contents['admin'] = $this->session->userdata('admin');
            $contents['msg'] = $this->Message_model->msg();
            $contents['user']=$this->User_model->index();
            $this->load->view('backoffice/v_user',$contents);
        }
        else{
            redirect('backoffice');
        }

	}
    public function message()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['message']=$this->Message_model->index();
            $this->load->view('backoffice/v_message',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function deletemessage($id)
    {
        if ($this->session->userdata('login_backoffice')==true){
            $this->Message_model->deleted($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Message Has Been Deleted</div></div>");
            redirect('backoffice/message');
        }
        else{
            redirect('backoffice');
        }
    }
    public function deleteadmin($adm)
    {
        if ($this->session->userdata('login_backoffice')==true){
            $this->Admin_model->deleted($adm);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Admin Has Been Deleted</div></div>");
            redirect('backoffice/admin');
        }
        else{
            redirect('backoffice');
        }
    }
    public function deleteapplicant($id,$nm)
    {
        if ($this->session->userdata('login_backoffice')==true){
            unlink("./assets/uploadpdf/".$nm);
            $this->Application_model->deleted($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Application Has Been Deleted</div></div>");
            redirect('backoffice/applicant');
        }
        else{
            redirect('backoffice');
        }
    }
    public function editjob($id)
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['message']=$this->Message_model->index();
            $contents['job']=$this->Job_model->edit($id);
            $this->load->view('backoffice/v_update_job',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function addadmin()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['message']=$this->Message_model->index();
            $this->load->view('backoffice/v_add_admin',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function editadmin()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['message']=$this->Message_model->index();
            $contents['adm']=$this->Admin_model->edit();
            $this->load->view('backoffice/v_update_admin',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function editpass()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['message']=$this->Message_model->index();
            $this->load->view('backoffice/v_update_pass',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function updatejob($id)
    {
        if ($this->session->userdata('login_backoffice')==true){
            $this->Job_model->update($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Job Has Been Updated</div></div>");
            redirect('backoffice/job');
        }
        else{
            redirect('backoffice');
        }
    }
    public function updatepass()
    {
        if ($this->session->userdata('login_backoffice')==true){
            if ($this->input->post('new_pass')==$this->input->post('new_pass2')) {
                $result=$this->Admin_model->cekpass();
                if (!empty($result)) {
                    $this->Admin_model->updatepass();
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Password Has Been Updated</div></div>");
                    redirect('backoffice/editpass');
                }
                else{
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Old Password is Wrong</div></div>");
                    redirect('backoffice/editpass');
                }
            }
            else{
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">New Password and Confirmation Password don't match</div></div>");
                redirect('backoffice/editpass');
            }
        }
        else{
            redirect('backoffice');
        }
    }
    public function updateadmin()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $this->Admin_model->update();
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Admin Has Been Updated</div></div>");
            redirect('backoffice/job');
        }
        else{
            redirect('backoffice');
        }
    }




    public function applicant()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['user']=$this->User_model->index();
            $contents['application']=$this->Application_model->tampil();
            $this->load->view('backoffice/v_applicant',$contents);
        }
        else{
            redirect('backoffice');
        }

    }
    public function job()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['user']=$this->User_model->index();
            $contents['job']=$this->Job_model->index();
            $this->load->view('backoffice/v_job',$contents);
        }
        else{
            redirect('backoffice');
        }

    }
    public function admin()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['user']=$this->User_model->index();
            $contents['adm']=$this->Admin_model->index();
            $contents['job']=$this->Job_model->index();
            $this->load->view('backoffice/v_admin',$contents);
        }
        else{
            redirect('backoffice');
        }

    }
    public function addjob(){
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['user']=$this->User_model->index();
            $this->load->view('backoffice/v_add_job',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function insertjob(){
        if ($this->session->userdata('login_backoffice')==true){
            $this->Job_model->add();
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Job Has Been Added</div></div>");
            redirect('backoffice/job');

        }
        else{
            redirect('backoffice');
        }
    }
    public function insertadmin(){
        if ($this->session->userdata('login_backoffice')==true){
            $this->Admin_model->add();
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Admin Has Been Added</div></div>");
            redirect('backoffice/admin');

        }
        else{
            redirect('backoffice');
        }
    }
    public function deletejob($id){
        if ($this->session->userdata('login_backoffice')==true){
            $this->Job_model->deleted($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Job Has Been Removed</div></div>");
            redirect('backoffice/job');

        }
        else{
            redirect('backoffice');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('backoffice');
    }
}
