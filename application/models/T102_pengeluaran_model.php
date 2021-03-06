<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T102_pengeluaran_model extends CI_Model
{

    public $table = 't102_pengeluaran';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
      	$this->db->or_like('tgl', $q);
      	$this->db->or_like('nobuk', $q);
      	$this->db->or_like('keterangan', $q);
      	$this->db->or_like('jumlah', $q);
      	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
      	$this->db->or_like('tgl', $q);
      	$this->db->or_like('nobuk', $q);
      	$this->db->or_like('keterangan', $q);
      	$this->db->or_like('jumlah', $q);
      	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    // get max nomor bukti
    function get_max_nobuk() {
      $today = date("ymd");
      //$query = mysqli_query($konek, "SELECT max(nobuk) AS last FROM pengeluaran WHERE nobuk LIKE '$today%'");
      $s = "select max(nobuk) as last from t102_pengeluaran where nobuk like '$today%'"; //echo $s;
      //$data = mysqli_fetch_array($query);
      $data = $this->db->query($s)->result_array();
      $lastNobuk = $data[0]['last']; //echo $lastNobuk;
      $lastNoUrut = substr($lastNobuk, 6, 4);
      $nextNoUrut = $lastNoUrut + 1;
      //$nextNobuk = $today.sprintf('%04s', $nextNoUrut);
      return $today.sprintf('%04s', $nextNoUrut);
    }

    //
    function get_data_laporan($tgl1, $tgl2)
    {
      // $sqlBayar = mysqli_query($konek, "SELECT spp.*,siswa.nis,siswa.namasiswa,b.kelas FROM spp INNER JOIN siswa ON spp.idsiswa=siswa.idsiswa left join walikelas b on siswa.idkelas = b.idkelas WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' ORDER BY nobayar ASC");
      $s = "select * from t102_pengeluaran
        where tgl between '$tgl1' AND '$tgl2' order by nobuk asc";
      return $this->db->query($s)->result_array();
    }

}

/* End of file T102_pengeluaran_model.php */
/* Location: ./application/models/T102_pengeluaran_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-07-26 00:54:42 */
/* http://harviacode.com */
