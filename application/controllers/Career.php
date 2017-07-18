<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends FrontendController {

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
	public function index()
	{
        $contents['vacancy']=$this->Vacancy_model->tampil();
		$this->load->view('front/v_career',$contents);
	}
    public function vacancies()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['vacancy']=$this->Vacancy_model->tampil();
            $contents['message']=$this->Message_model->index();
            $this->load->view('backoffice/v_vacancy',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function addvacancy()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['user']=$this->User_model->index();
            $contents['joba']=$this->Job_model->index();
            $this->load->view('backoffice/v_add_vacancy',$contents);
        }
        else{
            redirect('backoffice');
        }

    }
    public function insert()
    {
        if ($this->session->userdata('login_backoffice')==true){
            $this->Vacancy_model->add();
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Job Vacancy Has Been Added</div></div>");
            redirect('career/vacancies');
        }
        else{
            redirect('backoffice');
        }

    }
    public function deleted($id)
    {
        if ($this->session->userdata('login_backoffice')==true){
            $this->Vacancy_model->deleted($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Job Vacancy Has Been Removed</div></div>");
            redirect('career/vacancies');
        }
        else{
            redirect('backoffice');
        }

    }
    public function apply($id)
    {
        if ($this->session->userdata('login_user')==true){
                $this->load->view('front/v_apply');
        }
        else{
            $this->load->view('front/v_login_first');
        }

    }
    public function insertapply($id)
    {
        if ($this->session->userdata('login_user')==true){
            $nmfile = "file_".time();
            $config['upload_path'] = './assets/uploadpdf/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '7096';
            $config['max_width']  = '3600';
            $config['max_height']  = '3600';
            $config['file_name'] = $nmfile;
            $this->upload->initialize($config);
            if($_FILES['filepdf']['name']) {
                if ($this->upload->do_upload('filepdf')) {
                    $gbr = $this->upload->data();
                    $data = array(
                        'nm_pdf' => $gbr['file_name'],
                        'tipe_pdf' => $gbr['file_type'],

                    );
                    $this->Application_model->add($data,$id);
                    $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Your Application Has Been Added</div></div>");
                    redirect('career/apply/'.$id);
                }
            }

        }
        else{
            redirect('backoffice');
        }

    }
}
