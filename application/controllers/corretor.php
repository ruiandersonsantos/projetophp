<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corretor extends CI_Controller {

    public function index() {

        $this->load->database();

        $this->load->model("corretores_model");

        $corretor = $this->corretores_model->buscarCorretor();

        $produto = array(
            "texto" => "texto que isra aparecer no tag do produto"
        );

        $dados = array("corretor" => $corretor, "produto" => $produto);

        $this->load->view('principal', $dados);
    }

    public function visualizar() {

        $this->load->database();

        $this->load->model("corretores_model");

        $corretor = $this->corretores_model->buscarCorretor();

        $dados = array("corretor" => $corretor);

        $this->load->view('corretor/dados', $dados);
    }

    public function alterar() {

        $this->load->database();
        $this->load->model("corretores_model");
        
        $corretor_atualiza = array(
            "id" => $this->input->post("id"),
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "telefone" => $this->input->post("telefone"),
            "celular" => $this->input->post("celular"),
            "facebook" => $this->input->post("facebook"),
            "titulosite" => $this->input->post("titulosite")
        );
        

        $retorno = $this->corretores_model->alterarCorretor($corretor_atualiza);
        
        if($retorno){
            $this->session->set_flashdata("sucesso","Alteração realizada com sucesso.");
        }else{
            $this->session->set_flashdata("error","Problemas na alteração dos dados.");
        }
        //$this->load->view('corretor/resposta');
        //$this->load->view('/');
        redirect('corretor/visualizar');
    }

}
