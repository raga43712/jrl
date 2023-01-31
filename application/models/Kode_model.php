<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode_model extends CI_Model {

    function all2(){
        $this->db->from('tbbarang');
        $this->db->where('desc_pro', 'masuk');
        $query = $this->db->get();
        return $query->result();
    }
    function all1(){
        // $this->db->where('jenis', 'masuk');
        $this->db->select('*');
        $this->db->from('tbbarang');
        $this->db->order_by('id_pro DESC');
        //$this->db->where('id_periode', $this->session->userdata('active_periode'));
        $query = $this->db->get();
        return $query->result();
    }
    function all(){
        $this->db->select('tbbarang.*, tbstatus.*, tbbrg.*');
        $this->db->from('tbbarang');
        $this->db->join('tbstatus', 'tbbarang.id_status = tbstatus.id_status');
        $this->db->join('tbbrg', 'tbbarang.id_brg = tbbrg.id_brg');
        //$this->db->where('id_surat', $nomor);
        $this->db->order_by('id_pro ASC');
        $query = $this->db->get();
        return $query->result();
    }
    function brg(){
        $this->db->select('tbbarang.*, tbbrg.*');
        $this->db->from('tbbarang');
        $this->db->join('tbbrg', 'tbbarang.id_brg = tbbrg.id_brg');
        //$this->db->where('id_surat', $nomor);
        $this->db->order_by('id_pro ASC');
        $query = $this->db->get();
        return $query->result();
    }//NONAKTIF 
    function ambil() {
        $this->db->select('*');
        $this->db->from('tbbrg');
        $this->db->order_by('id_brg ASC');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('tbbrg', $data);
    }

    // function laporan_keluar(){
    //     $this->db->select('data_kas.*, pokja.*');
    //     $this->db->order_by('pokja.id_pokja ASC');
    //     $this->db->where('jenis', 'keluar');
    //     $this->db->where('id_periode', $this->session->userdata('active_periode'));

    //     $this->db->join('pokja', 'data_kas.id_pokja = pokja.id_pokja', 'LEFT');
    //     $this->db->from('data_kas');
    //     $this->db->group_by('data_kas.id_pokja');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}