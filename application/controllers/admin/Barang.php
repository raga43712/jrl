<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->simple_login->terotentikasi();
		$this->load->library('form_validation');
		$this->load->model('barang_model');//model data
		$this->load->model('konfigurasi_model');
		$result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'admin/barang'); //base url
		if ($result == false) {
			redirect(base_url('Auth/logout'));
		}
	} //Ubah base URL nya sesuaikan dengan controllernya

	public function index(){
		$site 	= $this->konfigurasi_model->listing();
		$barang = $this->barang_model->all();
		$brg 	= $this->barang_model->brga();
		//tambah model

		$data = array(
			'title'		=> 'Data Barang Masuk',
			'namasite'	=> $site['namaweb'],
			'barang'	=> $barang,
			'brg'		=> $brg,
			//model list
			'isi'		=> 'back/barang/list' 
		);
		$this->load->view('back/wrapper', $data);
	}
	
	public function tambah(){
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules(
			'kode_brg','Kode_Brg','required',array('required' => 'Grid harus diisi'));
		$valid->set_rules(
			'grid_pro','Grid_Pro','required',array('required' => 'Grid harus diisi'));
		$valid->set_rules(
			'length_pro','Length_Pro','required',array('required' => 'Length harus diisi'));
		$valid->set_rules(
			'width_pro','Width_pro','required',array('required' => 'Panjang harus diisi'));

		if ($valid->run()) {
			$i = $this->input;
			$data = array(
				'kode_brg'			=>	$i->post('kode_brg'),
				'grid_pro'			=>	$i->post('grid_pro'),
				'width_pro'			=>	$i->post('width_pro'),
				'length_pro'		=>	$i->post('length_pro'),
				'qty_pro'			=>	$i->post('qty_pro'),
				'desc_pro'			=>  $i->post('desc_pro'),
				'kode'				=>	$i->post('kode_brg') . $i->post('grid_pro') 
										. $i->post('width_pro') . $i->post('length_pro')
			);

			//tidak usah pakai array dis sesuaikan lagi
			if(empty($i->post('qty_pro'))){
                $data['qty_pro'] = 0;
            }
            $check = $this->barang_model->check_data($data['kode']);
                if ($check > 0) {
                    $this->barang_model->update_data($data['kode'],$data['qty_pro']);
                } else {
                    $this->barang_model->insert_data($data);
                }
			//$this->barang_model->insert_history($data);
			$this->session->set_flashdata('sukses', 'Barang berhasil ditambah');
			redirect(site_url('admin/barang'));
		}
	}
	public function riwayat(){
		$site 	= $this->konfigurasi_model->listing();
		$his 	= $this->barang_model->hist();
		$brg 	= $this->barang_model->brga();
		$result = $this->barang_model->nom();

		$ben	= "001";
			$bes	= date('Ymd') . $ben;
			if (empty($result[0]['ket'])) {
				$ket = $bes;
			} else if (substr($result[0]['ket'], 0, 8) == (date('Ymd'))) {
				$ket = $result[0]['ket'] + 1;
			} else if (substr($result[0]['ket'], 0, 8) != (date('Ymd'))) {
				$ket = $bes;
			}
		//tambah model

		$data = array(
			'title'		=> 'Data Barang Masuk',
			'namasite'	=> $site['namaweb'],
			'his'		=> $his,
			'brg'		=> $brg,
			'ket'		=> $ket,
			//model list
			'isi'		=> 'back/history/list' 
		);
		$this->load->view('back/wrapper', $data);
	}
	public function tambah_his(){
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules(
			'grid_pro','Grid_Pro','required',array('required' => 'Grid harus diisi'));
		$valid->set_rules(
			'length_pro','Length_Pro','required',array('required' => 'Length harus diisi'));
		$valid->set_rules(
			'width_pro','Width_pro','required',array('required' => 'Panjang harus diisi'));
			
		if ($valid->run()) {
			$i = $this->input;
			$data = array(
				'tgl_pro'			=>	date('Y-m-d'),
				'kode_brg'			=>	$i->post('kode_brg'),
				'grid_pro'			=>	$i->post('grid_pro'),
				'width_pro'			=>	$i->post('width_pro'),
				'length_pro'		=>	$i->post('length_pro'),
				'qty_pro'			=>	$i->post('qty_pro'),
				'desc_pro'			=>  $i->post('desc_pro'),
				'ket'				=>  $i->post('ket'),
				'kode'				=>	$i->post('kode_brg') . $i->post('grid_pro') 
										. $i->post('width_pro') . $i->post('length_pro')
			);
			$this->barang_model->insert_his($data);
			$this->session->set_flashdata('sukses', 'Data pemasukkan berhasil ditambahkan');
			redirect(site_url('admin/barang/riwayat'));
		}
	}


} // end of all