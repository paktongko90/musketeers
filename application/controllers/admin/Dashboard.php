<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends Admin_Controller{
		protected $layout = '/admin/';

		public function index(){
			if($this->aauth->is_loggedin()){
				$this->loadTemplate($this->layout.'dashboard');
			}else{
				$this->sendToLoginPage();
			}
		}
	}
 ?>