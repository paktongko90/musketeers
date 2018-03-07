<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Tazul extends CI_Controller{

		public function index(){
			echo 'Hello World';
		}

		public function faizul(){
			$name = 'faizul';

			echo $name;
		}
	}
 ?>