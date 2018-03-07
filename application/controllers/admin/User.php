<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends Admin_Controller{
		private $layout = 'admin/user';

		public function index(){
			if($this->aauth->is_loggedin()){
				$user = $this->User_Model->all();
				$this->loadTemplate($this->layout.'/index',array('users' => $user));
			}else{
				$this->sendToLoginPage();
			}
		}
	}
 ?>