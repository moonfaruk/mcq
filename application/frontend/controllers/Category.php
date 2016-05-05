<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->helper('form');
	}
    

    public function index(){
    	$this->load->view('category/index');
    }

    public function sub_category(){
    	$this->load->view('category/sub_category');
    }

    public function subject(){
    	
    }

 
}