<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ruang extends CI_Controller {
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
		$data['dataruang']=json_decode($this->curl->simple_get($this->API.'/ruang'));
		$this->render['konten'] = $this->load->view('ruang/list.php',$data,TRUE);
		$this->load->view('themlate.php',$this->render);
	}
	function create()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_ruang'		=> $this->input->post('id_ruang'),
				'nama'			=> $this->input->post('nama'),
				);
			$insert=$this->curl->simple_post($this->API.'/ruang',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($insert)
			{
				$this->session->set_flashdata('hasil', 'insert data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'Insert data gagal');
			}
			redirect('ruang');
		}
		else
		{
			$data['dataRuang']=json_decode($this->curl->simple_get($this->API.'/ruang'));
			$this->render['konten'] = $this->load->view('ruang/create',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
			
		}
	}
	function edit()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_ruang'		=> $this->input->post('id_ruang'),
				'nama'			=> $this->input->post('nama'),
				);
			//var_dump($data);
			$update=$this->curl->simple_put($this->API.'/ruang',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($update)
			{
				$this->session->set_flashdata('hasil', 'update data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'update data gagal');
			}
			redirect('ruang');
		}
		else
		{
			$params=array('id_ruang'=> $this->uri->segment(3));
			$data['dataRuang']=json_decode($this->curl->simple_get($this->API.'/ruang'));
			$data['dataruang'] = json_decode($this->curl->simple_get($this->API.'/ruang',$params));
			$this->render['konten'] = $this->load->view('ruang/edit',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
		}
	}
	function delete($id_ruang)
	{
		if(empty($id_ruang))
		{
			
			redirect('ruang');
		}
		else
		{
			$delete = $this->curl->simple_delete($this->API.'/ruang',array('id_ruang'=>$id_ruang),array(CURLOPT_BUFFERSIZE => 10));
			if ($delete)
			{
				$this->session->set_flashdata('hasil', 'delete data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'delete data gagal');
			}
			redirect('ruang');
		}
	}
}

/* End of file ruang.php */
/* Location: ./application/controllers/ruang.php */