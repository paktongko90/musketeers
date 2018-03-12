<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends Admin_Controller{
		private $layout = 'admin/user';

		public function index(){
			if($this->aauth->is_loggedin()){
				$users = $this->User_Model->all();
				$currentuser = $this->getCurrentUserId();
				//echo $currentuser;
				//$this->loadTemplate($this->layout.'/index',array('users' => $user),'currentuser');
				$this->loadTemplate($this->layout.'/index',compact('users','currentuser'));
			}else{
				$this->sendToLoginPage();
			}
		}

		public function Create(){
			if(!$this->aauth->is_allowed('CREATE_USER',$this->getCurrentUserId())){
				echo '<br>tak boleh view';
			}else{
				$this->loadTemplate($this->layout.'/create_user');
			}
		}

		public function userSave(){
			if(!$this->aauth->is_allowed('SAVE_USER',$this->getCurrentUserId())){
				echo "you dont have permission";
			}else{
				$this->load->library('form_validation');
			}
		}
	}
 ?>