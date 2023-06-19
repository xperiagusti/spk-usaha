<?php
defined('BASEPATH') OR exit('No direct script allowed');
class Main extends MY_Controller{

	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
			$url=base_url('loginadmin');
			redirect($url);
		};
        $this->load->model('alternatif2_m');
        $this->load->model('hasil_rank_m');
        $this->load->model('user_m');
        $this->load->model('konten_m');
        $this->load->model('kriteria_m');
	}

	public function index(){
		
        $this->data['alternatif'] = $this->alternatif2_m->get_jumlah();
        $this->data['kriteria'] = $this->kriteria_m->get_jumlah();
        $this->data['konten'] = $this->konten_m->get_jumlah();
        $this->data['user'] = $this->user_m->get_jumlah();
        $this->data['rank'] = $this->hasil_rank_m->get_jumlah();
        $this->data['hasil_report']  = $this->db->query("SELECT * from hasil_rank INNER JOIN alternatif2 on hasil_rank.alternatif_kode=alternatif2.alternatif_kode order by hasil_rank.hr_value desc")->result();
       
		$y['title'] = 'Dashboard';
		$this->load->view('backend/layout/header',$y);
		$this->load->view('backend/layout/topbar');
		$this->load->view('backend/layout/sidebar');
		$this->load->view('backend/dashboard',$this->data);
		$this->load->view('backend/layout/footer');
	}

}
?>