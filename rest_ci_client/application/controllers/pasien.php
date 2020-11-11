<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien extends CI_Controller {
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
		$data['datapasien']=json_decode($this->curl->simple_get($this->API.'/pasien'));
		$this->render['konten'] = $this->load->view('pasien/list.php',$data,TRUE);
		$this->load->view('themlate.php',$this->render);
	}
	function create()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_pasien'		=> $this->input->post('id_pasien'),
				'nama'			=> $this->input->post('nama'),
				'alamat'		=> $this->input->post('alamat'),
				'umur'			=> $this->input->post('umur'),
				'jk'		=> $this->input->post('jk'),
				'notelp'			=> $this->input->post('notelp'),
				);
			$insert=$this->curl->simple_post($this->API.'/pasien',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($insert)
			{
				$this->session->set_flashdata('hasil', 'insert data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'Insert data gagal');
			}
			redirect('pasien');
		}
		else
		{
			$this->render['konten'] = $this->load->view('pasien/create',array(),TRUE);
			$this->load->view('themlate.php',$this->render);
			
		}
	}
	function edit()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_pasien'		=> $this->input->post('id_pasien'),
				'nama'			=> $this->input->post('nama'),
				'alamat'		=> $this->input->post('alamat'),
				'umur'			=> $this->input->post('umur'),
				'jk'		=> $this->input->post('jk'),
				'notelp'			=> $this->input->post('notelp'),
				'id_ruang'		=> $this->input->post('id_ruang'),);
			//var_dump($data);
			$update=$this->curl->simple_put($this->API.'/pasien',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($update)
			{
				$this->session->set_flashdata('hasil', 'update data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'update data gagal');
			}
			redirect('pasien');
		}
		else
		{
			$params=array('id_pasien'=> $this->uri->segment(3));
			$data['datapasien'] = json_decode($this->curl->simple_get($this->API.'/pasien',$params));
			$this->render['konten'] = $this->load->view('pasien/edit',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
		}
	}
	function delete($id_pasien)
	{
		if(empty($id_pasien))
		{
			
			redirect('pasien');
		}
		else
		{
			$delete = $this->curl->simple_delete($this->API.'/pasien',array('id_pasien'=>$id_pasien),array(CURLOPT_BUFFERSIZE => 10));
			if ($delete)
			{
				$this->session->set_flashdata('hasil', 'delete data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'delete data gagal');
			}
			redirect('pasien');
		}
	}
}

/* End of file pasien.php */
/* Location: ./application/controllers/pasien.php */