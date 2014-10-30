<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Usuario extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        
        /* Carrega o modelo */
		$this->load->model('usuario_model');
    }
 
    function index() 
    {
        $data['titulo'] = "CRUD com CodeIgniter | Cadastro de Pessoas";
		$data['usuario'] = $this->usuario_model->listar();
		$this->load->view('usuario_view.php', $data);
    }
    
    function inserir(){
		/* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
		$this->load->library('form_validation');
		/* Define as tags onde a mensagem de erro será exibida na página */
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		/* Define as regras para validação */
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[40]');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|max_length[100]');
                
                $this->form_validation->set_rules('senha', 'Senha', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('dtNasc', 'DataNascimento', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('foto', 'Foto', 'trim|max_length[40]');
                $this->form_validation->set_rules('cidade', 'Cidade', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('estado', 'Estado', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('bairro', 'Bairro', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('endereco', 'Endereco', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('cep', 'CEP', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('telefone', 'Telefone', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('celular', 'Celular', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('dtCriacao', 'dtCriacao', 'trim|required|max_length[40]');
                $this->form_validation->set_rules('dtAtualizaçao', 'dtAtualizacao', 'trim|required|max_length[40]');
  
 
                
                
                
                
		/* Executa a validação... */
		if ($this->form_validation->run() === FALSE) {
			/* Caso houver erro chama a função index do controlador */$this->index();
		} else {	/* Senão, recebe os dados do formulário (visão) */
			$data['nome'] = ucwords($this->input->post('nome'));
			$data['email'] = strtolower($this->input->post('email'));
                        $data['senha'] = $this->input->post('senha');
                        $data['dtNasc'] = $this->input->post('dtNasc');
                        $data['foto'] = $this->input->post('foto');
                        $data['cidade'] = ucwords($this->input->post('cidade'));
                        $data['estado'] = ucwords($this->input->post('estado'));
                        $data['bairro'] = ucwords($this->input->post('bairro'));
                        $data['endereco'] = ucwords($this->input->post('endereco'));
                        $data['telefone'] = $this->input->post('telefone');
                        $data['cep'] = $this->input->post('cep');
                        $data['celular'] = $this->input->post('celular');
                        $data['dtCriacao'] = $this->input->post('dtCriacao');
                        $data['dtAtualizaçao'] = $this->input->post('dtAtualizaçao');
                        
                        
                        
	 		/* Chama a função inserir do modelo */
			if ($this->usuario_model->inserir($data)) {
				redirect('pessoas');} else {log_message('error', 'Erro ao inserir a pessoa.');}}}
	
	function editar($id)  {
		
		/* Aqui vamos definir o título da página de edição */
		$data['titulo'] = "CRUD com CodeIgniter | Editar Pessoa";
	 
	 	/* Carrega o modelo */
		$this->load->model('usuario_model');

		/* Busca os dados da pessoa que será editada (id) */
		$data['dados_pessoa'] = $this->usuario_model->editar($id);
	 
	 	/* Carrega a página de edição com os dados da pessoa */
		$this->load->view('usuario_edit', $data);
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
				'field' => 'nome',
				'label' => 'Nome',
				'rules' => 'trim|required|max_length[40]'
			),
			array(
				'field' => 'email',
				'label' => 'E-mail',
				'rules' => 'trim|required|valid_email|max_length[100]'
			),
                    array(
				'field' => 'senha',
				'label' => 'Senha',
				'rules' => 'trim|required|max_length[40]'
			),
                     array(
				'field' => 'dtNasc',
				'label' => 'DataNascimento',
				'rules' => 'trim|required|max_length[40]'
			),
                     array(
				'field' => 'foto',
				'label' => 'Foto',
				'rules' => 'trim|max_length[40]'
			),
                     array(
				'field' => 'cidade',
				'label' => 'Cidade',
				'rules' => 'trim|required|max_length[40]'
			),
                    array(
				'field' => 'estado',
				'label' => 'Estado',
				'rules' => 'trim|required|max_length[40]'
			),
                    array(
				'field' => 'bairro',
				'label' => 'Bairro',
				'rules' => 'trim|required|max_length[40]'
			),
                    array(
				'field' => 'endereco',
				'label' => 'Endereco',
				'rules' => 'trim|required|max_length[40]'
			),
                    array(
				'field' => 'cep',
				'label' => 'CEP',
				'rules' => 'trim|required|max_length[40]'
			),
                    array(
				'field' => 'telefone',
				'label' => 'Telefone',
				'rules' => 'trim|required|max_length[40]'
			),
                    array(
				'field' => 'celular',
				'label' => 'Celular',
				'rules' => 'trim|required|max_length[40]'
			),
                     array(
				'field' => 'dtCriacao',
				'label' => 'dtCriacao',
				'rules' => 'trim|required|max_length[40]'
			),
                     array(
				'field' => 'dtAtualizacao',
				'label' => 'dtAtualizacao',
				'rules' => 'trim|required|max_length[40]'
			),
		);
		$this->form_validation->set_rules($validations);
		
		/* Executa a validação... */
		if ($this->form_validation->run() === FALSE) {
			/* Caso houver erro chama função editar do controlador novamente */
			$this->editar($this->input->post('id'));
		} else {
			/* Senão obtém os dados do formulário */
			$data['idUsuario'] = $this->input->post('id');
			$data['nome'] = ucwords($this->input->post('nome'));
			$data['email'] = strtolower($this->input->post('email'));
                        $data['senha'] = $this->input->post('senha');
                        $data['dtNasc'] = $this->input->post('dtNasc');
                        $data['foto'] = $this->input->post('foto');
                        $data['cidade'] = ucwords($this->input->post('cidade'));
                        $data['estado'] = ucwords($this->input->post('estado'));
                        $data['bairro'] = ucwords($this->input->post('bairro'));
                        $data['endereco'] = ucwords($this->input->post('endereco'));
                        $data['telefone'] = $this->input->post('telefone');
                        $data['cep'] = $this->input->post('cep');
                        $data['celular'] = $this->input->post('celular');
                        $data['dtCriacao'] = $this->input->post('dtCriacao');
                        $data['dtAtualizaçao'] = $this->input->post('dtAtualizaçao');
	 
                        
                        
	 		/* Carrega o modelo */
			$this->load->model('usuario_model');

			/* Executa a função atualizar do modelo passando como parâmetro os dados obtidos do formulário */
			if ($this->usuario_model->atualizar($data)) {
				/* Caso sucesso ao atualizar, recarrega a página principal */
				redirect('usuario');
			} else {
				/* Senão exibe a mensagem de erro */
				log_message('error', 'Erro ao atualizar o usuario.');
			}
		}
	}

	function deletar($id) {

		/* Carrega o modelo */
		$this->load->model('usuario_model');

		/* Executa a função deletar do modelo passando como parâmetro o id da pessoa */
		if ($this->usuario_model->deletar($id)) {
			/* Caso sucesso ao atualizar, recarrega a página principal */
			redirect('usuario');
		} else {
			/* Senão exibe a mensagem de erro */
			log_message('error', 'Erro ao deletar a pessoa.');
		}
	}
}
 
/* End of file pessoas.php */
/* Location: ./application/controllers/pessoas.php */

?>