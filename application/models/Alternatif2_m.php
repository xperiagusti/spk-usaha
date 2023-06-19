<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif2_m extends MY_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name']   = 'alternatif2';
        $this->data['primary_key']  = 'alternatif_kode';
    }


    function GenerateId() {
        $query = $this->db->select('alternatif_kode')
                          ->from('alternatif2')
                          ->get();
        $row = $query->last_row();
        if($row){
            $idPostfix = (int)substr($row->alternatif_kode,1)+1;
            $nextId = 'A'.STR_PAD((string)$idPostfix,1,"0",STR_PAD_LEFT);
        }
        else{$nextId = 'A1';} // For the first time
        return $nextId;
    }

    public function import_data($dataalternatif)
    {
        $jumlah = count($dataalternatif);
        if ($jumlah > 0) {
            $this->db->replace('alternatif2', $dataalternatif);
        }
    }



}