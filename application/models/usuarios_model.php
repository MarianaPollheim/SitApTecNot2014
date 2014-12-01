<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($data) {
        return $this->db->insert('usuario', $data);
    }

    function listar() {
        $query = $this->db->get('usuario');
        return $query->result();
    }

    function editar($idusuario) {
        $this->db->where('idusuario', $idusuario);
        $query = $this->db->get('usuario');
        return $query->result();
    }

    function atualizar($data) {
        $this->db->where('idusuario', $data['idusuario']);
        $this->db->set($data);
        return $this->db->update('usuario');
    }

    function deletar($idusuario) {
        $this->db->where('idusuario', $idusuario);
        return $this->db->delete('usuario');
    }
    
    /**
     * Modelo para o sistema de login
     * Ideia retirada do site abaixo
     */
    //http://www.iluv2code.com/login-with-codeigniter-php.html
    function login($email, $senha) {
        $this->db->select('idusuario, nome, email, foto');
        $this->db->from('usuario');
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}

/* End of file usuarios_model.php */
/* Location: ./application/models/usuarios_model.php */