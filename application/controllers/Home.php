<?php
defined('BASEPATH') OR exit('No direct script allowed');
class Home extends MY_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('alternatif2_m');
        $this->load->model('hasil_rank_m');
        $this->load->model('konten_m');
        $this->load->model('kriteria_m');
        $this->load->model('parameter_m');
	}

	public function index(){
		
       
        $this->data['alternatif'] = $this->alternatif2_m->get_jumlah();
        $this->data['kriteria'] = $this->kriteria_m->get_jumlah();
        $this->data['parameter'] = $this->parameter_m->get_jumlah();
        $this->data['rank']  = $this->db->query("SELECT * from hasil_rank INNER JOIN alternatif2 on hasil_rank.alternatif_kode=alternatif2.alternatif_kode order by hasil_rank.hr_value desc")->result();
        $this->data['rank_con']  = $this->db->query("SELECT * from hasil_rank INNER JOIN alternatif2 on hasil_rank.alternatif_kode=alternatif2.alternatif_kode  order by hasil_rank.hr_value desc LIMIT 3")->result();
       
		$this->load->view('user/header');
		$this->load->view('user/index',$this->data);
		$this->load->view('user/footer');
	}

    public function detail($id){
		

        $this->data['detail']  = $this->db->query("SELECT * from alternatif2 where alternatif_kode='$id' ")->row_array();
        $this->data['artikel']  = $this->db->query("SELECT * from konten where alternatif_kode='$id' and konten_jenis='artikel'")->result();
        $this->data['video']  = $this->db->query("SELECT * from konten where alternatif_kode='$id' and konten_jenis='video'")->result();

		$this->load->view('user/header');
		$this->load->view('user/details',$this->data);
		$this->load->view('user/footer');
	}

    

}
?>