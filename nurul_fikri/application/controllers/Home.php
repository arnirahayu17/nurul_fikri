<?php
	defined('BASEPATH') OR exit('No direct access allowed');

	class Home extends CI_Controller {
		public function index() {
			$this->load->view("layouts/header");
			$this->load->view("home/index");
			$this->load->view("layouts/footer");
        }
    }
?>