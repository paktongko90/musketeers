<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends Admin_Controller{

	protected $layout = 'admin/authorization/';

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if(! $this->aauth->is_allowed('AUTHORIZATION',$this->getCurrentUserID())){
			echo "tak boleh view";
		}else{
			$users = $this->db->get('users')->result();
			$permissions = $this->db->get('perms')->result();
			$this->loadTemplate($this->layout.'index',compact('users','permissions'));
		}
	}

	public function setPermission(){
		foreach($this->input->post('modules') as $module) {
			$data = array(
				'perm_id' => $module,
				'user_id' => $this->input->post('user_id')
				);

			$exists = $this->db->get_where('perm_to_user',array('user_id' => $this->input->post('user_id'),'perm_id' => $module))->row();
			if(count($exists) == 0 ) {

				$this->db->insert('perm_to_user',$data);
			}
		}
		redirect('admin/authorization');
	}

	public function addPermission(){
		if(! $this->aauth->is_allowed('ADD_PERMISSION',$this->getCurrentUserID())){
			echo "tak boleh view";
		}else{
			$this->loadTemplate($this->layout.'addpermission');
		}
	}

	public function savePerm(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('perm','Perm','required');
		$this->form_validation->set_rules('permdesc','Permdesc','required');

		if(! $this->form_validation->run()){
			$this->session->set_flashdata('_error','All field are required');
			redirect('/admin/authorization/addpermission');
		}else{
			if($this->aauth->create_perm($this->input->post('perm'),$this->input->post('permdesc'))){
				redirect('/admin/authorization/listperm');
			}else{
				$this->aauth->print_errors();
				echo '<br><a href ="create">Back</a>';
			}
		}
	}

	public function listPerm(){
		if(! $this->aauth->is_allowed('LISTPERMISSION',$this->getCurrentUserID())){
			echo "tak boleh view";
		}else{
			$permissions = $this->db->get('perms')->result();
			$currentuser = $this->getCurrentUserId();
			$this->loadTemplate($this->layout.'listpermission',compact('permissions','currentuser'));
		}
	}

	public function deletePerm(){
		if(! $this->aauth->is_allowed('DELETEPERMISSION',$this->getCurrentUserId())){
			echo "xboleh delete";
		}else{
			$this->db->delete('perms',array('id' => $this->uri->segment(4)));
			redirect('/admin/authorization/listperm');
		}
	}

	public function listGroup(){
		if(! $this->aauth->is_allowed('LISTGROUP',$this->getCurrentUserId())){
			echo "xboleh view";
		}else{
			$group = $this->db->get('groups')->result();
			$this->loadTemplate($this->layout.'listgroup',array('group' => $group));
		}
	}

	public function createGroup(){
		if(! $this->aauth->is_allowed('CREATEPERMISSION', $this->getCurrentUserId())){
			echo "x boleh create";
		}else{
			$this->loadTemplate($this->layout.'addgroup');
		}
	}

	public function saveGroup(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('group','Group','required');
		$this->form_validation->set_rules('groupdesc','Groupdesc','required');

		if(! $this->form_validation->run()){
			$this->session->set_flashdata('_error','All field are required');
			redirect('/admin/authorization/creategroup');
		}else{
			if($this->aauth->create_group($this->input->post('group'),$this->input->post('groupdesc'))){
				redirect('/admin/authorization/listgroup');
			}else{
				$this->aauth->print_errors();
			}
		}
	}

	public function deleteGroup(){
		if(! $this->aauth->is_allowed('DELETEGROUP', $this->getCurrentUserId())){
			echo "xboleh delete";
		}else{
			$this->db->delete('groups',array('id' => $this->uri->segment(4)));
			redirect('/admin/authorization/listGroup');
		}
	}

	public function setpermGroup(){
		foreach($this->input->post('modules') as $module) {
			$data = array(
				'perm_id' => $module,
				'group_id' => $this->input->post('group_id')
				);

			$exists = $this->db->get_where('perm_to_group',array('group_id' => $this->input->post('group_id'),'perm_id' => $module))->row();
			if(count($exists) == 0 ) {
				$this->db->insert('perm_to_group',$data);
			}
		}
		redirect('admin/authorization');
	}

	public function userGroup(){
		foreach ($this->input->post('modules') as $module) {
			$data = array(
				'group_id' => $module,
				'user_id' => $this->input->post('user_id')
			);
			$exists = $this->db->get_where('user_to_group',array('user_id' => $this->input->post('user_id'),'group_id' => $module))->row();
			if(count($exist) == 0){
				$this->db->insert('user_to_group',$data);
			} 
		}
		redirect('admin/authorization');
	}
}