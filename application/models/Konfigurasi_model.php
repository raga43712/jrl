<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	// Listing, mengambil data
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('konfigurasi');
		$this->db->order_by('id_konfigurasi', 'DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function ambil()
	{
		$this->db->select('*');
		$this->db->from('konfigurasi');
		$this->db->where('id_konfigurasi', '1');
		$this->db->order_by('id_konfigurasi', 'DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	// Detail
	public function detail($id_konfigurasi)
	{
		$this->db->select('*');
		$this->db->from('konfigurasi');
		$this->db->where('id_konfigurasi', $id_konfigurasi);
		$this->db->order_by('id_konfigurasi', 'DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('konfigurasi', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_konfigurasi', $data['id_konfigurasi']);
		$this->db->update('konfigurasi', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_konfigurasi', $data['id_konfigurasi']);
		$this->db->delete('konfigurasi', $data);
	}

	public function cekMenu($group, $url)
	{


		$this->db->where('GROUP_USER', $group);
		$this->db->where('URL', $url);
		$this->db->where('FLAG_ACTIVE', 'Y');
		$query = $this->db->get('m_treeacc');
		if ($query->num_rows() > 0) {

			return true;
		} else {
			// redirect('login');
			return false;
		}
	}
}
