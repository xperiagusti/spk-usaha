<?php
defined('BASEPATH') OR exit('No direct script allowed');
class Konten extends MY_Controller{

	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
			$url=base_url('loginadmin');
			redirect($url);
		};
		$this->load->model('konten_m');
        $this->load->model('alternatif2_m');
	}

	public function index(){
		$this->data['konten_grab'] = $this->konten_m->get();
        $this->data['alternatif_grab'] = $this->alternatif2_m->get();
		$y['title'] = 'Konten';
		$this->load->view('backend/layout/header',$y);
		$this->load->view('backend/layout/topbar');
		$this->load->view('backend/layout/sidebar');
		$this->load->view('backend/konten/konten',$this->data);
		$this->load->view('backend/layout/footer');
	}

	public function edit(){

		if(isset($_POST['edit_konten'])){
			$konten_id = $this->post('id');
			$alternatif_kode = $this->post('kode');
            $konten_judul = $this->post('judul');
            $konten_url = $this->post('url');
			$konten_jenis = $this->post('jenis');


			$this->db->trans_start();
			$update = $this->konten_m->update($konten_id,['alternatif_kode' => $alternatif_kode, 'konten_judul' => $konten_judul,
            'konten_url' => $konten_url, 'konten_jenis' => $konten_jenis]);
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE) {
				$this->flashmsg('Gagal merubah data', 'danger');
				redirect('konten');
			} else {
				$this->flashmsg('Sukses merubah data', 'success');
				redirect('konten');
			}
		} 

	}

	public function create(){

	

		if(isset($_POST['save_konten'])){
			$alternatif_kode = $this->post('kode');
            $konten_judul = $this->post('judul');
            $konten_url = $this->post('url');
			$konten_jenis = $this->post('jenis');

			$this->db->trans_start();
			$insert = $this->konten_m->insert(['alternatif_kode' => $alternatif_kode, 'konten_judul' => $konten_judul,
            'konten_url' => $konten_url, 'konten_jenis' => $konten_jenis]);
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE) {
				$this->flashmsg('Gagal menambah data', 'danger');
				redirect('konten');
			} else {
				$this->flashmsg('Sukses menambah data', 'success');
				redirect('konten');
			}
		} 

	}

	public function delete(){

		if(isset($_POST['delete_konten'])){
			$konten_id = $this->post('id');

			$this->db->trans_start();
			$delete = $this->konten_m->delete($konten_id);
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE) {
				$this->flashmsg('Gagal menghapus data', 'danger');
				redirect('konten');
			} else {
				$this->flashmsg('Sukses menghapus data', 'success');
				redirect('konten');
			}
		} 

	}

}
?>