<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class CommonController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

class FrontendController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('User_model','Admin_model','Message_model','Job_model','Gallery_model','Vacancy_model','Application_model'));
        $this->load->library('recaptcha');
        $this->load->library('upload');
    }
}

class BackendController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        $this->load->model(array('User_model','Admin_model','Message_model','Job_model','Gallery_model','Vacancy_model','Application_model'));
    }

}