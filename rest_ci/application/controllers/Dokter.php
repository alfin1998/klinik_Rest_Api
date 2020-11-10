<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Dokter extends REST_Controller {

	function __construct($config='rest'){
		parent::__construct($config);
		$this->load->database();
	}

	function index_get(){
		$id_dokter = $this->get('id_dokter');
		if($id_dokter ==''){
			$klinik = $this->db->get('dokter')->result();
		}else{
			$this->db->where('id_dokter', $id_dokter);
			$klinik = $this->db->get('dokter')->result();
		}
		$this->response($klinik, 200);
	}
	function index_post(){
		$data = array(
			'id_dokter'		=> $this->post('id_dokter'),
			'nama'			=> $this->post('nama'),
			'spesialis'		=> $this->post('spesialis'),
			'jk'			=> $this->post('jk'),
			'notelp'		=> $this->post('notelp'),
			'tarif'			=> $this->post('tarif'),
			'id_ruang'		=> $this->post('id_ruang')
			);
		$insert = $this->db->insert('dokter', $data);
		if ($insert){
			$this->response(array('status'=>'fail',502));
		}
	}
	function index_put(){
		$id_dokter = $this->put('id_dokter');
		$data = array(
			'nama'			=> $this->put('nama'),
			'spesialis'		=> $this->put('spesialis'),
			'jk'			=> $this->put('jk'),
			'notelp'		=> $this->put('notelp'),
			'tarif'			=> $this->put('tarif'),
			'id_ruang'		=> $this->put('id_ruang'));
		$this->db->where('id_dokter',$id_dokter);
		$update = $this->db->update('dokter', $data);
		if ($update){
			$this->response($data, 200);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}
	function index_delete(){
		$id_dokter = $this->delete('id_dokter');
		$this->db->where('id_dokter', $id_dokter);
		$delete = $this->db->delete('dokter');
		if ($delete){
			$this->response(array('status'=>'success'), 201);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}

}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */