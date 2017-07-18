<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends FrontendController {

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
        $contents['image'] = $this->Gallery_model->index();
		$this->load->view('front/v_gallery',$contents);
	}
    public function add(){
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['user']=$this->User_model->index();
            $this->load->view('backoffice/v_add_gallery',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function listimage(){
        if ($this->session->userdata('login_backoffice')==true){
            $contents['msg'] = $this->Message_model->msg();
            $contents['image'] = $this->Gallery_model->index();
            $contents['admin'] = $this->session->userdata('admin');
            $contents['user']=$this->User_model->index();
            $this->load->view('backoffice/v_gallery',$contents);
        }
        else{
            redirect('backoffice');
        }
    }
    public function insert(){
        if ($this->session->userdata('login_backoffice')==true){
            $nmfile = "file_".time();
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|';
            $config['max_size'] = '7096';
            $config['max_width']  = '3600';
            $config['max_height']  = '3600';
            $config['file_name'] = $nmfile;
            $this->upload->initialize($config);
            if($_FILES['filefoto']['name']) {
                if ($this->upload->do_upload('filefoto')) {
                    $gbr = $this->upload->data();
                    $data = array(
                        'nm_gbr' => $gbr['file_name'],
                        'tipe_gbr' => $gbr['file_type'],

                    );
                    $this->Gallery_model->add($data);
                }
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Image has been uploaded</div></div>");
                redirect('gallery/add');
            }
            else{
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Cant Upload Image</div></div>");
                redirect('gallery/add');
            }

        }
        else{
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Cant Upload Image</div></div>");
            redirect('gallery/add');
        }
    }
    public function deleted($id){
        if ($this->session->userdata('login_backoffice')==true){
            $result=$this->Gallery_model->findimage($id);
            $data_gambar=["namagambar" => $result->gallery_name,
            ];
            unlink("./assets/uploads/".$data_gambar['namagambar']);
            $this->Gallery_model->deleted($id);
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Image has been removed</div></div>");
            redirect('gallery/listimage');
        }
        else{
            $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Cant delete Image</div></div>");
            redirect('gallery/listimage');
        }
    }

}
