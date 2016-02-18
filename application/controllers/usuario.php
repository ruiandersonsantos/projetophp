<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {
    
    public function login() {
        $this->load->view('adm/login');
    }
    
     public function recuperasenha() {
        $this->load->view('adm/recuperasenha');
    }
    
    
    public function logar() {
        
        $this->load->model("usuarios_model");
        
        $email = $this->input->post("email");
        $senha = $this->input->post("senha");
        
        $usuario = $this->usuarios_model->logarNoSitema($email, $senha);
        if($usuario){
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("mensagem", "Seja bem vindo ao painel de controle!");
        }else{
            $this->session->set_flashdata("mensagem","Usuario e ou senha invalidos");
        }
        
        
        redirect('usuario/login');
    }
    
    public function sair() {
        $this->session->unset_userdata("usuario_logado");
        redirect('usuario/login');
    }
    
}
