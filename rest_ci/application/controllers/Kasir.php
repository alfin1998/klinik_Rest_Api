<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kasir extends REST_Controller {

	function __construct($config='rest'){
		parent::__construct($config);
		$this->load->database();
	}

	function index_get(){
		$id_kasir = $this->get('id_kasir');
		if($id_kasir ==''){
			$klinik = $this->db->get('kasir')->result();
		}else{
			$this->db->where('id_kasir', $id_kasir);
			$klinik = $this->db->get('kasir')->result();
		}
		$this->response($klinik, 200);
	}
	function index_post(){
		$data = array(
			'id_kasir'	=> $this->post('id_kasir'),
			'nama'		=> $this->post('nama'),
			'alamat'	=> $this->post('alamat'),
			'notelp'	=> $this->post('notelp'),
			);
		$insert = $this->db->insert('kasir', $data);
		if ($insert){
			$this->response(array('status'=>'fail',502));
		}
	}
	function index_put(){
		$id_kasir = $this->put('id_kasir');
		$data = array(
			'nama'		=> $this->put('nama'),
			'alamat'	=> $this->put('alamat'),
			'notelp'	=> $this->put('notelp'),
			);
		$this->db->where('id_kasir',$id_kasir);
		$update = $this->db->update('kasir', $data);
		if ($update){
			$this->response($data, 200);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}
	function index_delete(){
		$id_kasir = $this->delete('id_kasir');
		$this->db->where('id_kasir', $id_kasir);
		$delete = $this->db->delete('kasir');
		if ($delete){
			$this->response(array('status'=>'success'), 201);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}

}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */