<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KartuKeluarga extends CI_Controller
{


    // Load database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('master/Model_kartupenduduk', 'mpenduduk');
        $this->simple_login->terotentikasi();
        // if ($this->session->userdata('akses_level') != 'superadmin')
        //     show_404();
        $result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'master/KartuKeluarga');

        if ($result == false) {
            redirect(base_url('Auth/logout'));
        }
    }

    // Index
    public function index()
    {
        $user = $this->mpenduduk->listing();
        $grouplist = $this->mpenduduk->menugcm('GRP_USR');

        $site = $this->konfigurasi_model->listing();
        $status = $this->mpenduduk->menugcm('FLAG_AKTIF');
        $data = array(
            'title'     => 'Data Kartu Keluarga',
            'namasite'    => $site['namaweb'],
            'userb'        =>     $user,
            'grouplist' => $grouplist,
            'agamalist' => $this->mpenduduk->menugcm('CD_RELIGION'),
            'edulist' => $this->mpenduduk->menugcm('CD_EDU'),
            'sexlist' => $this->mpenduduk->menugcm('SEX'),
            'joblist' => $this->mpenduduk->menugcm('CD_JOB'),
            'nikahlist' => $this->mpenduduk->menugcm('CD_MARRIED'),

            'statusc' => $status,
            'isi'          => 'back/kartukeluarga/list'
        );
        $this->load->view('back/wrapper', $data);
    }





    public function edit($id_user = null)
    {
        if (!isset($id_user)) redirect('master/KartuKeluarga');
        if ($id_user == 641) show_404();
        $user = $this->mpenduduk->detail($id_user);
        $groupMenu = $this->mpenduduk->menugcm('GRP_USR');
        $status = $this->mpenduduk->menugcm('FLAG_AKTIF');
        $site     = $this->konfigurasi_model->listing();
        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules(
            'fullname',
            'fullname',
            'required',
            array('required' => 'Nama Lengkap harus diisi')
        );

        $valid->set_rules(
            'ktp',
            'ktp ',
            'required',
            array(
                'required'     => 'ktp  harus diisi'

            )
        );

        $valid->set_rules(
            'datebirth',
            'datebirth',
            'required',
            array(
                'required'     => 'Tanggal Lahir harus diisi'
            )
        );

        $valid->set_rules(
            'placebirth',
            'placebirth',
            'required',
            array(
                'required'     => 'Tempat Lahir harus diisi'
            )
        );

        $valid->set_rules(
            'sex',
            'sex',
            'required',
            array(
                'required'     => 'Jenis Kelamin harus diisi'
            )
        );

        if ($valid->run() === FALSE) {
            // End validasi

            $data = array(
                'title'     => 'Ubah Kartu Keluarga',
                'namasite'    => $site['namaweb'],
                'user'    => $user,
                'grpmenu' => $groupMenu,
                'statusb' => $status,
                'agamalist' => $this->mpenduduk->menugcm('CD_RELIGION'),
                'edulist' => $this->mpenduduk->menugcm('CD_EDU'),
                'sexlist' => $this->mpenduduk->menugcm('SEX'),
                'joblist' => $this->mpenduduk->menugcm('CD_JOB'),
                'nikahlist' => $this->mpenduduk->menugcm('CD_MARRIED'),
                'isi'     => 'back/kartukeluarga/edit'
            );
            $this->load->view('back/wrapper', $data);
            // masuk database
        } else {
            $i = $this->input;
            $data = array(
                'FULL_NAME'            =>     $i->post('fullname'),
                'NO_KK'            =>    $i->post('kk'),
                'FATHER_NAME'        =>    $i->post('namafather'),
                'MOTHER_NAME'    =>  $i->post('namemother')

            );
            $this->mpenduduk->edit($data, $id_user);
            $this->session->set_flashdata('sukses', 'Data Kartu Keluarga berhasil diubah');
            redirect(site_url('master/KartuKeluarga'));
        }
        // End masuk database
    }

    public function delete($id_user)
    {
        $this->simple_login->terotentikasi();
        $data = array('CD_RESIDENT' => $id_user);
        $this->mpenduduk->delete($data);
        $this->session->set_flashdata('dihapus', 'Data Penduduk berhasil dihapus');
        redirect(site_url('master/KartuKeluarga'));
    }
}

// ウェンディバユ作成 //
