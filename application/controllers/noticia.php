<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Noticia extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('noticia_model');
        //Definir o timezone - Fuso Horário
        date_default_timezone_set('America/Sao_Paulo');
    }

    function index() {
        $data['titulo'] = "CRUD com CodeIgniter | Cadastro de Noticia";
        /**
         * Lista todos os registros da tabela usuarios
         */
      
        /**
         * Carrega a view
         */
        //$this->load->view('usuarios_view.php', $data);
        $this->load->view('home-header');
        $this->load->view('home', $data);
        $this->load->view('home-footer');
    }

    public function info() {
        phpinfo();
        exit();
    }

    function inserir() {

        /* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
        $this->load->library('form_validation');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para validação */
        $this->form_validation->set_rules('titulo', 'Titulo', 'required|max_length[40]');
        $this->form_validation->set_rules('texto', 'Texto', 'trim|required');

        /* Executa a validação e caso houver erro... */
        if ($this->form_validation->run() === FALSE) {
            /* Chama a função index do controlador */
            $this->index();
            //base_url('index.php#cadastro');
            /* Senão, caso sucesso na validação... */
        } else {
            /* Recebe os dados do formulário (visão) */
            $data['titulo'] = $this->input->post('titulo');
            $data['texto'] = $this->input->post('texto');
         

            //Datas
            $data['dtcriacao'] = date('Y-m-d H:i:s');
            

            /* Chama a função inserir do modelo */
            if ($this->noticia_model->inserir($data)) {
                redirect('noticia');
            } else {
                log_message('error', 'Erro ao inserir a noticia.');
            }
        }
    }

    function editar($id) {

        /* Aqui vamos definir o título da página de edição */
        $data['titulo'] = "CRUD com CodeIgniter | Editar Noticia";

        /* Busca os dados da usuario que será editada (id) */
        $data['dados_noticia'] = $this->noticia_model->editar($id);

        

        /**
         * debug is on the table
         */
        /*
          echo "<pre>";
          var_dump($data);
          echo "</pre>";
          die();
         * 
         */

        /* Carrega a página de edição com os dados da usuario */
        $this->load->view('home-header');
        $this->load->view('home-edit', $data);
        $this->load->view('home-footer');
    }

    function atualizar() {

        /* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
        $this->load->library('form_validation');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Aqui estou definindo as regras de validação do formulário, assim como 
          na função inserir do controlador, porém estou mudando a forma de escrita */
        $validations = array(
            array(
                'field' => 'titulo',
                'label' => 'Titulo',
                'rules' => 'trim|required|max_length[40]'
            ),
            array(
                'field' => 'texto',
                'label' => 'Texto',
                'rules' => 'trim|required'
            )
        );
        $this->form_validation->set_rules($validations);

        /* Executa a validação... */
        if ($this->form_validation->run() === FALSE) {
            /* Caso houver erro chama função editar do controlador novamente */
            $this->editar($this->input->post('idnoticia'));
        } else {
            /* Senão obtém os dados do formulário */
            $data['idnoticia'] = $this->input->post('idnoticia');
            $data['titulo'] = ucwords($this->input->post('titulo'));
            $data['texto'] = strtolower($this->input->post('texto'));
           

            //Pegando a data de atualização
            $data['dtatualizacao'] = date('Y-m-d H:i:s');

            //Convertendo a data para MySQL
            $data['dtnascimento'] = $this
                    ->converterDataParaMySql($data['dtnascimento']);

            /* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
            if ($this->noticia_model->atualizar($data)) {
                /* Caso sucesso ao atualizar, recarrega a página principal */
                redirect('noticia');
            } else {
                /* Senão exibe a mensagem de erro */
                log_message('error', 'Erro ao atualizar o noticia.');
            }
        }
    }

    function deletar($idnoticia) {

        /* Executa a função deletar do modelo passando como parâmetro o id da usuario */
        if ($this->noticia_model->deletar($idnoticia)) {
            /* Caso sucesso ao atualizar, recarrega a página principal */
            redirect('noticia');
        } else {
            /* Senão exibe a mensagem de erro */
            log_message('error', 'Erro ao deletar a noticia.');
        }
    }

    /**
     * Converte uma data padrão brasileiro DD/MM/AAAA
     * para o padrão MySQL AAAA-MM-DD 
     * @param date $databrasileira
     * @return date
     */
    private function converterDataParaMySql($databrasileira) {
        $data = explode('/', $databrasileira);
        $data = array_reverse($data);
        $dataMySQL = implode('-', $data);
        return $dataMySQL;
    }

    /**
     * Converte uma data padrão MySQL AAAA-MM-DD
     * para o padrão brasileiro DD/MM/AAAA
     * @param date $dataMySQL
     * @return date
     */
    private function converteDataParaPadraoBrasileiro($dataMySQL) {
        $data = explode('-', $dataMySQL);
        $data = array_reverse($data);
        $dataBrasileira = implode('/', $data);
        return $dataBrasileira;
    }

   
}