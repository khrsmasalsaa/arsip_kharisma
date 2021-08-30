<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Surat_Model', 'sm');
	}
	
	public function index()
	{
		$data['arsip'] = $this->sm->getData(null)->result();
		$data['view_name'] = "tentang";
		$this->load->view('template', $data);
	}
}