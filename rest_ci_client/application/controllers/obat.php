<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class obat extends CI_Controller {
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
		$data['dataobat']=json_decode($this->curl->simple_get($this->API.'/obat'));
		$this->render['konten'] = $this->load->view('obat/list.php',$data,TRUE);
		$this->load->view('themlate.php',$this->render);
	}
	function create()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_obat'		=> $this->input->post('id_obat'),
				'nama'			=> $this->input->post('nama'),
				'stok'			=> $this->input->post('stok'),
				'harga'			=> $this->input->post('harga'),
				);
			$insert=$this->curl->simple_post($this->API.'/obat',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($insert)
			{
				$this->session->set_flashdata('hasil', 'insert data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'Insert data gagal');
			}
			redirect('obat');
		}
		else
		{
			$this->render['konten'] = $this->load->view('obat/create',array(),TRUE);
			$this->load->view('themlate.php',$this->render);
			
		}
	}
	function edit()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_obat'		=> $this->input->post('id_obat'),
				'nama'			=> $this->input->post('nama'),
				'stok'		=> $this->input->post('stok'),
				'harga'			=> $this->input->post('harga'),
				);
			//var_dump($data);
			$update=$this->curl->simple_put($this->API.'/obat',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($update)
			{
				$this->session->set_flashdata('hasil', 'update data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'update data gagal');
			}
			redirect('obat');
		}
		else
		{
			$params=array('id_obat'=> $this->uri->segment(3));
			$data['dataRuang']=json_decode($this->curl->simple_get($this->API.'/ruang'));
			$data['dataobat'] = json_decode($this->curl->simple_get($this->API.'/obat',$params));
			$this->render['konten'] = $this->load->view('obat/edit',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
		}
	}
	function delete($id_obat)
	{
		if(empty($id_obat))
		{
			
			redirect('obat');
		}
		else
		{
			$delete = $this->curl->simple_delete($this->API.'/obat',array('id_obat'=>$id_obat),array(CURLOPT_BUFFERSIZE => 10));
			if ($delete)
			{
				$this->session->set_flashdata('hasil', 'delete data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'delete data gagal');
			}
			redirect('obat');
		}
	}
}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */