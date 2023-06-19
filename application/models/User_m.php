<?php 

class User_m extends MY_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name']   = 'user';
        $this->data['primary_key']  = 'user_id';
    }

    function fetch_pass($session_id)
	{
	$fetch_pass=$this->db->query("SELECT * FROM user WHERE user_id= '$session_id'");
	$res=$fetch_pass->result();
	}
	function change_pass($session_id,$new_pass)
	{
	$update_pass=$this->db->query(" UPDATE user SET user_password = '$new_pass'  WHERE user_id = '$session_id'");
	}
}