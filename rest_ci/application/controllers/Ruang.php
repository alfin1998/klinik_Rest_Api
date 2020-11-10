<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class ruang extends REST_Controller {

	function __construct($config='rest'){
		parent::__construct($config);
		$this->load->database();
	}

	function index_get(){
		$id_ruang = $this->get('id_ruang');
		if($id_ruang ==''){
			$klinik = $this->db->get('ruang')->result();
		}else{
			$this->db->where('id_ruang', $id_ruang);
			$klinik = $this->db->get('ruang')->result();
		}
		$this->response($klinik, 200);
	}
	function index_post(){
		$data = array(
			'id_ruang'		=> $this->post('id_ruang'),
			'nama'			=> $this->post('nama'),	
			);
		$insert = $this->db->insert('ruang', $data);
		if ($insert){
			$this->response(array('status'=>'fail',502));
		}
	}
	function index_put(){
		$id_ruang = $this->put('id_ruang');
		$data = array(
			'id_ruang'		=> $this->put('id_ruang'),
			'nama'			=> $this->put('nama'),	
			);
		$this->db->where('id_ruang',$id_ruang);
		$update = $this->db->update('ruang', $data);
		if ($update){
			$this->response($data, 200);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}
	function index_delete(){
		$id_ruang = $this->delete('id_ruang');
		$this->db->where('id_ruang', $id_ruang);
		$delete = $this->db->delete('ruang');
		if ($delete){
			$this->response(array('status'=>'success'), 201);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}

}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */