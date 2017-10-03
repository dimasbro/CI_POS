<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function index(){
		//$this->load->view('view_dashboard');
		chek_session();
		$this->template->load('template','view_dashboard');
	}

}
