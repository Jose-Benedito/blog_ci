
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Institucional extends CI_Controller {
    public function index()
    {
        $this->load->view('home');
    }

    public function Empresa(){
    
        $this->load->view('welcome_message');
    
    }
    public function Servicos(){
        $this->load->view('commons/header');
        $this->load->view('servicos');
        $this->load->view('commons/footer');
    }
}
