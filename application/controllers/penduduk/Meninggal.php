<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meninggal extends CI_Controller
{



    // Load database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk/Model_meninggal', 'mpenduduk');
        $this->simple_login->terotentikasi();
        $this->load->model('konfigurasi_model');
        $result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'penduduk/Meninggal');

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
            'title'     => 'Data Meninggal',
            'namasite'    => $site['namaweb'],
            'userb'        =>     $user,
            'grouplist' => $grouplist,
            'agamalist' => $this->mpenduduk->menugcm('CD_RELIGION'),
            'edulist' => $this->mpenduduk->menugcm('CD_EDU'),
            'sexlist' => $this->mpenduduk->menugcm('SEX'),
            'joblist' => $this->mpenduduk->menugcm('CD_JOB'),
            'nikahlist' => $this->mpenduduk->menugcm('CD_MARRIED'),
            'listPenduduk' => $this->mpenduduk->getPenduduk(),
            'statusc' => $status,
            'isi'          => 'back/meninggal/list'
        );
        $this->load->view('back/wrapper', $data);
    }



    // Tambah User
    public function tambah()
    {
        // Validasi
        $valid = $this->form_validation;
        $valid->set_rules(
            'fullname',
            'fullname',
            'required',
            array('required' => 'Nama Lengkap harus diisi')
        );

        $valid->set_rules(
            'datedied',
            'datedied',
            'required',
            array(
                'required'     => 'Tanggal Meninggal harus diisi'
            )
        );

        $valid->set_rules(
            'reason',
            'reason',
            'required',
            array(
                'required'     => 'Alasana Meninggal harus diisi'
            )
        );

        if ($valid->run()) {
            $i = $this->input;
            $id_user = $i->post('fullname');
            $data = array(

                'REASON_DIED'    =>  $i->post('reason'),
                'DATE_DIED' => $i->post('datedied')

            );
            //$this->mpenduduk->tambah($data);
            $this->mpenduduk->edit($data, $id_user);
            $this->session->set_flashdata('sukses', 'Penduduk Meninggal berhasil ditambah');
            redirect(site_url('penduduk/meninggal'));
        }
        // End masuk database
    }

    public function edit($id_user = null)
    {
        if (!isset($id_user)) redirect('penduduk/pendatang');
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
            'datejoin',
            'datejoin',
            'required',
            array(
                'required'     => 'Tanggal Join harus diisi'
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
                'title'     => 'Ubah Penduduk',
                'namasite'    => $site['namaweb'],
                'user'    => $user,
                'grpmenu' => $groupMenu,
                'statusb' => $status,
                'agamalist' => $this->mpenduduk->menugcm('CD_RELIGION'),
                'edulist' => $this->mpenduduk->menugcm('CD_EDU'),
                'sexlist' => $this->mpenduduk->menugcm('SEX'),
                'joblist' => $this->mpenduduk->menugcm('CD_JOB'),
                'nikahlist' => $this->mpenduduk->menugcm('CD_MARRIED'),
                'isi'     => 'back/pendatang/edit'
            );
            $this->load->view('back/wrapper', $data);
            // masuk database
        } else {
            $i = $this->input;
            $data = array(
                'FULL_NAME'            =>     $i->post('fullname'),
                'NO_KTP'            =>    $i->post('ktp'),
                'DATE_BIRTH'        =>    $i->post('datebirth'),
                'PLACE_BIRTH'    =>  $i->post('placebirth'),
                'SEX'    =>  $i->post('sex'),
                'RELIGION'    =>  $i->post('religi'),
                'CD_EDU'    =>  $i->post('edu'),
                'JOB'    =>  $i->post('job'),
                'ALAMAT'    =>  $i->post('alamat'),
                'STATUS'    =>  $i->post('nikah'),
                'DATE_JOIN' => $i->post('datejoin')
            );
            $this->mpenduduk->edit($data, $id_user);
            $this->session->set_flashdata('sukses', 'Data Penduduk berhasil diubah');
            redirect(site_url('penduduk/pendatang'));
        }
        // End masuk database
    }

    public function delete($id_user)
    {
        $this->simple_login->terotentikasi();
        $data = array(
            'REASON_DIED'    => null,
            'DATE_DIED' => ''
        );
        $this->mpenduduk->deletekonfirm($data, $id_user);
        $this->session->set_flashdata('dihapus', 'Data Penduduk berhasil dihapus');
        redirect(site_url('penduduk/meninggal'));
    }
}

// ウェンディバユ作成 //
