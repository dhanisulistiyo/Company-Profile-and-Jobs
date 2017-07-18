<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends FrontendController {

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
        $contents['image']=$this->Gallery_model->limit3();
		$this->load->view('front/v_index',$contents);
	}
    public function account(){
        $this->load->view('front/v_register');
    }
    public function register(){
        $recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);
        if($this->input->post('submit')&& isset($response['success']) && $response['success'] == true){
            $this->User_model->add();
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Your Account Has Been Registered</div></div>");
            redirect('home/account');

        }
        else{
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Capctcha is Wrong</div></div>");
            redirect('home/account');
        }
    }
    public function login(){
        if ($this->session->userdata('login_user')==true){
            redirect('home');
        }
        else{
            if ($_POST){
                $result=$this->User_model->validasi_user($_POST);
                if (!empty($result)){
                    $data_user=["username" =>$result->username,
                        "email" =>$result->user_email,
                        "password"=>$result->user_password,
                    ];
                    $this->session->set_userdata('login_user',true);
                    $this->session->set_userdata('user',$data_user);
                    redirect('home');
                }
                else{
                    redirect('home/login');
                }
            }
            else
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Username and Password is wrong</div></div>");
                redirect('home/account');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('');
    }
}
