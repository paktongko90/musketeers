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
}