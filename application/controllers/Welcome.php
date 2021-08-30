<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Surat_Model', 'sm');
	}

	public function index()
	{
		$key = $this->input->get('cari');
		if ($key == null) {
			$data['arsip'] = $this->sm->getData(null)->result();
		} else {
			$data['arsip'] = $this->sm->cari($key)->result();
		}
		$data['view_name'] = "tabel";
		$this->load->view('template', $data);
	}

	public function tambahData()
	{
		$config['upload_path'] = './assets/uploads/surat/';
		$config['allowed_types'] = 'pdf';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
		} else {
			$data = array(
				'nomor_surat' => $this->input->post('nomor_surat'),
				'kategori' => $this->input->post('kategori'),
				'judul' => $this->input->post('judul'),
				'berkas' => $this->upload->data('file_name'),
				'tgl_arsip' => date('Y-m-d H:i'),
			);
			$this->sm->insertData($data);
			$this->session->set_flashdata('msg', 'Data berhasil ditambahkan !');
			redirect('welcome', 'refresh');
		}
	}

	public function unggah()
	{
		$data['view_name'] = "tambah_arsip";
		$this->load->view('template', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$dt = array('id' => $id,);
		$data['arsip'] = $this->sm->getData($dt)->row();
		$data['view_name'] = "edit_data";
		$this->load->view('template', $data);
	}

	public function lihat()
	{
		$id = $this->uri->segment(3);
		$dt = array('id' => $id,);
		$data['lihat'] = $this->sm->getData($dt)->row();
		$data['arsip'] = $this->sm->getData($dt)->result();
		$data['view_name'] = "lihat_data";
		$this->load->view('template', $data);
	}

	public function hapusData()
	{
		$id = $this->uri->segment(3);
		$dt = array('id' => $id,);
		$this->sm->deleteData($dt);
		$this->session->set_flashdata('msg', 'Data berhasil dihapus !');
		redirect('welcome', 'refresh');
	}

	public function download($file)
	{
		force_download('assets/uploads/surat/' . $file, NULL);
	}


}