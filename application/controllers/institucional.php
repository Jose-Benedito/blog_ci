<?php 
defined('BASEPATH')OR exit('No direct script acess allowed');

class Institucional extends CI_Controller {
    public function index()
    {
        $this->load->view('home');
    }

    public function Empresa(){
        echo "página empresa";
        //$this->load->view('empresa');
    
    }
    public function Servicos(){
        $this->load->view('commons/header');
        $this->load->view('servicos');
        $this->load->view('commons/footer');
    }
}
