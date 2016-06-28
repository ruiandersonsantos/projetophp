<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imagem_model extends CI_Model {
    
     public function listaImagem() {
        //return $this->db->get("produtos")->result_array();
        return $this->db->query("select * from imagens ")->result_array();
    }
    
}