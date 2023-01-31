<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kartupenduduk extends CI_Model
{


    var $table = "m_penduduk";


    // Load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //Listing
    public function listing()
    {
        $this->db->select("CD_RESIDENT,FULL_NAME,NO_KK,FATHER_NAME,MOTHER_NAME,
        NO_KTP,
        DATE_BIRTH,
        PLACE_BIRTH,
        (SELECT m_gcm.DESCRIPTION
         FROM   m_gcm
         WHERE  m_gcm.PARAMETER = 'SEX' AND m_gcm.CODE = SEX)
          AS SEX,
        (SELECT m_gcm.DESCRIPTION
         FROM   m_gcm
         WHERE  m_gcm.PARAMETER = 'CD_RELIGION' AND m_gcm.CODE = RELIGION)
          AS RELIGION,ALAMAT,(SELECT m_gcm.DESCRIPTION
         FROM   m_gcm
         WHERE  m_gcm.PARAMETER = 'CD_MARRIED' AND m_gcm.CODE = RELATIONSHIP)
          AS RELATIONSHIP,DATE_JOIN");
        $this->db->from($this->table);
        // $this->db->where('FLAG_ACTIVE', 'Y');
        $this->db->order_by('CD_RESIDENT', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function menugcm($param)
    {
        $this->db->select('*');
        $this->db->from('m_gcm');
        $this->db->where('PARAMETER', $param);
        $this->db->where('FLAG_ACTIVE', 'Y');
        $query = $this->db->get();
        return $query->result();
    }

    // detail peruser
    public function detail($id_user)
    {
        $query = $this->db->get_where($this->table, array('CD_RESIDENT' => $id_user));
        return $query->row();
    }

    public function get($id_user)
    {
        $this->db->where('id_user', $id_user);
        $result = $this->db->get('users')->row();
        return $result;
    }

    // Tambah
    public function tambah($data)
    {
        $this->db->insert($this->table, $data);
    }

    // Edit 
    public function edit($data, $id_user)
    {
        $this->db->where('CD_RESIDENT', $id_user);
        $this->db->update($this->table, $data);
    }

    // Delete
    public function delete($data)
    {
        $this->db->where('NO_SR', $data['NO_SR']);
        $this->db->delete($this->table, $data);
    }

    //update datails
    public function updateprofil($id)
    {
        $i = $this->input;

        if (isset($id)) {
            $data = array(
                'id_user'    => $i->post('id_user'),
                'nama'        => $i->post('nama'),
                'email'        => $i->post('email'),
            );
            $this->session->set_flashdata('sukses', 'Anda berhasil mengupdate profil');
            $this->session->set_userdata('nama', $i->post('nama'));
        }
        return $this->db->update($this->_table, $data, array('id_user' => $id));
    }

    //update password
    public function updatepassword($id)
    {
        $post = $this->input->post();
        if ($post["password_lama"] == $post["data_password_lama"]) {
            //cs..,fd
            if ($post["password_verif"] == $post["password_baru"]) {
                $data = array(
                    'password' => $post["password_baru"]
                );
            } else { // dan jika tidak berisi inputan
                $this->session->set_flashdata('maaf', 'Konfirmasi password baru anda tidak sama. Silakan periksa kembali password baru dan konfirmasi anda.');
                redirect(site_url('profile'));
            }
        } //if untuk ngecek password lama
        else {
            $this->session->set_flashdata('maaf', 'Anda salah menginput password lama.');
            redirect(site_url('profile'));
        }
        return $this->db->update($this->_table, $data, array('id_user' => $id));
    }
}

//69ffe55a99db23b320584d31242cab8f //