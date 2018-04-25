<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Public_Controller{
	protected $user = 'public/user';

	public function __construct(){
		parent::__construct();
	}

	public function Login(){
		$this->load->view($this->user.'/login');
	}

	public function action(){
		echo "hi";
	}

	public function Register(){

	}
}
 ?>