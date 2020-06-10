<?php 

class Security_model extends CI_Model {

	/**
	 * Model de segurança  
	 *
	 * Aqui esta todas as funções de segurança como verifica login e criação de logs.
	 */
    public function verifica_login()
	{
		if( $this->session->userdata('logado') == false){
			redirect ('app');
		}	
		   
	}
	public function create_logs($data)
	{
		
		$log = array(
			'local' => $data['nome_pagina'],
			'tipo' => 'VISITA',
			'data' => date('d/m/Y H:i'),
			'ip' => $_SERVER['REMOTE_ADDR'],
			'usuario' => $this->session->nome,
			'logs' => $_SERVER['HTTP_USER_AGENT']);
			
		$this->db->insert('logs',$log);
		   
	}

	public function create_translog($logs)
	{
		
		$log = array(
			'local' => ucfirst($logs['local']),
			'tipo' => strtoupper($logs['tipo']),
			'data' => date('d/m/Y H:i'),
			'ip' => $_SERVER['REMOTE_ADDR'],
			'usuario' => $this->session->nome,
			'logs' => $_SERVER['HTTP_USER_AGENT']);
			
		$this->db->insert('logs',$log);
		   
	}
}