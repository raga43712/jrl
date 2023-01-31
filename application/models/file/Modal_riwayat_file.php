<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modal_riwayat_file extends CI_Model
{

    // var $user=$this->session->userdata('user');
    var $table = "t_request_file";
    var $column_search  = array("REQUEST_ID", "CD_RESIDENT", "TUJUAN", "STATUS", "CD_RT", "NOTE", "DATE_CREATED", "AMOUNT", "USER_CREATED");
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
        $this->db->where('USER_CREATED', $this->session->userdata('username'));

        $query = $this->db->get();
        return $query->result();
    }

    function get_all_data($param)
    {
        $this->db->select("(select m_penduduk.FULL_NAME FROM m_penduduk
         where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as FULL_NAME,
        (select m_penduduk.SEX FROM m_penduduk 
        where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as SEX ,
        (select m_penduduk.DATE_BIRTH FROM m_penduduk 
        where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as DATE_BIRTH , 
        (select m_penduduk.PLACE_BIRTH FROM m_penduduk 
        where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as PLACE_BIRTH,
        (select m_penduduk.NO_KK FROM m_penduduk 
        where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as NO_KK,
        (select m_penduduk.NO_KTP FROM m_penduduk 
        where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as NO_KTP,
        (select (select DESCRIPTION from m_gcm where parameter='CD_RELIGION' and CODE= m_penduduk.RELIGION) FROM m_penduduk 
        where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as RELIGI,
        (select (select DESCRIPTION from m_gcm where parameter='CD_JOB' and CODE= m_penduduk.JOB) FROM m_penduduk 
        where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as JOB,
        (select m_penduduk.ALAMAT FROM m_penduduk 
        where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT)as ALAMAT,NOTE");
        $this->db->from($this->table);
        $this->db->where('REQUEST_ID', $param);
        $this->db->where('FLAG_SUBMIT', 'Y');
        $this->db->where('STATUS', 'A');
        // return $this->db->count_all_results();
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

    function cekDataBeforeSubmitOvertime($user)
    {

        $sql = "select	REQUEST_ID from t_request_file
			where FLAG_SUBMIT='N' and USER_CREATED = ? ";

        $query = $this->db->query($sql, $user);

        if ($query->num_rows() > 0) {

            return true;
        } else {
            return false;
        }
    }
    function submit($user, $pilih)
    {
        $sql = "call submit_all(?,?)";
        $param = array(
            'user' => $user,
            'pilih' => $pilih

        );
        $this->db->query($sql, $param);
    }
}
