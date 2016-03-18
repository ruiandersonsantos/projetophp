<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produto extends CI_Controller {

    public function cadastrar() {
        $this->load->model("produtos_model");
        
        $produto = array(
            "id" => '',
            "titulo" => '',
            "descricao" => '',
            'img_nome' => '',
            'img_path' => '',
            'img_full_path' => '',
            'img_ext' => '',
            'img_size' => 0,
            'img_largura' => 0,
            'img_altura' => 0,
            'img_tipo' => '',
            'status' => 0
        );

        $dados = array("produto" => $produto);
        $this->load->view('adm/produto', $dados);
    }
    
    public function listar() {
         $this->load->model("produtos_model");
         $retorno = $this->produtos_model->listaProduto();
         $listaprodutos = array("lista" => $retorno);
         
         $this->load->view('adm/listaproduto', $listaprodutos);
         
          
    }

    public function enviar() {

        $this->load->model("produtos_model");

        $config['upload_path'] = './imagens/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $config['file_ext_tolower'] = true;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('inputFile')) {
            echo $this->upload->display_errors('', '');
        } else {

            // upload da imagem
            $data = $this->upload->data();

            //verificando se retornou dados da imagem
            if (isset($data)) {

                $config = array(
                    'source_image' => $data['full_path'],
                    'new_image' => './imagens/thumbs',
                    'maintain_ration' => true,
                    'width' => 150,
                    'height' => 100
                );

                // redimencionando
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                //preenchendo objeto para gravar no bd
                $produto = array(
                    "titulo" => $this->input->post("titulo"),
                    "descricao" => $this->input->post("descricao"),
                    'img_nome' => $data['file_name'],
                    'img_path' => $data['file_path'],
                    'img_full_path' => $data['full_path'],
                    'img_ext' => $data['file_ext'],
                    'img_size' => $data['file_size'],
                    'img_largura' => $data['image_width'],
                    'img_altura' => $data['image_height'],
                    'img_tipo' => $data['image_type'],
                    'status' => 0
                );

                $retorno = $this->produtos_model->insereProduto($produto);

                if ($retorno) {
                    $this->session->set_flashdata("sucesso", "Produto gravado com sucesso.");
                   
                } else {
                    $this->session->set_flashdata("error", "Problemas na gravação do produto.");
                }
               
                 redirect('produto/cadastrar');
            }
        }
    }

}
