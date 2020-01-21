<?php

class Content_model extends CI_Model {

    function __construct() {
        
    }

    public function SaveImoves($param = array()) {
        foreach ($param as $key => $val) {
            $data[0] = $val;
            $query = $this->db->get_where('properties', array('row_id' => $val['row_id']));
            if ($query->num_rows()) {

                $this->db->where('row_id', $val['row_id']);
                $this->db->where('source', $val['source']);
                $this->db->update('properties', $val);
            } else {
                $this->db->insert_batch('properties', $data);
            }
        }
    }

    public function SaveVeiculos($param = array()) {

        foreach ($param as $key => $val) {
            $data[0] = $val;
            $query = $this->db->get_where('properties', array('row_id' => $val['row_id']));
            if ($query->num_rows()) {

                $this->db->where('row_id', $val['row_id']);
                $this->db->where('source', $val['source']);
                $this->db->update('properties', $val);
            } else {
                $this->db->insert_batch('properties', $param);
            }
        }
    }

    public function getImoves() {
        $query = $this->db->get_where('properties', array('property_type_id' => 1));
        return $query->result_array();
    }

    public function getVeiculos() {
        $query = $this->db->get_where('properties', array('property_type_id' => 2));
        return $query->result_array();
    }

    public function SaveRequest($parm) {
        $this->db->insert_batch('interest_requests', $parm);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function FiendRequestedProperty($parm) {
        $this->db->select('property_id');
        $this->db->where(array('id' => (int)$parm));
        
        $Request_property_id = $this->db->get('interest_requests');
        $id = $Request_property_id->result_array()[0]['property_id'];
       
        $query = $this->db->get_where('properties', array('ID' => $id));
        return $query->result_array() ;
    }

}
