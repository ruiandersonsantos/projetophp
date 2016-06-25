<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model("email_model");
        $this->load->model("corretores_model");
    }
    
    public function abreformorc() {
        $this->load->model("corretores_model");

        $corretor = $this->corretores_model->buscarCorretor();

        $dados = array("corretor" => $corretor);
        
        $this->load->view('formulario_orcamento',$dados);
    }
    
    public function orcamento() {
         $this->load->view('adm/orcamento');
    }

    public function faleconosco() {

        $corretor = $this->corretores_model->buscarCorretor();
        $dadosmensagem = $this->input->post();

        $dados = array("cliente" => $dadosmensagem);


        $mensagem = $this->load->view('adm/envia_faleconosco', $dados, TRUE);

        //Chamando metodo que envia email
        $retorno = $this->email_model->enviaEmail($corretor['email'], "Fale Conosco do Site", $mensagem);

        if ($retorno) {
            echo 'Email enviado com sucesso';
        }
    }

}
