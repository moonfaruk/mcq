<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

	public function index(){
		$data = array();
		$sub_data = array();

		$sub_data['question_list'] = $this->common_model->selectAll('tbl_question');

		$data['header'] = $this->load->view('common/header', '', TRUE);
		$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

		$data['main_content'] = $this->load->view('question/index', $sub_data, TRUE);

		$data['footer'] = $this->load->view('common/footer', '', TRUE);

		$this->load->view('master', $data);
	}

	public function add(){
		$data = array();

		$data['name'] = "";
		$data['category_id'] = "";
		$data['menu_id'] = "";
		$data['option'] = "";
		$data['submit'] = "Save New Question";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Question Name','trim|required');
		

		
		if ($this->form_validation->run() == FALSE) {
			$data['header'] = $this->load->view('common/header', '', TRUE);
			$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

			$data['main_content'] = $this->load->view('question/add_form', $data, TRUE);

			$data['footer'] = $this->load->view('common/footer', '', TRUE);

			$this->load->view('master', $data);
        }else{
        	$datas = array();

        $datas['question'] = $this->input->post('name');
        $datas['category_id'] = $this->input->post('category_id');
        $datas['menu_id'] = $this->input->post('menu_id');

        $option=$this->input->post('option');

        $this->db->insert('tbl_question', $datas);
        $insert_id=$this->db->insert_id();

        $ans = $this->input->post('answer');

        foreach ($option as $key => $value) {

        	if ($key!=$ans) {
        		$this->db->insert('tbl_option', array('question_id' => $insert_id, 'option_name' => $value));
        	}else{
        		$this->db->insert('tbl_option', array('question_id' => $insert_id, 'option_name' => $value, 'ans' => 1));
        	}
        	
        	
        }

        $msg = "Successfully Create New Question!!";
        $this->session->set_flashdata('success', $msg);

        redirect("question/index");
        }

        
	}

	public function edit($id){
		$data = array();

		// $content = $this->question_model->question_info();
		$data['name'] = "";
		$data['category_id'] = "";
		$data['menu_id'] = "";
		$data['option'] = "";
		$data['submit'] = "Save New Question";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Question Name','trim|required');
		

		
		if ($this->form_validation->run() == FALSE) {
			$data['header'] = $this->load->view('common/header', '', TRUE);
			$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

			$data['main_content'] = $this->load->view('question/add_form', $data, TRUE);

			$data['footer'] = $this->load->view('common/footer', '', TRUE);

			$this->load->view('master', $data);
        }else{
        	$datas = array();

        $datas['question'] = $this->input->post('name');
        $datas['category_id'] = $this->input->post('category_id');
        $datas['menu_id'] = $this->input->post('menu_id');

        $option=$this->input->post('option');

        $this->db->insert('tbl_question', $datas);
        $insert_id=$this->db->insert_id();

        $ans = $this->input->post('answer');

        foreach ($option as $key => $value) {

        	if ($key!=$ans) {
        		$this->db->insert('tbl_option', array('question_id' => $insert_id, 'option_name' => $value));
        	}else{
        		$this->db->insert('tbl_option', array('question_id' => $insert_id, 'option_name' => $value, 'ans' => 1));
        	}
        	
        	
        }

        $msg = "Successfully Create New Question!!";
        $this->session->set_flashdata('success', $msg);

        redirect("question/index");
        }

        
	}

	public function request(){
		$data = array();
		$sub_data = array();

		$sub_data['question_request_list'] = $this->common_model->selectAll('tbl_ask_question');

		$data['header'] = $this->load->view('common/header', '', TRUE);
		$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

		$data['main_content'] = $this->load->view('question/ask_question', $sub_data, TRUE);

		$data['footer'] = $this->load->view('common/footer', '', TRUE);

		$this->load->view('master', $data);
	}
}