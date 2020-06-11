<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	/**
	 * Controller APP 
	 *
	 * Aqui controla todas as paginas do APP.
	 */
    function __construct() {
        parent::__construct();
        
        $this->load->model('Security_model','',TRUE);
        $this->load->model('Query_model','',TRUE);

	}	
	public function index()
	{
		$this->load->view('app/paginas/login');
    }
    public function logar()
	{
		$tagname = $this->input->post('tagname');
		$senha = md5($this->input->post('senha'));
		
		$this->db->where('tagname',$tagname);
		$this->db->where('senha',$senha);
		$data['usuario'] = $this->db->get('usuarios')->result();
		
		if(count($data['usuario']) == 1){
			$dados['nome'] = $data['usuario'][0]->nome;
            $dados['id'] = $data['usuario'][0]->id;
            $dados['saldo'] = $data['usuario'][0]->saldo;
            $dados['email'] = $data['usuario'][0]->email;
            $dados['tagname'] = $data['usuario'][0]->tagname;
            $dados['celular'] = $data['usuario'][0]->celular;
			$dados['logado'] = true;
            $this->session->set_userdata($dados);
            
			redirect('app/dashboard');
		}
		else{
			redirect('app');
		}
		
    }
    public function sair()
	{
		$this->session->sess_destroy();
		redirect('app');
	}
    public function criar_conta()
	{
        $data = $this->input->post();
        $data['senha'] = md5($this->input->post('senha'));
        
        if($this->db->insert('usuarios',$data)){
        
            $arr = array('msg' => 'Criado com sucesso');
                header('Content-Type: application/json');
                header('Status: 200');
            
            echo json_encode($arr);
		}
    }
    public function add_cartao()
	{
        $data = $this->input->post();
        $data["usuario"] = $this->session->id;
        
        if($this->db->insert('cartao',$data)){
        
            $arr = array('msg' => 'Criado com sucesso');
                header('Content-Type: application/json');
                header('Status: 200');
            
            echo json_encode($arr);
		}
    }
    public function add_dinheiro()
	{

        $user = $this->session->id;

        $query['saldo'] = $this->Query_model->get_saldo($user);

        $newdata = array(
            'saldo'  => ($query['saldo'][0]->saldo  + $this->input->post('saldo')),
        );

        $this->session->set_userdata($newdata);
        
        $this->db->where('id', $user);
        if($this->db->update('usuarios',$newdata)){
        
            $arr = array('msg' => 'Criado com sucesso');
                header('Content-Type: application/json');
                header('Status: 200');
            
            echo json_encode($arr);
		}
    }
    public function dashboard()
	{
        $user = $this->session->id;
        $this->Security_model->verifica_login();

        $query['cartoes'] = $this->Query_model->get_cartoes($user);

        $this->load->view('app/layout/header');
        $this->load->view('app/paginas/dashboard', $query);   
    }

    public function tagname()
	{
        $this->db->select('tagname');
        echo json_encode($this->db->get('usuarios')->result());
    }
}
