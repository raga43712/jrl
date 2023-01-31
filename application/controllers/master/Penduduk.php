<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{


    // Load database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('master/Model_penduduk', 'mpenduduk');
        $this->simple_login->terotentikasi();
        // if ($this->session->userdata('akses_level') != 'superadmin')
        //     show_404();
        $this->load->model('konfigurasi_model');
        $result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'master/penduduk');

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
            'title'     => 'Data Penduduk',
            'namasite'    => $site['namaweb'],
            'userb'        =>     $user,
            'grouplist' => $grouplist,
            'agamalist' => $this->mpenduduk->menugcm('CD_RELIGION'),
            'edulist' => $this->mpenduduk->menugcm('CD_EDU'),
            'sexlist' => $this->mpenduduk->menugcm('SEX'),
            'joblist' => $this->mpenduduk->menugcm('CD_JOB'),
            'nikahlist' => $this->mpenduduk->menugcm('CD_MARRIED'),

            'statusc' => $status,
            'isi'          => 'back/penduduk/list'
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
            'ktp',
            'ktp ',
            'required|is_unique[m_penduduk.NO_KTP]',
            array(
                'required'     => 'ktp  harus diisi',
                'is_unique'    => 'ktp: <strong>' . $this->input->post('ktp') .
                    '</strong> sudah digunakan. Buat ktp baru!'

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

        if ($valid->run()) {
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
                'RELATIONSHIP'    =>  $i->post('status')
            );
            $this->mpenduduk->tambah($data);
            $this->session->set_flashdata('sukses', 'Parameter berhasil ditambah');
            redirect(site_url('master/penduduk'));
        }
        // End masuk database
    }

    public function edit($id_user = null)
    {
        if (!isset($id_user)) redirect('master/penduduk');
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
                'isi'     => 'back/penduduk/edit'
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
                'RELATIONSHIP'    =>  $i->post('nikah')
            );
            $this->mpenduduk->edit($data, $id_user);
            $this->session->set_flashdata('sukses', 'Data Penduduk berhasil diubah');
            redirect(site_url('master/penduduk'));
        }
        // End masuk database
    }

    public function delete($id_user)
    {
        $this->simple_login->terotentikasi();
        $data = array('CD_RESIDENT' => $id_user);
        $this->mpenduduk->delete($data);
        $this->session->set_flashdata('dihapus', 'Data Penduduk berhasil dihapus');
        redirect(site_url('master/penduduk'));
    }
}

// ウェンディバユ作成 //
