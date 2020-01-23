<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of post
 *
 * @author YKSERVER
 */
class Post extends CI_Controller {

    public function index() {
        
    }

    public function get_post($post_id) {

        $data['cf'] = $this->cf;
        $this->load->view('test/test_view',$data);
        $this->load->view('test/test_view_footer');
        
    }

}
