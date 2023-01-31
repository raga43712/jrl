<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang21 extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->simple_login->terotentikasi();
		$this->load->library('form_validation');
		$this->load->model('barang2');//model data
		$this->load->model('konfigurasi_model');
		$result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'admin/barang21'); //base url
		if ($result == false) {
			redirect(base_url('Auth/logout'));
		}
	}

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


    public function add_barang() {
        $this->load->model('barang2');

        $id_brg = $this->input->post('id_brg');
        $grid_pro = $this->input->post('grid_pro');
        $width_pro = $this->input->post('width_pro');
        $length_pro = $this->input->post('length_pro');
        $qty_pro = $this->input->post('qty_pro');
        $desc_pro   = $this->input->post('desc_pro');

        $data = array(
            'id' => $id_brg.$grid_pro.$width_pro.$length_pro,
            'id_brg' => $id_brg,
            'grid_pro' => $grid_pro,
            'width_pro' => $width_pro,
            'length_pro' => $length_pro,
            'qty_pro' => $qty_pro,
            'desc_pro' => $desc_pro
        );

        $this->db->trans_start();
        $product_id = $this->barang2->check_duplicate_add($id_brg,$grid_pro,$width_pro,$length_pro);
        if ($product_id) {
            $this->Barang_model->add_quantity($product_id, $quantity);
        } else {
            $product_id = $this->barang2->add_barang($data);
        }
        $this->db->trans_complete();
        redirect('admin/barang21');
    }
}
