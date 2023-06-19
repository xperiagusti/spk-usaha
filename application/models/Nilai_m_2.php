<?php 

class Nilai_m_2 extends MY_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name']   = 'nilai_2';
        $this->data['primary_key']  = 'nilai_id';
    }

    function get_parameter(){
		$query = $this->db->get('parameter');
		return $query;
	}

	function get_kriteria(){
		$query = $this->db->get('kriteria');
		return $query;
	}

	//GET PRODUCT BY PACKAGE ID
	function get_parameter_by_alternatif($alternatif_kode){
		$this->db->select('*');
		$this->db->from('parameter');
		$this->db->join('nilai_2', 'nilai_parameter_id=parameter_id');
		$this->db->join('alternatif2', 'alternatif_kode=nilai_alternatif_kode');
		$this->db->where('alternatif_kode',$alternatif_kode);
		$query = $this->db->get();
		return $query;
	}

    function get_data_alternatif(){
		$query = $this->db->get('alternatif2');
		return $query;
	}

	//READ
	function get_alternatif(){
		$this->db->select('alternatif2.*,COUNT(parameter_id) AS item_parameter');
		$this->db->from('alternatif2');
		$this->db->join('nilai_2', 'alternatif_kode=nilai_alternatif_kode');
		$this->db->join('parameter', 'nilai_parameter_id=parameter_id');
		$this->db->group_by('alternatif_kode');
		$query = $this->db->get();
		return $query;
	}

	// CREATE
	function create_alternatif($alternatif,$parameter){
		$this->db->trans_start();
			//INSERT TO PACKAGE
			// date_default_timezone_set("Asia/Bangkok");
			// $data  = array(
			// 	'package_name' => $package,
			// 	'package_created_at' => date('Y-m-d H:i:s') 
			// );
			// $this->db->insert('package', $data);
			//GET ID PACKAGE
			$result = array();
			    foreach($parameter AS $key => $val){
				     $result[] = array(
				      'nilai_alternatif_kode'  	=> $alternatif,
				      'nilai_parameter_id'  	=> $_POST['parameter'][$key]
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
			$this->db->insert_batch('nilai_2', $result);
		$this->db->trans_complete();
	}

	
	// UPDATE
	function update_alternatif($id,$alternatif,$parameter){
		$this->db->trans_start();
			//UPDATE TO PACKAGE
			// $data  = array(
			// 	'package_name' => $package
			// );
			// $this->db->where('package_id',$id);
			// $this->db->update('package', $data);
			
			//DELETE DETAIL PACKAGE
			$this->db->delete('nilai_2', array('nilai_alternatif_kode' => $id));

			$result = array();
			    foreach($parameter AS $key => $val){
				     $result[] = array(
				      'nilai_alternatif_kode'  	=> $id,
				      'nilai_parameter_id'  	=> $_POST['parameter_edit'][$key]
				     );
			    }      
			//MULTIPLE INSERT TO DETAIL TABLE
			$this->db->insert_batch('nilai_2', $result);
		$this->db->trans_complete();
	}

	// DELETE
	function delete_alternatif($id){
		$this->db->trans_start();
			$this->db->delete('nilai_2', array('nilai_alternatif_kode' => $id));
			
		$this->db->trans_complete();
	}
}