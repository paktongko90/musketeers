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

		public function Create(){
			if( $this->aauth->is_allowed('CREATE_USER',$this->getCurrentUserId())){
				echo $this->aauth->get_perm_id('CREATE_USER');
				echo '<br>tak boleh view';
			}else{
				$this->loadTemplate($this->layout.'/create_user');
			}
		}
	}
 ?>