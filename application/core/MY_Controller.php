<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MY_Controller extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library("Aauth");
		}
	}

	class Admin_Controller extends MY_Controller{
		protected $header = 'admin/main/header';
		protected $footer = 'admin/main/footer';

	protected function loadHeader(){
	$this->load->view($this->header);
	}

	protected function loadFooter(){
		$this->load->view($this->footer);
	}

	protected function loadTemplate($template,$data = array()){
		$this->loadHeader();
		$this->load->view($template,$data,$data);
		$this->loadFooter();
	}

	protected function sendToLoginPage(){
		redirect('admin/login');
	}
}

 ?>