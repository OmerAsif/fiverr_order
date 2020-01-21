<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of table
 *
 * @author omer
 */
class Content extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Content_model');
        $this->load->model('Dashboard_model');
    }

    function index() {
        
    }

    public function cartas_de_credito_contempladas_imoveis() {
        $data['lists'] = $this->Content_model->getImoves();
        $info['contact'] = $this->Dashboard_model->getCompanyInfo();

        $this->load->view('templates/header', $info);
        $this->load->view('content/cartas_de_credito_contempladas_imoveis', $data);
        $this->load->view('templates/footer',$info);
    }

    public function cartas_de_credito_contempladas_veiculos() {
        $data['lists'] = $this->Content_model->getImoves();
        $info['contact'] = $this->Dashboard_model->getCompanyInfo();
        $this->load->view('templates/header', $info);
        $this->load->view('content/cartas_de_credito_contempladas_veiculos', $data);
        $this->load->view('templates/footer',$info);
    }

    private function getData($url, $property_type, $type_id, $table_id) {

        $fmt = new NumberFormatter('de_DE', NumberFormatter::DECIMAL);
        $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);
        $data_array = array();
        $db_array = array();
        require_once 'simple_html_dom.php';


        $html = file_get_html($url);
        $table = $html->find($table_id . ' > tbody > tr > td');
        $ary_size = sizeof($table);
        $counter = 1;
        $code = 1;
        $Credit = "";
        $Input = "";
        $Installments = "";
        $Administrator = "";
        $Administrator_img = "";
        $Situation = "";
        $note = "";
        $interested = "";
        $row_id = "";
        $counter = 1;
        for ($i = 0; $i < $ary_size; $i++) {

            if ($counter === 1) {
                $Credit_value = str_replace("R$ ", "", $table[$i]->plaintext);
                $Credit = $fmt->parse($Credit_value);

                $data_array['credit'] = $Credit;
            } elseif ($counter === 2) {
                $Input_value = str_replace("R$ ", "", $table[$i]->plaintext);
                $Input = $fmt->parse($Input_value);
                $data_array['input'] = $Input;
            } elseif ($counter === 3) {
                $Installments = $table[$i]->plaintext;
                $data_array['installments'] = $Installments;
            } elseif ($counter === 4) {
                $Administrator = str_replace("</th>", "", $table[$i]->plaintext);
                $Administrator = preg_replace("/\s/", "", $table[$i]->plaintext);
                //$administrator_img_url = (string) 'https://www.cartadecreditocontemplada.com.br/' . $table[$i]->find('img')[0]->attr['src'];
                //$data_array['administrator_img_url'] = $administrator_img_url;
                //$url_arr = explode("/", $administrator_img_url);
                //$img_file_name = end($url_arr);
                //$data_array['administrator_img_name'] = $img_file_name;
                $data_array['administrator'] = str_replace('</th>', "", $Administrator);
            } elseif ($counter === 5) {
                $Situation = $table[$i]->plaintext;

                $data_array['situation'] = $Situation;
            } elseif ($counter === 6) {
                $note = $table[$i]->plaintext;
                $data_array['note'] = $note;
            } elseif ($counter === 7) {
                $interested = $table[$i]->plaintext;
                $data_array['interested'] = $interested;
            }
            if ($counter % 7 === 0) {
                $data_array['property_type'] = $property_type;
                $data_array['property_type_id'] = $type_id;
                $row_id = $table[$i]->parent()->attr;
                $data_array['row_id'] = (int) $row_id['data-cotacodigo'];
                $data_array['source'] = $url;



                array_push($db_array, $data_array);

//        echo $Credit . " | " . $Input . " | " . $Installments . "|" . $Administrator . "|" . $Administrator_img . " | " . $Situation . " | " . $note . " | " . $interested . " | " . $img_file_name . "<br/>";
                $counter = 1;
            } else {
                $counter++;
            }
        }
        return $db_array;
    }

    private function downloadImoveis() {
        $page_url = "https://www.cartadecreditocontemplada.com.br/cartas-de-credito-contempladas-imoveis";

        $img_data = $this->getData($page_url, 'imoveis', 1, '#tbCotasImoveis');

//        var_dump($img_data);
//        die();
        $this->Content_model->SaveImoves($img_data);
//        ini_set('MAX_EXECUTION_TIME', '-1');
//        foreach ($img_data as $key => $val) {
//            $img_url = $val['administrator_img_url'];
//            $disk_path = FCPATH . 'uploads';
//            $filename = basename($img_url);
//            $complete_save_loc = $disk_path . '\\' . $filename;
//            file_put_contents($complete_save_loc, file_get_contents($img_url));
//        }
    }

    private function downloadImoveis1() {
        $page_url = "https://www.contempladosp.com.br/cartas-de-credito-contemplada-de-imoveis";

        $img_data = $this->getData($page_url, 'imoveis', 1, 'body > div:nth-child(5) > div > div > div:nth-child(2) > table');

//        var_dump($img_data);
//        die();
        $this->Content_model->SaveImoves($img_data);
//        ini_set('MAX_EXECUTION_TIME', '-1');
//        foreach ($img_data as $key => $val) {
//            $img_url = $val['administrator_img_url'];
//            $disk_path = FCPATH . 'uploads';
//            $filename = basename($img_url);
//            $complete_save_loc = $disk_path . '\\' . $filename;
//            file_put_contents($complete_save_loc, file_get_contents($img_url));
//        }
    }

    private function downloadVeiculos() {
        $page_url = "https://www.cartadecreditocontemplada.com.br/cartas-de-credito-contempladas-veiculos";

        $img_data = $this->getData($page_url, 'veiculos', 2, '#tbCotasVeiculos');



        $this->Content_model->SaveVeiculos($img_data);

//        ini_set('MAX_EXECUTION_TIME', '-1');
//        foreach ($img_data as $key => $val) {
//            $img_url = $val['administrator_img_url'];
//            $disk_path = FCPATH . 'uploads';
//            $filename = basename($img_url);
//            $complete_save_loc = $disk_path . '\\' . $filename;
//            file_put_contents($complete_save_loc, file_get_contents($img_url));
//        }
    }

    private function downloadVeiculos1() {
        $page_url = "https://www.contempladosp.com.br/cartas-de-credito-contemplada-de-veiculos";

        $img_data = $this->getData($page_url, 'veiculos', 2, 'body > div:nth-child(5) > div > div > div:nth-child(2) > table');
        $this->Content_model->SaveVeiculos($img_data);
    }

    public function DownloadData() {
        ini_set('MAX_EXECUTION_TIME', '-1');
        $this->output->enable_profiler(true);
        $this->downloadImoveis1();
        $this->downloadImoveis();
        $this->downloadVeiculos();
        $this->downloadVeiculos1();
        echo 'ok';
    }

    public function getRequest() {
        $intereste_array = array();
        $intereste_vals = array();
        if (isset($_POST)) {

            $intereste_vals['name'] = $_POST['interesseNome'];
            $intereste_vals['phone'] = $_POST['interesseTelefone'];
            $intereste_vals['cell_phone'] = $_POST['interesseCelular'];
            $intereste_vals['Email'] = $_POST['interesseEmail'];
            $intereste_vals['Message'] = $_POST['interesseMensagem'];
            $intereste_vals['property_id'] = $_POST['cotaCodigo'];
            $intereste_vals['interest'] = $_POST['interesseEnviar'];

            array_push($intereste_array, $intereste_vals);
            $last_id = $this->Content_model->SaveRequest($intereste_array);
            redirect(base_url() . 'Content/view_data/' . $last_id);
        }
    }

    public function view_data($param) {

        $data['lists'] = $this->Content_model->FiendRequestedProperty($param);
        $info['contact'] = $this->Dashboard_model->getCompanyInfo();
        $this->load->view('templates/header', $info);
        $this->load->view('content/request', $data);
        $this->load->view('templates/footer',$info);
    }

}
