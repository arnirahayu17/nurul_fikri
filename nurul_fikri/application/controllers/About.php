<?php
	defined('BASEPATH') OR exit('No direct access allowed');

	class About extends CI_Controller {
	
		public function index(){
	
			$this->load->view('layouts/header');
			$this->load->view('about/index');
			$this->load->view('layouts/footer');
		}
	
    }

?>