<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	var $API="";
	function __construct()
	{
		parent::__construct();
		$this->API="http://localhost:8080/latihan/rest_ci/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['datakontak']=json_decode($this->curl->simple_get($this->API.'/kontak'));
		$this->load->view('kontak/list.php',$data);
	}
	function create()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id'	=>$this->input->post('id'),
				'nama'	=>$this->input->post('nama'),
				'jk'	=>$this->input->post('jk'),
				'nomor'	=>$this->input->post('nomor'),
			'alamat'	=>$this->input->post('alamat'));
			$insert=$this->curl->simple_post($this->API.'/kontak',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($insert)
			{
				$this->session->set_flashdata('hasil', 'insert data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'Insert data gagal');
			}
			redirect('kontak');
		}
		else
		{
			$this->load->view('kontak/create');
		}
	}
	function edit()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id'	=>$this->input->post('id'),
				'nama'	=>$this->input->post('nama'),
				'jk'	=>$this->input->post('jk'),
				'nomor'	=>$this->input->post('nomor'),
				'alamat'	=>$this->input->post('alamat'));
			$update=$this->curl->simple_put($this->API.'/kontak',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($update)
			{
				$this->session->set_flashdata('hasil', 'update data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'update data gagal');
			}
			redirect('kontak');
		}
		else
		{
			$params=array('id'=> $this->uri->segment(3));
			$data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak',$params));
			$this->load->view('kontak/edit',$data);
		}
	}
	function delete($id)
	{
		if(empty($id))
		{
			
			redirect('kontak');
		}
		else
		{
			$delete = $this->curl->simple_delete($this->API.'/kontak',array('id'=>$id),array(CURLOPT_BUFFERSIZE => 10));
			if ($delete)
			{
				$this->session->set_flashdata('hasil', 'delete data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'delete data gagal');
			}
			redirect('kontak');
		}
	}

}

/* End of file kontak.php */
/* Location: ./application/controllers/kontak.php */?>