
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
     //debug:  echo 'página home';
        $this->load->view('home');
    }

    public function empresa(){

       //debug: echo 'página empresa';
    
        $this->load->view('empresa');
    
    }
    public function servicos(){
        $this->load->view('commons/header');
        $this->load->view('servicos');
        $this->load->view('commons/footer');
    }
}
