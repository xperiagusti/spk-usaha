<?php 

class Konten_m extends MY_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name']   = 'konten';
        $this->data['primary_key']  = 'konten_id';
    }

}

