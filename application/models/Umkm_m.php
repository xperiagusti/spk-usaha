<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name']   = 'umkm';
        $this->data['primary_key']  = 'id';
    }
  


    public function import_data($dataumkm)
    {
        $jumlah = count($dataumkm);
        if ($jumlah > 0) {
            $this->db->replace('umkm', $dataumkm);
        }
    }

    public function getDataUMKM()
    {
        return $this->db->get('umkm')->result_array();
    }
}
