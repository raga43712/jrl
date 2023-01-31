<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kode extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->simple_login->terotentikasi();
		$this->load->library('form_validation');
		$this->load->model('kode_model');//model data
		$this->load->model('konfigurasi_model');
		$result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'admin/kode'); //base url
		if ($result == false) {
			redirect(base_url('Auth/logout'));
		}
	} //Ubah base URL nya sesuaikan dengan controllernya

	public function index(){
		$site 	= $this->konfigurasi_model->listing();
		$cd = $this->kode_model->ambil();
		//$brg 	= $this->barang_model->brga();
		//tambah model

		$data = array(
			'title'		=> 'Kode Barang',
			'namasite'	=> $site['namaweb'],
			'cd'		=> $cd,
			//'brg'		=> $brg,
			//model list
			'isi'		=> 'back/kode/list'
		);
		$this->load->view('back/wrapper', $data);
	}
	
	public function tambah()
	{
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules(
			'name_brg','Name_Brg','required',array('required' => 'Nama harus diisi'));
		$valid->set_rules(
			'kode_brg','Kode_Brg','required',array('required' => 'Kode harus diisi'));
		if ($valid->run()) {
			$i = $this->input;
			$data = array(
				'id_brg'			=> 	$i->post('id_brg'),
				'name_brg'			=>	$i->post('name_brg'),
				'kode_brg'			=>  $i->post('kode_brg')
			);
			$this->kode_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Barang berhasil ditambah');
			redirect(site_url('admin/kode'));
		}
	}


} // end of all