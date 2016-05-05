<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function index(){
		$data = array();
		$sub_data = array();

		$sub_data['category_list'] = $this->common_model->selectAll('tbl_category');

		$data['header'] = $this->load->view('common/header', '', TRUE);
		$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

		$data['main_content'] = $this->load->view('category/index', $sub_data, TRUE);

		$data['footer'] = $this->load->view('common/footer', '', TRUE);

		$this->load->view('master', $data);
	}

	public function add(){
		$data = array();

		$data['name'] = "";
		$data['category_image'] = "";
		$data['serial'] = "";
		$data['submit'] = "Save New Category";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Category Name','trim|required');
		

		if ($this->form_validation->run() == FALSE) {
			$data['header'] = $this->load->view('common/header', '', TRUE);
			$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

			$data['main_content'] = $this->load->view('category/add_form', $data, TRUE);

			$data['footer'] = $this->load->view('common/footer', '', TRUE);

			$this->load->view('master', $data);
        }else{
        	$datas = array();

        $datas['name'] = $this->input->post('name');
        $datas['serial'] = $this->input->post('serial');

        $this->db->insert('tbl_category', $datas);

        $msg = "Successfully Create New Category!!";
        $this->session->set_flashdata('success', $msg);

        redirect("category/index");
        }

        
	}

	public function edit($id){
		$data = array();
		$content = $this->common_model->getInfo('tbl_category', array('id' => $id));

		$data['name'] = $content->name;
		$data['category_image'] = $content->category_image;
		$data['serial'] = $content->serial;
		$data['submit'] = "Update Category";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Category Name','trim|required');
		

		if ($this->form_validation->run() == FALSE) {
			$data['header'] = $this->load->view('common/header', '', TRUE);
			$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

			$data['main_content'] = $this->load->view('category/add_form', $data, TRUE);

			$data['footer'] = $this->load->view('common/footer', '', TRUE);

			$this->load->view('master', $data);
        }else{
        	$datas = array();

        $datas['name'] = $this->input->post('name');
        $datas['serial'] = $this->input->post('serial');

        $this->common_model->update('tbl_category', $datas, array('id' => $id));

        $msg = "Successfully Update Selected Category!!";
        $this->session->set_flashdata('success', $msg);

        redirect("category/index");
        }

        
	}
}