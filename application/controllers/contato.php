<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contato extends CI_Controller {
    public function FaleConosco()
    {
        $data['title'] = "BNTH | Fale Conosco";
        $data['description'] = "Exercício de exemplo do capítulo 5 do livro CodeIgniter da casa do código";

        $this->load->view('faleconosco', $data);
    }

    public function TrabalheConosco()
    {
        $data['title'] = 'BNTH | Trabalhe Conosco';
        $data['description'] = "Exercício de exemplo docapítulo 5 do livro Codeigniter";

        $this->load->view('trabalheconosco', $data);
    }
}