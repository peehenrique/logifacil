<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar_model extends CI_Model{

  public function getClientes()
  {
    return $this->db->get('tblclients')->result();
  }

  public function getBusca($query=NULL)
{
  if ($query) {
    $this->db->select('tblclients.*');
    $this->db->from('tblclients');
    $this->db->like('tblclients.phonenumber', $query, 'both');
    $this->db->or_like('tblclients.company', $query, 'both');
    $this->db->or_like('tblclients.address', $query, 'both');
    return $this->db->get()->result();
  }
}

}
