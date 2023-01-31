<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_menu extends CI_Model
{


	var $table = "m_treeacc";


	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//Listing
	public function listing()
	{
		// $sql = "select ID_TREE,GROUP_USER,m_treeacc.CHILD,PARENT,PUBLIC_CODE ,m_treeacc.DESCRIPTION as DESCRIPTION,m_treeacc.FLAG_ACTIVE,m_gcm.DESCRIPTION as NAMA from m_treeacc , m_gcm where m_treeacc.GROUP_USER= m_gcm.CODE AND m_gcm.PARAMETER='GRP_USR' AND m_treeacc.FLAG_ACTIVE='Y' order by m_treeacc.ID_TREE ASC";
		// // $sql .= "from m_treeacc , m_gcm";
		// // $sql .= "where m_treeacc.GROUP_USER= m_gcm.CODE ";
		// // $sql .= "AND m_gcm.PARAMETER='GRP_USR' AND m_treeacc.FLAG_ACTIVE='Y' order by m_treeacc.ID_TREE ASC";

		// $res = $this->db->query($sql);
		// return $res->result_array();

		$this->db->select('ID_TREE,GROUP_USER,m_gcm.DESCRIPTION as NAMA,PUBLIC_CODE,m_treeacc.DESCRIPTION as deskripsi,m_treeacc.FLAG_ACTIVE');
		$this->db->from($this->table);
		$this->db->join('m_gcm', 'm_gcm.CODE = m_treeacc.GROUP_USER');
		$this->db->where('m_gcm.PARAMETER', 'GRP_USR');
		$this->db->order_by('ID_TREE', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function menugcm($param)
	{
		$this->db->select('*');
		$this->db->from('m_gcm');
		$this->db->where('PARAMETER', $param);
		$this->db->where('FLAG_ACTIVE', 'Y');
		$query = $this->db->get();
		return $query->result();
	}

	// detail peruser
	public function detail($id_user)
	{
		$query = $this->db->get_where($this->table, array('ID_TREE' => $id_user));
		return $query->row();
	}

	public function get($id_user)
	{
		$this->db->where('id_user', $id_user);
		$result = $this->db->get('users')->row();
		return $result;
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert($this->table, $data);
	}

	// Edit 
	public function edit($data, $id_user)
	{
		$this->db->where('ID_TREE', $id_user);
		$this->db->update($this->table, $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('ID_TREE', $data['ID_TREE']);
		$this->db->delete($this->table, $data);
	}

	//update datails
	public function updateprofil($id)
	{
		$i = $this->input;

		if (isset($id)) {
			$data = array(
				'id_user'	=> $i->post('id_user'),
				'nama'		=> $i->post('nama'),
				'email'		=> $i->post('email'),
			);
			$this->session->set_flashdata('sukses', 'Anda berhasil mengupdate profil');
			$this->session->set_userdata('nama', $i->post('nama'));
		}
		return $this->db->update($this->_table, $data, array('id_user' => $id));
	}

	//update password
	public function updatepassword($id)
	{
		$post = $this->input->post();
		if ($post["password_lama"] == $post["data_password_lama"]) {
			//cs..,fd
			if ($post["password_verif"] == $post["password_baru"]) {
				$data = array(
					'password' => $post["password_baru"]
				);
			} else { // dan jika tidak berisi inputan
				$this->session->set_flashdata('maaf', 'Konfirmasi password baru anda tidak sama. Silakan periksa kembali password baru dan konfirmasi anda.');
				redirect(site_url('profile'));
			}
		} //if untuk ngecek password lama
		else {
			$this->session->set_flashdata('maaf', 'Anda salah menginput password lama.');
			redirect(site_url('profile'));
		}
		return $this->db->update($this->_table, $data, array('id_user' => $id));
	}
}
