<?php

class Barber_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------

      /** 
       * function SaveForm()
       *
       * insert form data
       * @param $form_data - array
       * @return Bool - TRUE or FALSE
       */

	function SaveForm($form_data)
	{
		$this->db->insert('barber', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

	public function get_shops(){
    // $query = $this->db->query("SELECT * FROM shop_new");
	$this->db->limit(3);
    $query = $this->db->get('shop');
    return $query->result();
}

	public function get_styles(){
    // $query = $this->db->query("SELECT * FROM style_new");
	$this->db->limit(3);
    $query = $this->db->get('style');
    return $query->result();
}
}
?>