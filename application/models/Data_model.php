<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Data_model extends CI_Model
{
  public function Insert($table,$data)
  {
    $res = $this->db->insert($table, $data);
    return $res; 
  }
  public function get($table)
  {
      return $this->db->get($table)->result_array();
  }
  public function data_trans()
  {
    return $this->db->get('transaksi')->result_array();
  }
}