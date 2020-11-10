<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class obat extends REST_Controller {

	function __construct($config='rest'){
		parent::__construct($config);
		$this->load->database();
	}

	function index_get(){
		$id_obat = $this->get('id_obat');
		if($id_obat ==''){
			$klinik = $this->db->get('obat')->result();
		}else{
			$this->db->where('id_obat', $id_obat);
			$klinik = $this->db->get('obat')->result();
		}
		$this->response($klinik, 200);
	}
	function index_post(){
		$data = array(
			'id_obat'	=> $this->post('id_obat'),
			'nama'	=> $this->post('nama'),
			'stok'	=> $this->post('stok'),
			'harga'	=> $this->post('harga'),	
			);
		$insert = $this->db->insert('obat', $data);
		if ($insert){
			$this->response(array('status'=>'fail',502));
		}
	}
	function index_put(){
		$id_obat = $this->put('id_obat');
		$data = array(
			'id_obat'	=> $this->put('id_obat'),
			'nama'		=> $this->put('nama'),
			'stok'		=> $this->put('stok'),
			'harga'		=> $this->put('harga'),	
			);
		$this->db->where('id_obat',$id_obat);
		$update = $this->db->update('obat', $data);
		if ($update){
			$this->response($data, 200);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}
	function index_delete(){
		$id_obat = $this->delete('id_obat');
		$this->db->where('id_obat', $id_obat);
		$delete = $this->db->delete('obat');
		if ($delete){
			$this->response(array('status'=>'success'), 201);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}

}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */