<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masukan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->simple_login->terotentikasi();
        $this->load->model("masukan_model");
        $this->load->library('form_validation');
        // if ($this->session->userdata('akses_level') != 'superadmin')
        //     show_404();
        $this->load->model('konfigurasi_model');
        $result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'admin/masukan');

        if ($result == false) {
            redirect(base_url('Auth/logout'));
        }
    }

    public function index()
    {

        $site   = $this->konfigurasi_model->listing();

        $data = array(
            'title'      => 'Masukan',
            'namasite'   => $site['namaweb'],
            'masukan'     => $this->masukan_model->getAll(),
            'isi'        => 'back/masukan/list'
        );
        $this->load->view('back/wrapper', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->masukan_model->delete($id)) {
            $this->session->set_flashdata('maaf', 'Pesan berhasil dihapus');
            redirect(site_url('admin/masukan'));
        }
    }
}
