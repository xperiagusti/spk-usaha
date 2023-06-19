<?php
defined('BASEPATH') OR exit('No direct script allowed');
class Nilai_2 extends MY_Controller{

	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
			$url=base_url('loginadmin');
			redirect($url);
		};
		$this->load->model('nilai_m_2');
	}

	public function index(){
		
		$data['parameter'] = $this->nilai_m_2->get_parameter();
		$data['kriteria'] = $this->nilai_m_2->get_kriteria();
		$data['alternatif'] = $this->nilai_m_2->get_alternatif();
        $data['data_alternatif'] = $this->nilai_m_2->get_data_alternatif();
		$y['title'] = 'Nilai2';
		$this->load->view('backend/layout/header',$y);
		$this->load->view('backend/layout/topbar');
		$this->load->view('backend/layout/sidebar');
		$this->load->view('backend/penilaian/nilai_2',$data);
		$this->load->view('backend/layout/footer');
	}

			
			
    //CREATE
	function create(){
		$alternatif = $this->input->post('alternatif',TRUE);
		$parameter = $this->input->post('parameter',TRUE);
		$this->db->trans_start();
		$this->nilai_m_2->create_alternatif($alternatif,$parameter);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
		$this->flashmsg('Gagal menambah data', 'danger');
		redirect('nilai_2');
		} else {
		$this->flashmsg('Sukses menambah data', 'success');
		redirect('nilai_2');
		}
	}

	function get_parameter_by_alternatif(){
		$alternatif_kode=$this->input->post('alternatif_kode');
    	$data=$this->nilai_m_2->get_parameter_by_alternatif($alternatif_kode)->result();
    	foreach ($data as $result) {
    		$value[] = (float) $result->parameter_id;
    	}
    	echo json_encode($value);
	}

	//UPDATE
	function update(){
		$id = $this->input->post('edit_id',TRUE);
		$alternatif = $this->input->post('alternatif_edit',TRUE);
		$parameter = $this->input->post('parameter_edit',TRUE);
		$this->db->trans_start();
		$this->nilai_m_2->update_alternatif($id,$alternatif,$parameter);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
		$this->flashmsg('Gagal mengupdate data', 'danger');
		redirect('nilai_2');
		} else {
		$this->flashmsg('Sukses mengupdate data', 'success');
		redirect('nilai_2');
		}
	}

	// DELETE
	function delete(){
		$id = $this->input->post('delete_id',TRUE);
		$this->db->trans_start();
		$this->nilai_m_2->delete_alternatif($id);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
		$this->flashmsg('Gagal menghapus data', 'danger');
		redirect('nilai_2');
		} else {
		$this->flashmsg('Sukses menghapus data', 'success');
		redirect('nilai_2');
		}
	
	}

	

}
?>