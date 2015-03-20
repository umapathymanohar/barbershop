<?php

class Dashboard_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

public function get_shops(){
    // $query = $this->db->query("SELECT * FROM shop_new");
    $this->db->order_by("id", "desc"); 
    $this->db->limit(5);
    $query = $this->db->get('shop');
    return $query->result();
}
public function get_barber(){
    $this->db->order_by("id", "desc"); 
    // $query = $this->db->query("SELECT * FROM shop_new");
    $this->db->limit(5);
    $query = $this->db->get('barber');
    return $query->result();
}


public function get_styles(){
    // $query = $this->db->query("SELECT * FROM shop_new");
    $this->db->order_by("style_id", "desc"); 
    $this->db->limit(5);
    $query = $this->db->get('style');
    return $query->result();
}
public function get_appointments(){
    // $query = $this->db->query("SELECT * FROM shop_new");
    $this->db->limit(5);
    $this->db->select('*');
    $this->db->from('appointment');
    $this->db->join('style', 'appointment.style_id = style.style_id');
    $query = $this->db->get();
    return $query->result();
}

}
?>