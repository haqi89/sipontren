<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Kegiatan_model extends CI_Model {

    var $table = 'md_kegiatan';
    var $primaryKey = 'ID_KEGIATAN';
    var $user = 'USER_KEGIATAN';

    public function __construct() {
        parent::__construct();
    }

    private function _get_table() {
        $this->db->from($this->table);
        $this->db->order_by('NAMA_KEGIATAN', 'ASC');
    }

    public function get_datatable() {
        $this->_get_table();
        $data = $this->db->get()->result();
        
        $result = array(
            "data" => $data
        );

        return $result;
    }

    public function get_by_id($id) {
        $this->_get_table();
        $this->db->where($this->primaryKey, $id);
        $result = $this->db->get()->row_array();
        
        return $result;
    }
    
    public function get_all() {
        $this->db->select('ID_KEGIATAN as id, NAMA_KEGIATAN as title');
        $this->_get_table();
        $result = $this->db->get();
        
        return $result->result();
    }
    
    public function save($data) {
        if($this->user != '') $data[$this->user] = $this->session->userdata('ID_USER');
        if (isset($data[$this->primaryKey])) {
            $where = array($this->primaryKey => $data[$this->primaryKey]);
            unset($data[$this->primaryKey]);
            $result = $this->update($data, $where);
        } else {
            unset($data[$this->primaryKey]);
            $result = $this->insert($data);
        }
        
        return $result;
    }

    public function insert($data) {
        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

    public function update($data, $where) {
        $this->db->update($this->table, $data, $where);
        
        return $this->db->affected_rows();
    }

    public function delete($id) {
        $where = array($this->primaryKey => $id);
        $this->db->delete($this->table, $where);
        
        return $this->db->affected_rows();
    }

}
