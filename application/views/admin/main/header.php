<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/morris.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		}

		li {
		    display: inline;
		}
</style>
   
</head>
<body style="background: #F8F8FF">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	  <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $this->aauth->get_user()->username; ?>'s Dashboard</a>
	  <ul class="navbar-nav">
	  	<?php 
	  	if($this->aauth->is_admin()){
	  		echo '<li class ="nav-item">
	  		<a class ="nav-link" href="'.base_url('admin/user').'">User</a>
	  		</li>';
		}
		if($this->aauth->is_admin()){
	  		echo '<li class ="nav-item">
	  		<a class ="nav-link" href="'.base_url('admin/authorization').'">Authorization</a>
	  		</li>';
		}
	   ?>
	  </ul>
	</nav>