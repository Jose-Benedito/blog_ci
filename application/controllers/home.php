
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
     //debug:  echo 'página home';
     $data['title'] = "BNTH | Home";
     $data['description'] = "Exercíciode exemplo do capítulo 5 do livro Codeigniter";
        $this->load->view('home', $data);
    }

    public function empresa(){

       //debug: echo 'página empresa';
        $data['title'] = "BNTH | A Empresa";
        $data['description'] = "Informações sobre a empresa";
        $this->load->view('empresa', $data);
    
    }
    public function servicos(){
        $data['title'] = "BNTH | Serviços";
        $data['description'] = "Informações sobre os serviços prestados";
        $this->load->view('commons/header', $data);
        $this->load->view('servicos');
        $this->load->view('commons/footer');
    }
}
