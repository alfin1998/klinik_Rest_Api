<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class pasien extends REST_Controller {

	function __construct($config='rest'){
		parent::__construct($config);
		$this->load->database();
	}

	function index_get(){
		$id_pasien = $this->get('id_pasien');
		if($id_pasien ==''){
			$klinik = $this->db->get('pasien')->result();
		}else{
			$this->db->where('id_pasien', $id_pasien);
			$klinik = $this->db->get('pasien')->result();
		}
		$this->response($klinik, 200);
	}
	function index_post(){
		$data = array(
			'id_pasien'		=> $this->post('id_pasien'),
			'nama'			=> $this->post('nama'),
			'alamat'		=> $this->post('alamat'),
			'umur'			=> $this->post('umur'),
			'jk'			=> $this->post('jk'),
			'notelp'		=> $this->post('notelp'),	
			);
		$insert = $this->db->insert('pasien', $data);
		if ($insert){
			$this->response(array('status'=>'fail',502));
		}
	}
	function index_put(){
		$id_pasien = $this->put('id_pasien');
		$data = array(
			'id_pasien'		=> $this->put('id_pasien'),
			'nama'			=> $this->put('nama'),
			'alamat'		=> $this->put('alamat'),
			'umur'			=> $this->put('umur'),
			'jk'			=> $this->put('jk'),
			'notelp'		=> $this->put('notelp'),	
			);
		$this->db->where('id_pasien',$id_pasien);
		$update = $this->db->update('pasien', $data);
		if ($update){
			$this->response($data, 200);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}
	function index_delete(){
		$id_pasien = $this->delete('id_pasien');
		$this->db->where('id_pasien', $id_pasien);
		$delete = $this->db->delete('pasien');
		if ($delete){
			$this->response(array('status'=>'success'), 201);
		}else{
			$this->response(array('status'=>'fail', 502));
		}
	}

}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */