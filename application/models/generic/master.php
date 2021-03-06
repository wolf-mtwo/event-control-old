<?php

class Master extends CI_Model {

  // table name
  private $tbl = null;

  function __construct($table_name)
  {
    if (empty($table_name)) {
      throw new Exception('The table name is not defined');
    }
    $this->tbl = $table_name;
  }

  // gets persons
  function get_all()
  {
    return $this->db->get($this->tbl)->result();
  }

  // add new person
  function save($item)
  {
    $this->db->insert($this->tbl, $item);
    return $this->get_by_id($this->db->insert_id());
  }

  function get_by_id($id)
  {
    $this->db->where('id', $id);
    $item = $this->db->get($this->tbl)->row_array();
    // $item = $this->db->get_where('users',array('id'=>$id))->row_array();
    if (!count($item)) {
      throw new Exception('item does not exist');
    }
    return $item;
  }

  function find($query)
  {
    foreach ($query as $key => $value) {
      $this->db->where($key, $value);
    }
    $item = $this->db->get($this->tbl)->result_array();
    return $item;
  }

  function find_one($query)
  {
    foreach ($query as $key => $value) {
      $this->db->where($key, $value);
    }
    $item = $this->db->get($this->tbl)->row_array();
    if (count($item)) {
      return $item;
    }
    return null;
  }

  function update($id, $item){
    $this->db->where('id', $id);
    $this->db->update($this->tbl, $item);
    return $this->get_by_id($id);
  }

  function delete($id)
  {
    $item = $this->get_by_id($id);
    if (empty($item)) {
      throw new Exception('id is undefined');
    }
    $this->db->where('id', $id);
    $this->db->delete($this->tbl);
    return $item;
  }

  function count_all(){
    return $this->db->count_all($this->tbl_person);
  }

  function get_paged_list($limit = 10, $offset = 0){
    $this->db->order_by('id','asc');
    return $this->db->get($this->tbl_person, $limit, $offset);
  }
}
