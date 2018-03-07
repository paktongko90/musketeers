<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/morris.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
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
	Username : <?php echo $this->aauth->get_user()->username; ?>
<ul>
	<?php 
	if($this->aauth->is_admin()){
		echo '<li><a href="#home">Home</a></li>';
	} 
  ?>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <?php 
  if($this->aauth->is_admin()){
  	echo '<li><a href="">UserManagement</a></li>';
	}
   ?>
</ul>
	
