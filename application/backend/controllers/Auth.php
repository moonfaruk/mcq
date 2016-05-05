<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Auth_model');

        if ($this->session->userdata('user_logged')) {
            
            $msg = "You Are Already Loged In";
            $this->session->set_flashdata('success', $msg);
                        
            redirect('home');
        }
    }

    public function index() {
        $this->load->view('login');
    }

    public function check_login() {
        $this->load->library('form_validation');
        
//        echo '<pre>';
//        print_r($_POST);
//        exit();

        $this->form_validation->set_rules('username', 'username', 'required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|xss_clean');

        if ($this->form_validation->run() !== FALSE) {
            $msg = "There is an error, Please try again!!";
            $this->session->set_flashdata('error', $msg);
            $this->load->view('login');
        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');


            $checkdata = $this->Auth_model->checklogin($username, $password);

            
            if (!empty($checkdata)) {
                $userinfo = array(
                    'firstname' => $checkdata->first_name,
                    'lastname' => $checkdata->last_name,
                    'user_email' => $checkdata->email,
                    'user_phone' => $checkdata->phone,
                    'username' => $checkdata->username,
                    'uid' => $checkdata->user_id,
                    'user_type' => $checkdata->user_type,
                    'profile_picture' => $checkdata->profile_picture,
                                        
                    'user_logged' => TRUE
                );

                $this->session->set_userdata($userinfo);
                
                
                /*
                  $logininfo = $this->Logins->updateLoginInfo($uid);
                 */

                $msg = "Successfully Loged In";
                $this->session->set_flashdata('success', $msg);

                redirect('home');
            } else {
                $msg = "There is an error in login, Please try again!!";
                $this->session->set_flashdata('error', $msg);
                
                redirect('./');
            }
        }
    }

    public function my_profile(){
        $data['bc'] = array(array('link' => base_url(), 'page' => 'Home'), array('link' => site_url('user'), 'page' => 'User'), array('link' => '#', 'page' => 'My Profile'));

        $data['header']       = $this->load->view('common/header', '', TRUE);
        $data['sidebar']      = $this->load->view('common/sidebar', '', TRUE);
        $data['top_navbar']   = $this->load->view('common/top_navbar', '', TRUE);
        $data['main_content'] = $this->load->view('includes/user/my_profile', $data, TRUE);
        //$data['main_content'] = $this->load->view('includes/user/profile', $data, TRUE);
        $data['footer']       = $this->load->view('common/footer', '', TRUE);

        $this->load->view('master_dashboard', $data);
    }

    public function logout() {
        //$msg = "Operation Successfull!!";
        //$this->session->set_flashdata('success', $msg);

        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

}
