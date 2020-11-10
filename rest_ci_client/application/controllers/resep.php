<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class resep extends CI_Controller {
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
		$data['dataresep']=json_decode($this->curl->simple_get($this->API.'/resep'));
		$this->render['konten'] = $this->load->view('resep/list.php',$data,TRUE);
		$this->load->view('themlate.php',$this->render);
	}
	function create()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_pasien'	=> $this->input->post('id_pasien'),
				'id_obat'	=> $this->input->post('id_obat'),
				'id_dokter'	=> $this->input->post('id_dokter'),
				'id_kasir'	=> $this->input->post('id_kasir'),
				'biaya'		=> $this->input->post('biaya'),
				);
			$insert = $this->curl->simple_post($this->API.'/resep',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($insert)
			{
				$this->session->set_flashdata('hasil', 'insert data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'Insert data gagal');
			}
			redirect('resep');
		}
		else
		{	
			$data['dataobat']=json_decode($this->curl->simple_get($this->API.'/obat'));
			$data['datakasir']=json_decode($this->curl->simple_get($this->API.'/kasir'));
			$data['datapasien']=json_decode($this->curl->simple_get($this->API.'/pasien'));
			$data['datadokter']=json_decode($this->curl->simple_get($this->API.'/dokter'));
			$data['dataRuang']=json_decode($this->curl->simple_get($this->API.'/ruang'));
			$this->render['konten'] = $this->load->view('resep/create',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
		}
	}
	function edit()
	{
		if(isset($_POST['submit']))
		{
			$data=array(
				'id_resep'	=> $this->input->post('id_resep'),
				'id_pasien'	=> $this->input->post('id_pasien'),
				'id_obat'	=> $this->input->post('id_obat'),
				'id_dokter'	=> $this->input->post('id_dokter'),
				'id_kasir'	=> $this->input->post('id_kasir'),
				'biaya'		=> $this->input->post('biaya'),
				);
			$update=$this->curl->simple_put($this->API.'/resep',$data,array(CURLOPT_BUFFERSIZE => 10));
			if ($update)
			{
				$this->session->set_flashdata('hasil', 'update data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'update data gagal');
			}
			redirect('resep');		
		}
		else
		{	
			$params=array('id_resep'=> $this->uri->segment(3));
			$data['dataobat']=json_decode($this->curl->simple_get($this->API.'/obat'));
			$data['datakasir']=json_decode($this->curl->simple_get($this->API.'/kasir'));
			$data['datapasien']=json_decode($this->curl->simple_get($this->API.'/pasien'));
			$data['datadokter']=json_decode($this->curl->simple_get($this->API.'/dokter'));
			$data['dataRuang']=json_decode($this->curl->simple_get($this->API.'/ruang'));
			$data['dataresep'] = json_decode($this->curl->simple_get($this->API.'/resep',$params));
			$this->render['konten'] = $this->load->view('resep/edit',$data,TRUE);
			$this->load->view('themlate.php',$this->render);
		}
	}
	function delete($id_resep)
	{
		if(empty($id_resep))
		{
			
			redirect('resep');
		}
		else
		{
			$delete = $this->curl->simple_delete($this->API.'/resep',array('id_resep'=>$id_resep),array(CURLOPT_BUFFERSIZE => 10));
			if ($delete)
			{
				$this->session->set_flashdata('hasil', 'delete data berhasil');
			}
			else
			{
				$this->session->set_flashdata('hasil', 'delete data gagal');
			}
			redirect('resep');
		}
	}
}

/* End of file dokter.php */
/* Location: ./application/controllers/dokter.php */