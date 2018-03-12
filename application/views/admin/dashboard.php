<h1>This Admin Dashboard</h1>
<?php 
 	$currentuser = $this->aauth->get_user()->id;
 	if(! $this->aauth->is_allowed('CREATE_USER',$currentuser)){
		echo 'tidak boleh view';
	}else{
		echo 'boleh view';
	}
  ?>
