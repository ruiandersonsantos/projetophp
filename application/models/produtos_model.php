<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produtos_model extends CI_Model {

    public function insereProduto($produto) {
        return $this->db->insert("produtos", $produto);
    }

    public function alterarProduto($produto) {
        $this->db->where('id', $produto['id']);
        return $this->db->update("produtos", $produto);
    }
    
    public function listaProduto(){
        return $this->db->get("produtos")->result_array();
    }

}
