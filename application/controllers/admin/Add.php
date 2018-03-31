<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Add extends Admin_Controller{

		public function create_user(){
			if($this->aauth->create_user('admin@admin.com', 'password', 'Jamal')){
				echo "success create user";
			}else{
				echo "not success";
			}
			
		}

		public function create_group(){
			if($this->aauth->create_group('Admin','Admin Group')){
				echo "success create group";
			}else{
				echo "not success";
			}
		}

		public function add_member(){
			if($this->aauth->add_member('1','1')){
				echo "success add member to group";
			}else{
				echo "not success";
			}
		}

		public function create_perms(){
			if($this->aauth->create_perm('CREATE_USER','view all user')){
				echo "success create permission";
			}else{
				echo "not success";
			}
		}

		public function add_perm_group(){
			if($this->aauth->allow_group('2','2')){
				echo "success add permission to group";
			}else{
				echo "not success";
			}
		}

		public function add_perm_user(){
			if($this->aauth->allow_user('2','1')){
				echo "success add permission to user";
			}else{
				echo "not success";
			}
		}
	}