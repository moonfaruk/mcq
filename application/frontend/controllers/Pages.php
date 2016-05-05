<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function contact(){
    	$this->load->view('common/header');
    	$this->load->view('contact');
    	$this->load->view('common/footer');
    }

    public function ask_question(){

    	// echo "<pre>";
    	// print_r("test");
    	// exit();
    	
    	$this->load->library('form_validation');

    	$this->form_validation->set_rules('name', 'Name', 'required');
    	$this->form_validation->set_rules('email', 'Email', 'required');
    	$this->form_validation->set_rules('ask_question', 'Question', 'required');

    	if ($this->form_validation->run() === FALSE) {
    		$this->load->view('ask_question');
    	}else{
    		$data = array();
    		$data['name'] = $this->input->post('name');
    		$data['email'] = $this->input->post('email');
    		$data['question_title'] = $this->input->post('question_title');
    		$data['question'] = $this->input->post('ask_question');

    		$this->db->insert('tbl_ask_question', $data);

    		$msg = "Your Question is Successfully Submited";
    		$this->session->set_flashdata('success', $msg);

    		redirect($_SERVER['HTTP_REFERER']);
    	}
    }

    
}