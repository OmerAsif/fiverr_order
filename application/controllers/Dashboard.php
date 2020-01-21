<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin-panel
 *
 * @author omer
 */
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Dashboard_model');
    }

    public function index() {

        if (isset($this->session->userdata['id'])) {
            $this->load->view('dashboard_new/head');
            $this->load->view('dashboard_new/header');
            $this->load->view('dashboard_new/side-nav');
            $this->load->view('dashboard_new/body');
            $this->load->view('dashboard_new/footer');
        } else {
            redirect(base_url() . 'dashboard/user_login_form');
        }
    }

    public function dashboard_old() {

        if (isset($this->session->userdata['id'])) {
            $this->load->view('dashboard/dashboard_header');
            $this->load->view('dashboard/dashboard');
            $this->load->view('dashboard/dashboard_footer');
        } else {
            redirect(base_url() . 'dashboard/user_login_form');
        }
    }

    public function dashboard_new_login() {
        $this->load->view('dashboard_new/head');
        $this->load->view('dashboard_new/login');
        $this->load->view('dashboard_new/footer');
    }

    public function user_login_form() {

        $this->load->view('dashboard/dashboard_header');
        $this->load->view('dashboard/login_page');
        $this->load->view('dashboard/dashboard_footer');
    }

    public function get_body($param) {
        if ($param === "setting") {
            $company_info['company_info'] = $this->Dashboard_model->getCompanyInfo();
            $company_info['user_info'] = $this->Dashboard_model->getUserInfo($this->session->userdata['id']);
            $this->load->view('dashboard/' . $param, $company_info);
        } else {
            $this->load->view('dashboard/' . $param);
        }
    }

    public function auth_user() {

//        echo password_hash('123', PASSWORD_DEFAULT);

        if (isset($this->session->userdata['id'])) {
            redirect(base_url() . 'dashboard');
        }

        if (isset($_POST)) {
            $hashed = password_hash($_POST['Password'], PASSWORD_DEFAULT);
            $email = $_POST['Email'];

            $data = $this->Dashboard_model->auth_user($email);

            if (sizeof($data) === 0) {
                echo 'please enter correct email or password';
                redirect(base_url() . 'dashboard/user_login_form');
            } else if (sizeof($data) === 1) {
                if (password_verify($_POST['Password'], $data[0]['password'])) {
                    $newdata = array(
                        'email' => $data[0]['email'],
                        'id' => $data[0]['id']
                    );

                    $this->session->set_userdata($newdata);
                    redirect(base_url() . 'dashboard');
                } else {
                    redirect(base_url() . 'dashboard/user_login_form');
                }
            }
        }
    }

    public function update_company_data() {
        $info_array = array();
        if (isset($_POST)) {
            $info_array[0] = $_POST;
            $this->Dashboard_model->update_company_info($_POST);
        }
    }

    public function update_user_data() {
        $info_array = array();
        if (isset($_POST)) {
            $post_array = array(
                'user_name' => $_POST['user_name'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'email' => $_POST['email'],
                'status' => $_POST['status']
            );
            $info_array = $post_array;


            $updates_status = $this->Dashboard_model->update_user_info($this->session->userdata['id'], $info_array);
            echo $updates_status;
        }
    }

}
