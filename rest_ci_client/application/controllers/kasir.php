<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kasir extends CI_Controller {
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost/klinik/rest_ci/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['datakasir']=json_decode($this->curl->simple_get($this->API.'/kasir'));
		$this->render['konten'] = $this->load->view('kasir/list.php',$data,TRUE);
		$this->load->view('themlate.php',$this->render);
	}
	function create()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'nama'	=> $this->input->post('nama'),
				'alamat'	=> $this->input->post('alamat'),
				'notelp'	=> $this->input->post('notelp'),
				);
			$insert=$this->curl->simple_post($this->API.'/kasir',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($insert)
			{
				$this->session->set_flashdata('hasil', 'insert data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'Insert data gagal');
			}
			redirect('kasir');
		}
		else
		{
			$this->render['konten'] = $this->load->view('kasir/create',array(),TRUE);
			$this->load->view('themlate.php',$this->render);
		}
	}
	function edit()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_kasir'	=> $this->input->post('id_kasir'),
				'nama'		=> $this->input->post('nama'),
				'alamat'	=> $this->input->post('alamat'),
				'notelp'	=> $this->input->post('notelp'),
				);
			$update=$this->curl->simple_put($this->API.'/kasir',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($update)
			{
				$this->session->set_flashdata('hasil', 'update data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'update data gagal');
			}
			redirect('kasir');
			
		}
		else
		{
			$params=array('id_kasir'=> $this->uri->segment(3));
			$data['datakasir'] = json_decode($this->curl->simple_get($this->API.'/kasir',$params));
			$this->render['konten'] = $this->load->view('kasir/edit',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
		}
	}
	function delete($id_kasir)
	{
		if(empty($id_kasir))
		{
			
			redirect('kasir');
		}
		else
		{
			$delete = $this->curl->simple_delete($this->API.'/kasir',array('id_kasir'=>$id_kasir),array(CURLOPT_BUFFERSIZE => 10));
			if ($delete)
			{
				$this->session->set_flashdata('hasil', 'delete data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'delete data gagal');
			}
			redirect('kasir');
		}
	}
}

/* End of file dokter.php */
/* Location: ./application/controllers/dokter.php */