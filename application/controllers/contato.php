<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contato extends CI_Controller {
    // Carregadamento o library form Validation do CI para validar os formulários
    public function __construct()
    {
        parent::__construct();
        $this->load->library (array('form_validation', 'session')); //array para as duas library
        $this->load->helper('form');
        
    }
    //Para Carregamento das páginas
    public function FaleConosco()
    {
        $data['title'] = "BNTH | Fale Conosco";
        $data['description'] = "Exercício de exemplo do capítulo 5 do livro CodeIgniter da casa do código";
        
        // Regras de validação do formulário
        $this->form_validation->set_rules('nome', 'Nome', 'trim |required| min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim |required|valid_email');
        $this->form_validation->set_rules('assunto', 'Assunto', 'trim |required|min_length[5]');
        $this->form_validation->set_rules('mensagem', 'Mensagem', 'trim |required| min_length[30]');


        if($this->form_validation->run() == FALSE){
            $data['formErrors'] = validation_errors();

        }else{
            //mostra mensagem de sucesso na validação
            $this->session->set_flashdata('success_msg', 'Contato recebido com sucesso!');
            $data['formErrors'] = null;
        }
        
        $this->load->view('faleconosco', $data);
    }

    public function TrabalheConosco()
    {
        $data['title'] = 'BNTH | Trabalhe Conosco';
        $data['description'] = "Exercício de exemplo docapítulo 5 do livro Codeigniter";

        $this->load->view('trabalheconosco', $data);
    }
    // confgurações para o disparo de emails
    Private function SendEmailToAdmin($from, $fromName, $to, $toName, $subject, $message, $reply = null, $replyName = null)
    {
        $this->load->library('email');

        $config['charset'] = 'utf-8';
        $config['wordwrap'] = 'TRUE';
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.seudominio.com.br';
        $config['smtp_user'] = 'user@seudominio.com.br';
        $config['smtp_pass'] = 'suasenha';
        $config['newline'] = '\r\n';

        $this->email->initialize($config);

        $this->email->from($from, $fromName);
        $this->email->to($to, $toName);
        if($reply)
            $this->email->reply_to($reply, $replyName);

        $this->email->subject($subject);
        $this->email->message($message);

        if($this->email->send())
            return true;
        else
            return false;

    }
    
}