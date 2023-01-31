<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_approval_file extends CI_Model
{

    // var $user=$this->session->userdata('user');
    var $table = "t_request_file";
    var $column_search  = array("REQUEST_ID", "CD_RESIDENT", "TUJUAN", "STATUS", "CD_RT", "NOTE", "DATE_CREATED", "USER_CREATED");
    var $order = array('DATE_CREATED' => 'DESC');

    public function listing()
    {
        $this->db->select("(select m_penduduk.FULL_NAME FROM m_penduduk where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as FULL_NAME,
        DATE_CREATED,REQUEST_ID,STATUS,
        (SELECT m_gcm.DESCRIPTION
        FROM   m_gcm
        WHERE  m_gcm.PARAMETER = 'CD_DOC' 
        AND m_gcm.CODE = t_request_file.TUJUAN )as TUJUAN,NOTE");
        $this->db->from($this->table);
        $this->db->where('FLAG_SUBMIT', 'Y');
        $this->db->where('STATUS', 'O');


        $query = $this->db->get();
        return $query->result();
    }

    public function detail($id_user)
    {
        $this->db->select("(select m_penduduk.FULL_NAME FROM m_penduduk where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as FULL_NAME,
        DATE_CREATED,REQUEST_ID,CD_RESIDENT,
        TUJUAN,NOTE");

        $query = $this->db->get_where($this->table, array('REQUEST_ID' => $id_user));
        return $query->row();
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

    function insert_crud($data)
    {
        $this->db->insert($this->table, $data);
    }

    function fetch_single_user($user_id)
    {
        $this->db->where("REQUEST_ID", $user_id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function update_crud($id, $data)
    {
        $this->db->where("REQUEST_ID", $id);
        $this->db->update($this->table, $data);
    }


    function delete_single_user($id)
    {
        $this->db->where("REQUEST_ID", $id);
        $this->db->delete($this->table);
    }

    function cek_absen()
    {
        $userLogCek = $this->session->userdata('user');
        $this->db->where('cd_user', $userLogCek);
        $this->db->where('tgl_absensi', date("Y-m-d"));
        $query = $this->db->get('t_absensi_detail');
        if ($query->num_rows() > 0) {

            return true;
        } else {
            return false;
        }
    }
    function getCabangName($param)
    {
        $sql = "select NAMA_CABANG from m_cabang where CABANG_ID = ? ";

        $res = $this->db->query($sql, $param);
        return $res->result_array();
    }

    function getNames($param, $pilih)
    {

        if ($pilih == 'K') {
            $sql = "select DESCRIPTION from m_gcm where PARAMETER = 'KAS' AND CODE = ?";
        } elseif ($pilih == 'S') {
            $sql = "select DESCRIPTION from m_gcm where PARAMETER = 'CD_LUNAS' AND CODE = ?";
        } elseif ($pilih == 'R') {
            $sql = "select DESCRIPTION from m_gcm where PARAMETER = 'STATUS_REQ' AND CODE = ?";
        } elseif ($pilih == 'F') {
            $sql = "select DESCRIPTION from m_gcm where PARAMETER = 'CD_FILE' AND CODE = ?";
        }

        $res = $this->db->query($sql, $param);
        return $res->result_array();
    }

    function getNameDes($param)
    {
        $sql = "select DESCRIPTION from m_gcm where PARAMETER= 'CD_LUNAS' AND CODE = ? ";
        $res = $this->db->query($sql, $param);
        return $res->result_array();
    }

    function getPenduduk($param)
    {
        $sql = "select FULL_NAME from m_employee where CD_RESIDENT = ? ";

        $res = $this->db->query($sql, $param);
        return $res->result_array();
    }
}
