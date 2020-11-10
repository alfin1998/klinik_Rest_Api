<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Resep extends REST_Controller {

	function __construct($config='rest'){
		parent::__construct($config);
		$this->load->database();
	}

	function index_get(){
		$id_resep = $this->get('id_resep');
		if($id_resep ==''){
			$klinik = $this->db->get('resep')->result();
		}else{
			$this->db->where('id_resep', $id_resep);
			$klinik = $this->db->get('resep')->result();
		}
		$this->response($klinik, 200);
	}
	function index_post(){
		$data = array(
			'id_pasien'	=> $this->post('id_pasien'),
			'id_obat'	=> $this->post('id_obat'),
			'id_dokter'	=> $this->post('id_dokter'),
			'id_kasir'	=> $this->post('id_kasir'),
			'biaya'	=> $this->post('biaya'),	
			);
		$insert = $this->db->insert('resep', $data);
		if ($insert){
			$this->response(array('status'=>'fail',502));
		}
	}
	function index_put(){
		$id_resep = $this->put('id_resep');
		$data = array(
			'id_pasien'	=> $this->put('id_pasien'),
			'id_obat'	=> $this->put('id_obat'),
			'id_dokter'	=> $this->put('id_dokter'),
			'id_kasir'	=> $this->put('id_kasir'),
			'biaya'	=> $this->put('biaya'),
			);
		$this->db->where('id_resep',$id_resep);
		$update = $this->db->update('resep', $data);
		if ($update){
			$this->response($data, 200);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}
	function index_delete(){
		$id_resep = $this->delete('id_resep');
		$this->db->where('id_resep', $id_resep);
		$delete = $this->db->delete('resep');
		if ($delete){
			$this->response(array('status'=>'success'), 201);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}

}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */