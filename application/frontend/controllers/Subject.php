<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->helper('form');
	}
    

    public function index(){
    	$this->load->view('subject/index');
    }

    public function view_details(){
    	$this->load->view('subject/view_details');
    }

    
 
}