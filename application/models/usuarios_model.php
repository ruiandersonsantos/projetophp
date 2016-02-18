<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
       
    public function logarNoSitema($email, $senha){
        
        $this->db->where('email', $email);
        $this->db->where('senha', md5($senha));
        
        return $this->db->get("usuarios")->row_array();
    }
}