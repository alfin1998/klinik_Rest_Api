<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost:8080/klinik/rest_ci/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['datadokter']=json_decode($this->curl->simple_get($this->API.'/dokter'));
		$this->render['konten'] = $this->load->view('dokter/list.php',$data,TRUE);
		$this->load->view('themlate.php',$this->render);
	}
	function create()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_dokter'		=> $this->input->post('id_dokter'),
				'nama'			=> $this->input->post('nama'),
				'spesialis'		=> $this->input->post('spesialis'),
				'jk'			=> $this->input->post('jk'),
				'notelp'		=> $this->input->post('notelp'),
				'tarif'			=> $this->input->post('tarif'),
				'id_ruang'		=> $this->input->post('id_ruang'));
			$insert=$this->curl->simple_post($this->API.'/dokter',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($insert)
			{
				$this->session->set_flashdata('hasil', 'insert data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'Insert data gagal');
			}
			redirect('dokter');
		}
		else
		{
			$data['dataRuang']=json_decode($this->curl->simple_get($this->API.'/ruang'));
			$this->render['konten'] = $this->load->view('dokter/create',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
			
		}
	}
	function edit()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_dokter'		=> $this->input->post('id_dokter'),
				'nama'			=> $this->input->post('nama'),
				'spesialis'		=> $this->input->post('spesialis'),
				'jk'			=> $this->input->post('jk'),
				'notelp'		=> $this->input->post('notelp'),
				'tarif'			=> $this->input->post('tarif'),
				'id_ruang'		=> $this->input->post('id_ruang'),);
			//var_dump($data);
			$update=$this->curl->simple_put($this->API.'/dokter',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($update)
			{
				$this->session->set_flashdata('hasil', 'update data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'update data gagal');
			}
			redirect('dokter');
		}
		else
		{
			$params=array('id_dokter'=> $this->uri->segment(3));
			$data['dataRuang']=json_decode($this->curl->simple_get($this->API.'/ruang'));
			$data['datadokter'] = json_decode($this->curl->simple_get($this->API.'/dokter',$params));
			$this->render['konten'] = $this->load->view('dokter/edit',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
		}
	}
	function delete($id_dokter)
	{
		if(empty($id_dokter))
		{
			
			redirect('dokter');
		}
		else
		{
			$delete = $this->curl->simple_delete($this->API.'/dokter',array('id_dokter'=>$id_dokter),array(CURLOPT_BUFFERSIZE => 10));
			if ($delete)
			{
				$this->session->set_flashdata('hasil', 'delete data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'delete data gagal');
			}
			redirect('dokter');
		}
	}
}

/* End of file dokter.php */
/* Location: ./application/controllers/dokter.php */