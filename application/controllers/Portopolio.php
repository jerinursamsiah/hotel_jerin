<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portopolio extends CI_Controller {
	public function index(){
		
		$this->load->view('partial_home/header');
		$this->load->view('partial_home/navigasi');
		$this->load->view('content/portopolio');
		$this->load->view('partial_home/footer');
		$this->load->view('partial_home/modals');
		$this->load->view('partial_home/js');
	}
}
