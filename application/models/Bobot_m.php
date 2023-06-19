<?php 

class Bobot_m extends MY_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name']   = 'bobot';
        $this->data['primary_key']  = 'id';
    }

    // public function getBobot(){
	// 	$this->db->order_by("id", "desc");
	// 	$query = $this->db->get('bobot', 3);
	// 	return $query->result_array();
	// }
}