<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export_model extends CI_Model {

    // public function get_data()
    // {

    //     $query = $this->db->get('history');
    //     return $query->result();
    // }
    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('history');
        $this->db->join('tbbrg', 'history.kode_brg = tbbrg.kode_brg');
        $query = $this->db->get();
        return $query->result();
    }

}
