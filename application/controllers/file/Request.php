<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{

    // ************************************************//
    // Contoller Request File                          //
    // fungsi :                                        //
    // 1. Menambah Berkas                              //
    // 2. Mengubah Berkas yang ada                     //
    // 3. Menghapus Berkas                             //
    //												   //	 
    // Created by   : Wendy Bayu                       //
    // created date : 09/07/2021					   //
    // version      : 2.0							   //
    // ************************************************//
    //	for edu only                                   //
    // 	for commercial purpose                         // 
    //	please send email to wendy.bayu@gmail.com      //
    // ************************************************//

    // Load database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('file/Modal_request_file', 'mrequest');
        $this->simple_login->terotentikasi();
        // if ($this->session->userdata('akses_level') != 'superadmin')
        //     show_404();
        $this->load->model('konfigurasi_model');
        $result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'file/request');

        if ($result == false) {
            redirect(base_url('Auth/logout'));
        }
    }

    // Index
    public function index()
    {
        $user = $this->mrequest->listing();
        $site = $this->konfigurasi_model->listing();
        $typedoclist = $this->mrequest->menugcm('CD_DOC');
        $penduduk = $this->mrequest->getPenduduk();
        $data = array(
            'title'     => 'Data Berkas Warga',
            'namasite'    => $site['namaweb'],
            'userb'        =>     $user,
            'typedoclist' => $typedoclist,
            'penduduk' => $penduduk,


            'isi'          => 'back/request/list'
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
            'jenis',
            'jenis',
            'required',
            array(
                'required'     => 'Jenis Berkas harus diisi'
            )
        );

        $valid->set_rules(
            'note',
            'note',
            'required',
            array(
                'required'     => 'Keterangan harus diisi'
            )
        );

        if ($valid->run()) {
            $i = $this->input;
            $data = array(
                'CD_RESIDENT'     =>     $i->post('fullname'),
                'TUJUAN'          =>    $i->post('jenis'),
                'NOTE'            =>    $i->post('note'),
                'DATE_CREATED'    =>  date('Y-m-d'),
                'STATUS'          => 'O',
                'USER_CREATED' => $this->session->userdata('username'),


            );
            $this->mrequest->insert_crud($data);
            $this->session->set_flashdata('sukses', 'Request Berkas berhasil ditambah');
            redirect(site_url('file/request'));
        }
        // End masuk database
    }

    public function edit($id_user = null)
    {
        if (!isset($id_user)) redirect('file/request');
        // if ($id_user == 641) show_404();
        $user = $this->mrequest->detail($id_user);
        // $groupMenu = $this->mpenduduk->menugcm('GRP_USR');
        // $status = $this->mpenduduk->menugcm('FLAG_AKTIF');
        $site     = $this->konfigurasi_model->listing();
        // Validasi
        $valid = $this->form_validation;



        $valid->set_rules(
            'jenis',
            'jenis',
            'required',
            array(
                'required'     => 'Jenis Berkas harus diisi'
            )
        );

        $valid->set_rules(
            'note',
            'note',
            'required',
            array(
                'required'     => 'Keterangan harus diisi'
            )
        );

        if ($valid->run() === FALSE) {
            // End validasi

            $data = array(
                'title'     => 'Ubah Berkas Warga',
                'namasite'    => $site['namaweb'],
                'user'    => $user,
                // 'grpmenu' => $groupMenu,
                // 'statusb' => $status,
                'doklist' => $this->mrequest->menugcm('CD_DOC'),
                // 'edulist' => $this->mpenduduk->menugcm('CD_EDU'),
                // 'sexlist' => $this->mpenduduk->menugcm('SEX'),
                // 'joblist' => $this->mpenduduk->menugcm('CD_JOB'),
                // 'nikahlist' => $this->mpenduduk->menugcm('CD_MARRIED'),
                'isi'     => 'back/request/edit'
            );
            $this->load->view('back/wrapper', $data);
            // masuk database
        } else {
            $i = $this->input;
            $data = array(
                'CD_RESIDENT'     =>     $i->post('id_resident'),
                'NOTE'            =>    $i->post('note'),
                'TUJUAN'          =>    $i->post('jenis'),
                'STATUS'    => 'O',
                'USER_CREATED' => $this->session->userdata('username'),
            );
            $this->mrequest->edit($data, $id_user);
            $this->session->set_flashdata('sukses', 'Data Berkas Warga berhasil diubah');
            redirect(site_url('file/request'));
        }
        // End masuk database
    }

    public function delete($id_user)
    {
        $this->simple_login->terotentikasi();
        $data = array('REQUEST_ID' => $id_user);
        $this->mrequest->delete($data);
        $this->session->set_flashdata('dihapus', 'Data Berkas Warga berhasil dihapus');
        redirect(site_url('file/request'));
    }

    function submit_all()
    {
        $user = $this->session->userdata('username');
        $pilih = 'O';

        $hasilCekdata = $this->mrequest->cekDataBeforeSubmitOvertime($user);
        if ($hasilCekdata <> true) {
            echo 'null';
        } else {
            $this->mrequest->submit($user, $pilih);
            echo 'masuk';
        }
    }
}

// ウェンディバユ作成 //
