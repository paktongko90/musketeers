<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends Admin_Controller{
		private $layout = 'admin/user';

		public function index(){
			if($this->aauth->is_loggedin()){
				if(!$this->aauth->is_allowed('VIEW_USER',$this->getCurrentUserId())){
					$this->sendToLoginPage();
				}else{
					$users = $this->user_model->all();
					$currentuser = $this->getCurrentUserId();
					$this->loadTemplate($this->layout.'/index',compact('users','currentuser'));
				}
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

				$this->form_validation->set_rules('email','Email','required');
				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('password','Password','required');
				$this->form_validation->set_rules('repassword','Password','required');

				if(! $this->form_validation->run()){
					$this->session->set_flashdata('_error','All field are required');
					redirect('/admin/user/create');
				}else{
					if($this->aauth->create_user($this->input->post('email'),$this->input->post('password'),$this->input->post('username'))){
						//assign user create to group
						$user_id = $this->user_model->getUserid($this->input->post('email'));
						foreach ($user_id as $userid) {
							$this->aauth->add_member($userid->id,'3');
						}
						redirect('/admin/user');
					}else{
						$this->aauth->print_errors();
						echo '<br><a href ="create">Back</a>';
					}
				}
			}
		}

		public function deleteUser(){
			if(! $this->aauth->is_allowed('DELETE_USER',$this->getCurrentUserId())){
				echo "you dont have permission";
			}else{
				$this->db->delete('users',array('id' => $this->uri->segment(4)));
				redirect('admin/user');
			}
		}
	}
 ?>