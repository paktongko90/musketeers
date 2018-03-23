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
			$this->loadTemplate($this->layout.'index');
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
}