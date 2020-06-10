<?php 

class Query_model extends CI_Model {

	/**
	 * Model query  
	 *
	 * as consultas ao DB fica aqui.
	 */
    public function get_cartoes($id)
	{
        $this->db->where('usuario', $id);
		return $this->db->get('cartao')->result();   
	}

}