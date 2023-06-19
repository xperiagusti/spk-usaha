<?php 

class Kriteria_m extends MY_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name']   = 'kriteria';
        $this->data['primary_key']  = 'kriteria_kode';
    }

    function GenerateId() {
        $query = $this->db->select('kriteria_kode')
                          ->from('kriteria')
                          ->get();
        $row = $query->last_row();
        if($row){
            $idPostfix = (int)substr($row->kriteria_kode,1)+1;
            $nextId = 'B'.STR_PAD((string)$idPostfix,1,"0",STR_PAD_LEFT);
        }
        else{$nextId = 'B1';} // For the first time
        return $nextId;
    }
}

