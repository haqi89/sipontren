<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Masterdata_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_suku() {
        $this->db->select('ID_SUKU as id, NAMA_SUKU as title');
        $this->db->from('md_suku');
        $result = $this->db->get();
        
        return $result->result();
    }
    
    public function get_gol_darah() {
        $this->db->select('ID_DARAH as id, NAMA_DARAH as title');
        $this->db->from('md_golongan_darah');
        $result = $this->db->get();
        
        return $result->result();
    }
    
    public function get_agama() {
        $this->db->select('ID_AGAMA as id, NAMA_AGAMA as title');
        $this->db->from('md_agama');
        $result = $this->db->get();
        
        return $result->result();
    }
}
