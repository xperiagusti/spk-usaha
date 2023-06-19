<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Alternatif2 extends MY_Controller{



	function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
			$url=base_url('loginadmin');
			redirect($url);
		};
		$this->load->model('alternatif2_m');
	}

	public function index(){

		$this->data['alternatif_grab'] = $this->alternatif2_m->get();
		$y['title'] = 'Alternatif2';
		$this->load->view('backend/layout/header',$y);
		$this->load->view('backend/layout/topbar');
		$this->load->view('backend/layout/sidebar');
		$this->load->view('backend/alternatif/alternatif2',$this->data);
		$this->load->view('backend/layout/footer');
	}

	public function uploaddata()
    {
		// $alternatif_kode =  $this->alternatif2_m->GenerateId();
		$alternatif_gambar =  "Default.jpg";

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $dataalternatif = array(
							'alternatif_kode' => $row->getCellAtIndex(0),
                            'alternatif_usaha'  => $row->getCellAtIndex(1),
                            'alternatif_modal'  => $row->getCellAtIndex(2),
                            'alternatif_omset'    => $row->getCellAtIndex(3),
                            'alternatif_laba'       => $row->getCellAtIndex(4),
                            'alternatif_pesaing'     => $row->getCellAtIndex(5),
							'alternatif_pekerja'       => $row->getCellAtIndex(6),
							'alternatif_gambar' => $alternatif_gambar

                        );
						$alternatif_kode++;
                        $this->alternatif2_m->import_data($dataalternatif);
                    }
                    $numRow++;
					
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->flashmsg('Data berhasil diimport', 'success');
                redirect('alternatif2');
            }
        } else {
			$this->flashmsg('Import gagal karena anda tidak memilih data', 'danger');
			redirect('alternatif2');
            // echo "Error :" . $this->upload->display_errors();
        };
    }

	// public function edit(){

	// 	if(isset($_POST['edit_alternatif'])){
	// 		$alternatif_kode = $this->post('kode');
	// 		$alternatif_usaha = $this->post('jenis_usaha');
	// 		$alternatif_modal = $this->post('modal');
	// 		$alternatif_pekerja = $this->post('pekerja');
	// 		$alternatif_omset = $this->post('omset');
	// 		$alternatif_laba = $this->post('laba');
	// 		$alternatif_pesaing = $this->post('jumlah_pesaing');

	// 		$this->db->trans_start();
	// 		$update = $this->alternatif2_m->update($alternatif_kode,['alternatif_usaha' => $alternatif_usaha, 'alternatif_modal' => $alternatif_modal,
	// 		'alternatif_pekerja' => $alternatif_pekerja, 'alternatif_omset' => $alternatif_omset, 'alternatif_laba' => $alternatif_laba, 'alternatif_pesaing' => $alternatif_pesaing]);
	// 		$this->db->trans_complete();
	// 		if ($this->db->trans_status() === FALSE) {
	// 			$this->flashmsg('Gagal merubah data', 'danger');
	// 			redirect('alternatif2');
	// 		} else {
	// 			$this->flashmsg('Sukses merubah data', 'success');
	// 			redirect('alternatif2');
	// 		}
	// 	} 

	// }

	public function edit()
	{

		if (isset($_POST['edit_alternatif']))
		 {
			$alternatif_kode = $this->post('kode');
			$alternatif_usaha = $this->post('jenis_usaha');
			$alternatif_modal = $this->post('modal');
			$alternatif_omset = $this->post('omset');
			$alternatif_laba = $this->post('laba');
			$alternatif_pesaing = $this->post('jumlah_pesaing');
			$alternatif_pekerja = $this->post('pekerja');
			$alternatif_deskripsi = $this->post('deskripsi');
			$this->db->trans_start();
				if (!empty($_FILES['alternatif_gambar']['name']))
					{
						$alternatif_gambar = $this->post('alternatif_gambar');
						$alternatif_gambar = $this->_uploadImage();
						$update = $this->alternatif2_m->update($alternatif_kode,['alternatif_usaha' => $alternatif_usaha, 'alternatif_modal' => $alternatif_modal,
						 'alternatif_omset' => $alternatif_omset, 'alternatif_laba' => $alternatif_laba,
						'alternatif_pesaing' => $alternatif_pesaing,'alternatif_pekerja' => $alternatif_pekerja, 'alternatif_gambar' => $alternatif_gambar,'alternatif_deskripsi' => $alternatif_deskripsi]);
					}
				else
					{
						$update = $this->alternatif2_m->update($alternatif_kode,['alternatif_usaha' => $alternatif_usaha, 'alternatif_modal' => $alternatif_modal,
						 'alternatif_omset' => $alternatif_omset, 'alternatif_laba' => $alternatif_laba,
						'alternatif_pesaing' => $alternatif_pesaing,'alternatif_pekerja' => $alternatif_pekerja,'alternatif_deskripsi' => $alternatif_deskripsi]);
					}
			$this->db->trans_complete();
			
			if ($this->db->trans_status() === FALSE) {
				$this->flashmsg('Gagal merubah data', 'danger');
				redirect('alternatif2');
			} else {
				$this->flashmsg('Sukses merubah data', 'success');
				redirect('alternatif2');
			}			
		}
	}

	public function create(){

		$alternatif_kode =  $this->alternatif2_m->GenerateId();

		if(isset($_POST['save_alternatif'])){
			$alternatif_usaha = $this->post('jenis_usaha');
			$alternatif_modal = $this->post('modal');
			$alternatif_omset = $this->post('omset');
			$alternatif_laba = $this->post('laba');
			$alternatif_pesaing = $this->post('jumlah_pesaing');
			$alternatif_pekerja = $this->post('pekerja');
			$alternatif_gambar = $this->post('alternatif_gambar');
			$alternatif_gambar = $this->_uploadImage();
			$alternatif_deskripsi = $this->post('deskripsi');

			$this->db->trans_start();
			$insert = $this->alternatif2_m->insert(['alternatif_kode' => $alternatif_kode, 'alternatif_usaha' => $alternatif_usaha, 'alternatif_modal' => $alternatif_modal,
			 'alternatif_omset' => $alternatif_omset, 'alternatif_laba' => $alternatif_laba, 'alternatif_pesaing' => $alternatif_pesaing, 'alternatif_pekerja' => $alternatif_pekerja,
			'alternatif_gambar' => $alternatif_gambar, 'alternatif_deskripsi' => $alternatif_deskripsi ]);
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE) {
				$this->flashmsg('Gagal menambah data', 'danger');
				redirect('alternatif2');
			} else {
				$this->flashmsg('Sukses menambah data', 'success');
				redirect('alternatif2');
			}
		} 

	}

	public function delete(){

		if(isset($_POST['delete_alternatif'])){
			$alternatif_kode = $this->post('kode');

			$this->db->trans_start();
			$delete = $this->alternatif2_m->delete($alternatif_kode);
			$this->db->trans_complete();
			if ($this->db->trans_status() === FALSE) {
				$this->flashmsg('Gagal menghapus data', 'danger');
				redirect('alternatif2');
			} else {
				$this->flashmsg('Sukses menghapus data', 'success');
				redirect('alternatif2');
			}
		} 

	}

	public function _uploadImage()
	{

		$config['upload_path']    = FCPATH . './uploads/alternatif/';
		$config['allowed_types']  = 'gif|jpg|png|jpeg';
		$config['overwrite']      = TRUE;
		// $config['max_size']       = 1024;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('alternatif_gambar')) {
			$gbr = $this->upload->data();
			$config['image_library'] = 'gd2';
			$config['source_image'] = './uploads/alternatif/' . $gbr['file_name'];
			// $config['maintain_ratio'] = TRUE;
			// $config['quality'] = "100 %";
			// $config['width'] = 1280;
			// $config['height']   = 720; 
			$config['new_image'] = './uploads/alternatif/' . $gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			return $this->upload->data("file_name");
		}
		return "Default.jpg";
	}

}
?>