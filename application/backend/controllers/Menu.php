<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index(){
		$data = array();
		$sub_data = array();

		$sub_data['menu_list'] = $this->common_model->selectAll('tbl_menu');

		$data['header'] = $this->load->view('common/header', '', TRUE);
		$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

		$data['main_content'] = $this->load->view('menu/index', $sub_data, TRUE);

		$data['footer'] = $this->load->view('common/footer', '', TRUE);

		$this->load->view('master', $data);
	}

	public function add(){
		$data = array();

		$data['name'] = "";
		$data['category_id'] = "";
		$data['category_list'] = $this->common_model->selectAll('tbl_category');
		$data['serial'] = "";
		$data['submit'] = "Save New Menu";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Menu Name','trim|required');
		$this->form_validation->set_rules('category_id','Category Name','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['header'] = $this->load->view('common/header', '', TRUE);
			$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

			$data['main_content'] = $this->load->view('menu/add_form', $data, TRUE);

			$data['footer'] = $this->load->view('common/footer', '', TRUE);

			$this->load->view('master', $data);
        }else{
        	$datas = array();

        $datas['name'] = $this->input->post('name');
        $datas['serial'] = $this->input->post('serial');
        $datas['category_id'] = $this->input->post('category_id');

        $this->db->insert('tbl_menu', $datas);

        $msg = "Successfully Create New Menu!!";
        $this->session->set_flashdata('success', $msg);

        redirect("menu/index");
        }

        
	}

	public function edit($id){
		$data = array();

		$content = $this->common_model->getInfo('tbl_menu', array('id' => $id));

		$data['name'] = $content->name;
		$data['category_id'] = $content->category_id;
		$data['category_list'] = $this->common_model->selectAll('tbl_category');
		$data['serial'] = $content->serial;
		$data['submit'] = "Update Menu";

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Menu Name','trim|required');
		$this->form_validation->set_rules('category_id','Category Name','trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['header'] = $this->load->view('common/header', '', TRUE);
			$data['sidebar'] = $this->load->view('common/sidebar', '', TRUE);

			$data['main_content'] = $this->load->view('menu/add_form', $data, TRUE);

			$data['footer'] = $this->load->view('common/footer', '', TRUE);

			$this->load->view('master', $data);
        }else{
        	$datas = array();

        $datas['name'] = $this->input->post('name');
        $datas['serial'] = $this->input->post('serial');
        $datas['category_id'] = $this->input->post('category_id');

        $this->common_model->update('tbl_menu', $datas, array('id' => $id));

        $msg = "Successfully Update Selected Menu!!";
        $this->session->set_flashdata('success', $msg);

        redirect("menu/index");
        }

        
	}
}