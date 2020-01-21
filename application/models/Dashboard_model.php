<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard_model
 *
 * @author omer
 */
class Dashboard_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function auth_user($param) {
        $this->db->select('id, email ,password');
        $query = $this->db->get_where('user', array('email' => $param));
        return $query->result_array();
    }

    function update_company_info($param) {
        $this->db->where('id', 1);
        $this->db->update('company_info', $param);
        //$this->db->update('company_info');

        return "OK";
    }
    function update_user_info($id, $param) {
        $this->db->where('id', $id);
        $this->db->update('user', $param);
        //$this->db->update('company_info');

        return "OK";
    }

    function getCompanyInfo() {
        $query = $this->db->get('company_info');
        return $query->result_array();
    }
    function getUserInfo($id) {
        $query = $this->db->get_where('user', array('id'=>$id));
        return $query->result_array();
    }

}
