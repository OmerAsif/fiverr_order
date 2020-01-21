<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controllers
 *
 * @author omer
 */
class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Content_model');
        $this->load->model('Dashboard_model');
    }

    public function index() {

//        $this->output->enable_profiler(TRUE);

        $data['lists'] = $this->Content_model->getImoves();
        $data['lists1'] = $this->Content_model->getVeiculos();
        $info['contact'] = $this->Dashboard_model->getCompanyInfo();
        

        $this->load->view('templates/header',$info);
        $this->load->view('home/home', $data);
        $this->load->view('templates/footer');
    }

}
