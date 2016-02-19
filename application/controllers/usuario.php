<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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

        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            $this->session->set_flashdata("sucesso", "Seja bem vindo ao painel de controle!");
        } else {
            $this->session->set_flashdata("error", "Usuario e ou senha invalidos");
        }


        redirect('usuario/login');
    }

    public function sair() {
        $this->session->unset_userdata("usuario_logado");
        redirect('usuario/login');
    }

    public function reenviandoSenha() {

        $this->load->model("usuarios_model");
        $this->load->model("email_model");

        $email = $this->input->post("email");
        $cpf = $this->input->post("cpf");

        // buscando usuario pelo e-mail e cpf no banco
        $usuario = $this->usuarios_model->buscarPorEmailCpf($email, $cpf);

        // verificando se foi retornado do banco
        if ($usuario) {
            // Gerando senha randomica 
            $senha = rand();

            //passando senha para atributo do objeto
            $usuario['senha'] = md5($senha);

            //montando mensagem (será melhorado em arquivo externo na aula explica)
            $msg = "<html> Sua nova senha é " . $senha . ". Efetue a alteração para sua preferencia no menu alrerar senha! </html>";

            //Chamando metodo que envia email
            $retorno = $this->email_model->enviaEmail($usuario['email'], "Recuperação de Senha", $msg);

            //alterando no banco
            $alterou = $this->usuarios_model->alteraSenha($usuario);

            // verificando se o envio e a gravação no banco ocorreram com sucesso.
            if ($retorno && $alterou) {
                $this->session->set_flashdata("sucesso", "Uma nova senha foi enviada para: " . $usuario['email']);
            } else {
                $this->session->set_flashdata("erro", "Problemas no envio do email - tente novamente! ");
            }
        } else {
            $this->session->set_flashdata("erro", "Não foi encontrado usuario com os dados informados!");
        }

        redirect("usuario/recuperasenha");
    }

}
