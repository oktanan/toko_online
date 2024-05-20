<?php

class Model_kategori extends CI_Model{
    public function data_elektronik()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'elektronik')); //get menampilkan semua // get_where menampilkan kategori
    }
    
    public function data_pakaian_pria()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian pria')); //get menampilkan semua // get_where menampilkan kategori
    }
    public function data_pakaian_wanita()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian wanita')); 
    }
    public function data_pakaian_anak_anak()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'pakaian anak-anak')); 
    }
    public function data_peralatan_olahraga()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'peralatan olahraga')); 
    }
}

?>