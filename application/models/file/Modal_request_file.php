<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modal_request_file extends CI_Model
{

    // var $user=$this->session->userdata('user');
    var $table = "t_request_file";
    var $column_search  = array("REQUEST_ID", "CD_RESIDENT", "TUJUAN", "STATUS", "CD_RT", "NOTE", "DATE_CREATED", "AMOUNT", "USER_CREATED");
    var $order = array('DATE_CREATED' => 'DESC');

    //Listing
    public function listing()
    {


        $this->db->select("(select m_penduduk.FULL_NAME FROM m_penduduk where m_penduduk.CD_RESIDENT = t_request_file.CD_RESIDENT) as FULL_NAME,
        DATE_CREATED,REQUEST_ID,
        (SELECT m_gcm.DESCRIPTION
        FROM   m_gcm
        WHERE  m_gcm.PARAMETER = 'CD_DOC' 
        AND m_gcm.CODE = t_request_file.TUJUAN )as TUJUAN,NOTE");
        $this->db->from($this->table);
        $this->db->where('FLAG_SUBMIT', 'N');

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
    public function getPenduduk()
    {
        $this->db->select('*');
        $this->db->from('m_penduduk');
        $this->db->where('DATE_DIED is NULL');
        // $this->db->where('FLAG_ACTIVE', 'Y');
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

    public function edit($data, $id_user)
    {
        $this->db->where('REQUEST_ID', $id_user);
        $this->db->update($this->table, $data);
    }

    // Delete
    public function delete($data)
    {
        $this->db->where('REQUEST_ID', $data['REQUEST_ID']);
        $this->db->delete($this->table, $data);
    }



    function insert_crud($data)
    {
        $this->db->insert($this->table, $data);
    }




    function delete_single_user($id)
    {
        $this->db->where("REQUEST_ID", $id);
        $this->db->delete($this->table);
    }




    function cekDataBeforeSubmitOvertime($user)
    {

        $sql = "select	REQUEST_ID from t_request_file
			where FLAG_SUBMIT = 'N' and USER_CREATED = ? ";

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
