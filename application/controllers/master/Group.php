<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Group extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/Model_group', 'mgroup');
		$this->simple_login->terotentikasi();
		$this->load->model('konfigurasi_model');
		$result = $this->konfigurasi_model->cekMenu($this->session->userdata('akses_level'), 'master/group');

		if ($result == false) {
			redirect(base_url('Auth/logout'));
		}
	}

	// Index
	public function index()
	{
		//$user = $this->mgroup->listing();
		$grouplist = $this->mgroup->menugcm('GRP_USR');
		$grouplist1 = $this->mgroup->menugcm('GRP_USR');
		$site = $this->konfigurasi_model->listing();
		//$status = $this->mgroup->menugcm('FLAG_AKTIF');
		$data = array(
			'title' 	=> 'Data Group',
			'namasite'	=> $site['namaweb'],
			'cboGroup'  => $grouplist,
			'cboGroup1' => $grouplist1,
			'isi'  		=> 'back/group/list'
		);
		$this->load->view('back/wrapper', $data);
	}



	function save()
	{

		$valid = $this->form_validation;
		$valid->set_rules(
			'fromgroup',
			'fromgroup',
			'required',
			array('required' => 'fromgroup harus diisi')
		);
		$valid->set_rules(
			'togroup',
			'togroup',
			'required',
			array('required' => 'togroup harus diisi')
		);

		if ($valid->run() === FALSE) {
			$grouplist = $this->mgroup->menugcm('GRP_USR');
			$site = $this->konfigurasi_model->listing();
			$data = array(
				'title' 	=> 'Data Group',
				'namasite'	=> $site['namaweb'],
				'cboGroup'  => $grouplist,
				'isi'  		=> 'back/group/list'
			);
			$this->load->view('back/wrapper', $data);
		} else {
			$from = $this->input->post('fromgroup');
			$to = $this->input->post('togroup');
			$message = $this->mgroup->copy_menu($from, $to);
			foreach ($message as $msg) {
				$this->session->set_flashdata($msg->ERROR, $msg->MESSAGE);
				//echo $msg->MESSAGE . "," . ;
			}
			$grouplist = $this->mgroup->menugcm('GRP_USR');
			$site = $this->konfigurasi_model->listing();
			$data = array(
				'title' 	=> 'Data Group',
				'namasite'	=> $site['namaweb'],
				'cboGroup'  => $grouplist,
				'isi'  		=> 'back/group/list'
			);
			$this->load->view('back/wrapper', $data);
		}
	}
}
// ウェンディバユ作成 //
