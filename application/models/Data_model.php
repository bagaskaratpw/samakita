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
  public function tampil_detail($unique)
  {
    $this->db->select('*');
    $this->db->from('transaksi_det');
    $this->db->where('no_inv',$unique);
    return $this->db->get()->result_array();
  }
  public function Delete($table, $where){
    $data = $this->db->delete($table, $where); 
    return $data;
  }
  public function GetWhere($table, $where)
  {
    $res = $this->db->get_where($table, $where);
    return $res->result_array();
  }
  public function Update($table, $data, $where){
    $data = $this->db->update($table, $data, $where);
    return $data;
  }

   public function edit_barang($unique)
   {
      $data= array(            
        'id_barang'    => $this->input->post('editid'),
        'nama_barang'    => $this->input->post('editnama'),
        'unit'    => $this->input->post('editunit'),
        'harga' => $this->input->post('editharga'),         
    );
      $this->db->select('*');
      $this->db->from('barang');
      $this->db->where('id_barang', $unique);
     
       return $this->db->update('barang', $data);             
    }
   
    public function barangDetail($unique)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_barang', $unique);
        return $this->db->get()->row_array();
    }

    public function tampil_kode()
    {
        return $this->db->get('barang')->result_array();
    }
    public function ajax_kode($where)
    {
        $this->db->where('id_barang', $where);
        return $this->db->get('barang')->row();
    }
}