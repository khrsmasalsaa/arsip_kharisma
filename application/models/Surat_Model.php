<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_model extends CI_Model {

    public function getData($dt = null)
    {
        if ($dt != null) {
            $this->db->where($dt);
            return $this->db->get('arsip');			
        } else {
            return $this->db->get('arsip');			
        }
    }

    public function cari($search)
	{
		$this->db->like('nomor_surat', $search, 'both'); 
		$this->db->or_like('kategori', $search, 'both');
		$this->db->or_like('judul', $search, 'both');
		return $this->db->get('arsip');			
	}
    
    public function insertData($data)
    {
        $this->db->insert('arsip', $data);
    }

    public function updateData($data, $dt)
	{
		$this->db->update('arsip', $data, $dt);		
	}

	public function deleteData($dt)
	{
		$this->db->delete('arsip', $w);
	}

}