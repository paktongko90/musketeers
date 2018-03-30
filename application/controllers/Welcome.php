<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {
	protected $public = 'public/';

	public function __construct(){
			parent::__construct();
		}
	
	public function index()
	{
		$this->loadTemplate($this->public.'dashboard');
	}
}
