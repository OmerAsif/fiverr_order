<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Image
 *
 * @author omer
 */
class Image extends CI_Controller {

    function index() {
        
    }
    
     function show_image($image_filename) {

       $img_path = "../../assets/img/layout/".$image_filename;
       $fp = fopen($img_path,'rb');
          header('Content-Type: image/png');
          header('Content-Type: image/.jpg');
          header('Content-length: ' . filesize($img_path));
         fpassthru($fp);
    }

}
