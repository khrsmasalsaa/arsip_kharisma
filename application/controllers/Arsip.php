<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arsip extends CI_Controller {

	
	public function index()
	{
		$this->load->view('tambah_arsip');
	}
}