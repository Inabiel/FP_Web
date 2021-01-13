<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mentah_Model extends CI_Model
{

  function read()
  {

    $result = $this->db->get('barang_mentah');
    if ($result->num_rows() > 0) {
      return $result->result();
    } else {
      return false;
    }
  }

  // function get_all()
  // {
  //   $this->db->select('*');
  //   $this->db->from('table');
  //   $this->db->where('id', 1);

  //   $query = $this->db->get();

  //   return $query;
  // }

  function create($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function edit($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  function update($where, $data, $table)
  {
    $this->db->where($where);
    //$data berisi inputan yg ingin di update
    $this->db->update($table, $data);
  }

  function delete($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
