<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Noticia_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($data) {
        return $this->db->insert('noticia', $data);
    }


    function editar($idnoticia) {
        $this->db->where('idusuario', $idnoticia);
        $query = $this->db->get('noticia');
        return $query->result();
    }

    function atualizar($data) {
        $this->db->where('idnoticia', $data['idnoticia']);
        $this->db->set($data);
        return $this->db->update('noticia');
    }

    function deletar($idnoticia) {
        $this->db->where('idnoticia', $idnoticia);
        return $this->db->delete('noticia');
    }
    
    /**
     * Modelo para o sistema de login
     * Ideia retirada do site abaixo
     */
    //http://www.iluv2code.com/login-with-codeigniter-php.html
   

}