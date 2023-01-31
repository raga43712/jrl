<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang2 extends CI_Model {
    public function add_quantity($id, $quantity) {
        $this->db->set('quantity', 'quantity+'.$quantity, FALSE);
        $this->db->where('id', $id);
        $this->db->update('barang_table');
    }

    public function check_duplicate_add($id_brg,$grid_pro,$width_pro,$length_pro) {
        $this->db->select('id');
        $this->db->from('barang_table');
        $this->db->where('id_brg', $id_brg);
        $this->db->where('grid_pro', $grid_pro);
        $this->db->where('width_pro', $width_pro);
        $this->db->where('length_pro', $length_pro);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->id;
        } else {
            return false;
        }
    }

    public function add_barang($data) {
        $this->db->insert('barang_table', $data);
        return $this->db->insert_id();
    }

    function all()
    {
        $this->db->select('tbbarang.*, tbstatus.*, tbbrg.*');
        $this->db->from('tbbarang');
        $this->db->join('tbstatus', 'tbbarang.id_status = tbstatus.id_status');
        $this->db->join('tbbrg', 'tbbarang.id_brg = tbbrg.id_brg');
        //$this->db->where('id_surat', $nomor);
        $this->db->order_by('id ASC');
        $query = $this->db->get();
        return $query->result();
    }
    function brg()
    {
        $this->db->select('tbbarang.*, tbbrg.*');
        $this->db->from('tbbarang');
        $this->db->join('tbbrg', 'tbbarang.id_brg = tbbrg.id_brg');
        //$this->db->where('id_surat', $nomor);
        $this->db->order_by('id ASC');
        $query = $this->db->get();
        return $query->result();
    }//NONAKTIF 
    function brga()
    {
        $this->db->select('*');
        $this->db->from('tbbrg');
        $this->db->order_by('name_brg ASC');
        $query = $this->db->get();
        return $query->result();
    }
}
