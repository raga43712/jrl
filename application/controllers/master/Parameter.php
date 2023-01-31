<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Parameter extends CI_Controller
{

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/Model_parameter', 'mparameter');
		$this->simple_login->terotentikasi();
		$this->load->model('konfigurasi_model');
		// if ($this->session->userdata('akses_level') != 'superadmin')
		// 	show_404();
		$result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'master/parameter');

		if ($result == false) {
			redirect(base_url('Auth/logout'));
		}
	}

	// Index
	public function index()
	{
		$user = $this->mparameter->listing();
		$grouplist = $this->mparameter->menugcm('GRP_USR');
		$site = $this->konfigurasi_model->listing();
		$status = $this->mparameter->menugcm('FLAG_AKTIF');
		$data = array(
			'title' 	=> 'Data Parameter',
			'namasite'	=> $site['namaweb'],
			'userb'		=> 	$user,
			'grouplist' => $grouplist,
			'statusc' => $status,
			'isi'  		=> 'back/parameter/list'
		);
		$this->load->view('back/wrapper', $data);
	}



	// Tambah User
	public function tambah()
	{
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules(
			'parameter',
			'parameter',
			'required',
			array('required' => 'parameter harus diisi')
		);

		$valid->set_rules(
			'kode',
			'Kode ',
			'required|is_unique[m_gcm.CODE]',
			array(
				'required' 	=> 'Kode  harus diisi',
				'is_unique'	=> 'Kode: <strong>' . $this->input->post('kode') .
					'</strong> sudah digunakan. Buat kode baru!'

			)
		);

		$valid->set_rules(
			'deskripsi',
			'deskripsi',
			'required',
			array(
				'required' 	=> 'deskripsi harus diisi'
			)
		);

		if ($valid->run()) {
			$i = $this->input;
			$data = array(
				'PARAMETER'			=> 	$i->post('parameter'),
				'CODE'			=>	$i->post('kode'),
				'DESCRIPTION'		=>	$i->post('deskripsi'),
				'FLAG_ACTIVE'	=>  $i->post('status')
			);
			$this->mparameter->tambah($data);
			$this->session->set_flashdata('sukses', 'Parameter berhasil ditambah');
			redirect(site_url('master/parameter'));
		}
		// End masuk database
	}

	public function edit($id_user = null)
	{
		if (!isset($id_user)) redirect('master/parameter');
		if ($id_user == 641) show_404();
		$user = $this->mparameter->detail($id_user);
		$groupMenu = $this->mparameter->menugcm('GRP_USR');
		$status = $this->mparameter->menugcm('FLAG_AKTIF');
		$site 	= $this->konfigurasi_model->listing();
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules(
			'parameter',
			'parameter',
			'required',
			array('required' => 'Parameter harus diisi')
		);

		$valid->set_rules(
			'kode',
			'kode',
			'required',
			array('required' => 'Kode harus diisi')
		);

		$valid->set_rules(
			'deskripsi',
			'deskripsi',
			'required',
			array('required' => 'deskripsi harus diisi')
		);

		$valid->set_rules(
			'status',
			'status',
			'required',
			array('required' => 'status harus diisi')
		);

		if ($valid->run() === FALSE) {
			// End validasi

			$data = array(
				'title' 	=> 'Ubah Parameter',
				'namasite'	=> $site['namaweb'],
				'user'	=> $user,
				'grpmenu' => $groupMenu,
				'statusb' => $status,
				'isi' 	=> 'back/parameter/edit'
			);
			$this->load->view('back/wrapper', $data);
			// masuk database
		} else {
			$i = $this->input;
			$data = array(
				'PARAMETER'			=> 	$i->post('parameter'),
				'CODE'			=>	$i->post('kode'),
				'DESCRIPTION'		=>	$i->post('deskripsi'),
				'FLAG_ACTIVE'	=>  $i->post('status')
			);
			$this->mparameter->edit($data, $id_user);
			$this->session->set_flashdata('sukses', 'Parameter berhasil diubah');
			redirect(site_url('master/parameter'));
		}
		// End masuk database
	}

	public function delete($id_user)
	{
		$this->simple_login->terotentikasi();
		$data = array('NO_SR' => $id_user);
		$this->mparameter->delete($data);
		$this->session->set_flashdata('dihapus', 'Data Parameter berhasil dihapus');
		redirect(site_url('master/parameter'));
	}
}

// ウェンディバユ作成 //
