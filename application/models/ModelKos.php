<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKos extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    //manajemen buku
    public function getKos()
    {
        return $this->db->get('kos');
    }
    public function kosWhere($where)
    {
        return $this->db->get_where('kos', $where);
    }
    public function getKosWhere($table, $where)
    {

        $this->db->where($where);

        return $this->db->get($table);
    }
    public function kosFasilitas($where)
    {
        $this->db->from('kos');
        $this->db->join('fasilitas', 'fasilitas.kos_id = kos.id_kos');
        $this->db->where($where);
        return $this->db->get();
    }
    public function joinKos()
    {
        //$this->db->select('buku.id_kategori, kategori.id_kategori');
        $this->db->from('user');
        $this->db->join('kos', 'kos.user_id = user.id_user');
        return $this->db->get();
    }
    public function userKos($where)
    {
        $this->db->from('user');
        $this->db->join('kos', 'kos.user_id = user.id_user');
        $this->db->where($where);
        return $this->db->get();
    }
    public function getsewa($where)
    {
        return $this->db->get_where('sewa', $where);
    }
    public function sewaUser($where)
    {
        $this->db->from('user');
        $this->db->join('sewa', 'sewa.id_user = user.id_user');
        $this->db->where($where);
        return $this->db->get();
    }
    public function sewaKos($where)
    {
        $this->db->from('kos');
        $this->db->join('sewa', 'sewa.id_kos = kos.id_kos');
        $this->db->where($where);
        return $this->db->get();
    }
    public function sewa($data = null)
    {
        $this->db->insert('sewa', $data);
    }
    public function dataKos()
    {

        $kos = "SELECT*FROM kos ORDER BY user_id";
        $query = $this->db->query($kos);
        return $query;
    }
    public function deleteKos($where)
    {
        $this->db->delete('kos', $where);
    }
    public function kota()
    {
        $kota = "SELECT*FROM kos GROUP BY kota";
        $query = $this->db->query($kota);
        return $query->result();
    }
    public function getKategori()
    {
        return $this->db->get('kategori');
    }
    public function simpanKos($data = null)
    {
        $this->db->insert('kos', $data);
    }
    public function getFasilitas()
    {
        return $this->db->get('fasilitas');
    }
    public function simpanFasilitas($data = null)
    {
        $this->db->insert('fasilitas', $data);
    }
    public function getKosLimit()
    {
        $this->db->select('*');
        $this->db->from('kos');
        $this->db->limit(4, 0);
        return $this->db->get();
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('kos');
        return $this->db->get()->row($field);
    }
    public function total_sewa($field, $where)
    {
        $this->db->select_sum($field);
        // if (!empty($where) && count($where) > 0) {
        //     $this->db->where($where);
        // }
        // $this->db->from('kos');
        return $this->db->get()->row($field);
    }
}
