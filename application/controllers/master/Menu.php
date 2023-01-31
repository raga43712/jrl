<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{



	function __construct()
	{

		parent::__construct();
		$this->load->model('master/model_menu', 'mmenu');
		$this->simple_login->terotentikasi();
		$this->load->model('konfigurasi_model');
		$result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'master/menu');

		if ($result == false) {
			redirect(base_url('Auth/logout'));
		}
	}

	public function index()
	{


		$user = $this->mmenu->listing();
		$getmenu = $this->mmenu->menugcm('GRP_USR');
		$status = $this->mmenu->menugcm('FLAG_AKTIF');
		$site = $this->konfigurasi_model->listing();
		$data = array(
			'title' 	=> 'Data Menu',
			'namasite'	=> $site['namaweb'],
			'userb'		=> 	$user,
			'menu'     => $getmenu,
			'statusb' => $status,
			'isi'  		=> 'back/menu/list'
		);
		$this->load->view('back/wrapper', $data);
	}



	// Tambah User
	public function tambah()
	{
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules(
			'group',
			'Group',
			'required',
			array('required' => 'Group harus diisi')
		);

		$valid->set_rules(
			'kodeParent',
			'Kode Parent',
			'required',
			array(
				'required' 	=> 'Kode Parent harus diisi'

			)
		);

		$valid->set_rules(
			'kodeChild',
			'Kode Child',
			'required|is_unique[users.kodeChild]',
			array(
				'required' 	=> 'Kode Child harus diisi',
				'is_unique'	=> 'Username: <strong>' . $this->input->post('kodeChild') .
					'</strong> sudah digunakan. Buat kode child baru!'
			)
		);

		if ($valid->run()) {
			$i = $this->input;
			$data = array(
				'GROUP_USER'			=> 	$i->post('group'),
				'PARENT'			=>	$i->post('kodeParent'),
				'CHILD'		=>	$i->post('kodeChild'),
				'PUBLIC_CODE'		=>	$i->post('kodePublik'),
				'ICON'		=>	$i->post('icon'),
				'URL'		=>	$i->post('url'),
				'FLAG_ACTIVE'	=>  $i->post('status')
			);
			$this->mmenu->tambah($data);
			$this->session->set_flashdata('sukses', 'Menu berhasil ditambah');
			redirect(site_url('master/menu'));
		}
		// End masuk database
	}

	public function edit($id_user = null)
	{
		if (!isset($id_user)) redirect('master/menu');
		if ($id_user == 641) show_404();
		$user = $this->mmenu->detail($id_user);
		$site 	= $this->konfigurasi_model->listing();
		$getmenu = $this->mmenu->menugcm('GRP_USR');
		$status = $this->mmenu->menugcm('FLAG_AKTIF');
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules(
			'group',
			'Group',
			'required',
			array('required' => 'Group harus diisi')
		);

		$valid->set_rules(
			'parent',
			'Kode Parent',
			'required',
			array('required' => 'Kode Paren harus diisi')
		);

		$valid->set_rules(
			'child',
			'Kode Child',
			'required',
			array('required' => 'Kode Child harus diisi')
		);

		$valid->set_rules(
			'public',
			'Kode Publik',
			'required',
			array('required' => 'Kode Public harus diisi')
		);

		if ($valid->run() === FALSE) {
			// End validasi

			$data = array(
				'title' 	=> 'Ubah Menu',
				'namasite'	=> $site['namaweb'],
				'user'	=> $user,
				'menu' => $getmenu,
				'statusb' => $status,
				'isi' 	=> 'back/menu/edit'
			);
			$this->load->view('back/wrapper', $data);
			// masuk database
		} else {
			$i = $this->input;
			$data = array(
				'GROUP_USER'			=> 	$i->post('group'),
				'PARENT'			=>	$i->post('parent'),
				'CHILD'		=>	$i->post('child'),
				'PUBLIC_CODE'		=>	$i->post('public'),
				'ICON'	=>  $i->post('icon'),
				'DESCRIPTION'	=>  $i->post('deskripsi'),
				'URL'	=>  $i->post('url'),
				'FLAG_ACTIVE'	=>  $i->post('status'),
			);
			$this->mmenu->edit($data, $id_user);
			$this->session->set_flashdata('sukses', 'Menu berhasil diubah');
			redirect(site_url('master/menu'));
		}
		// End masuk database
	}

	// Delete User
	public function delete($id_user)
	{
		$this->simple_login->terotentikasi();
		$data = array('ID_TREE' => $id_user);
		$this->mmenu->delete($data);
		$this->session->set_flashdata('dihapus', 'Data Menu berhasil dihapus');
		redirect(site_url('master/menu'));
	}
}



// ウェンディバユ作成 //